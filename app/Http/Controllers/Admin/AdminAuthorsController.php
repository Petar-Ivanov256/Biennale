<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Author;
use Storage;
use App\Http\Controllers\Controller;
use Image;
use App\Work;

class AdminAuthorsController extends Controller
{
    public function add(Request $request)
	{
        $works = Work::all()->sortBy('englishTitle');
		return view('authors.create', ['works' => $works]);
	}

    public function create(Request $request)
    {
    	$this->validate($request, $this->createValidationRules());
        
    	$author = new Author();
    	$author->name = $request->input('name');
    	$author->country = $request->input('country');
    	$author->info = $request->input('info');
        $author->info_en = $request->input('info_en');
        $author->email = $request->input('email');

        $img = Image::make($request->file('photo')->getRealPath())->encode('data-url');
        $author->photo = $img;

        $author->save();

        $worksIds = $request->input('works');
        foreach ($worksIds as $id) {
            $author->works()->attach($id);
        }

        return redirect('/admin/authors');
    }

    public function all(Request $request)
    {
    	$authors = Author::all();
    	return view('authors.allAuthors', [ 'authors' => $authors ]);
    }

    public function show($id)
    {
    	$author = Author::find($id);
    	return base64_encode(file_get_contents('C:\Users\Dimitar\Desktop\asd.jpg'));  //$author;//view('TODO', [ 'author' => $author ]);
    }

    public function edit(Request $request, $id)
    {
    	$author = Author::find($id);
        $works = Work::all()->sortBy('englishTitle');
    	return view('authors.edit', [ 'author' => $author, 'works' => $works ]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, $this->editValidationRules());

    	$author = Author::find($id);
    	$author->name = $request->input('name');
    	$author->country = $request->input('country');
    	$author->info = $request->input('info');
        $author->info_en = $request->input('info_en');
        $author->email = $request->input('email');
    	
        if ($request->hasFile('photo')) {

            $img = Image::make($request->file('photo')->getRealPath())->encode('data-url');
            $author->photo = $img;
        }

        $worksIds = $request->input('works');
        $author->works()->detach();
        foreach ($worksIds as $id) {
            $author->works()->attach($id);
        }

    	$author->save();

    	return redirect('/admin/authors');
    }

    public function delete(Request $request, $id)
    {
    	$author = Author::find($id);
    	$author->delete();

        return redirect('/admin/authors');
    }

    public function toggleVisibility($id)
    {
        $author = Author::find($id);
        $author->isVisible = !$author->isVisible;
        $author->save();

        return response()->json(200);
    }

    private function createValidationRules()
    {
    	return [
    		'name' => 'required|max:100',
    		'country' => 'required|max:100',
    		'info' => 'required',
            'email' => 'required|max:100|email|unique:authors',
            'photo' => 'required|image|max:4096',
            'works' => 'required'
    	];
    }

    private function editValidationRules()
    {
        return [
            'name' => 'required|max:100',
            'country' => 'required|max:100',
            'info' => 'required',
            'email' => 'required|max:100|email',
            'photo' => 'image|max:4096',
            'works' => 'required'
        ];
    }
}
