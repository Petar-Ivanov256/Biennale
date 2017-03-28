<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Author;
use Storage;
use App\Http\Controllers\Controller;
use Image;
use App\Work;
use App\Country;
use App;

class AdminAuthorsController extends Controller
{
    public function add(Request $request)
	{
        $works = Work::all()->sortBy('englishTitle');
        $countries = Country::all();

        if (App::getLocale() == 'bg') {
            $countries = $countries->sortBy('title');
        } else {
            $countries = $countries->sortBy('title_en');
        }

		return view('authors.create', ['works' => $works, 'countries' => $countries]);
	}

    public function create(Request $request)
    {
    	$this->validate($request, $this->createValidationRules());

    	$author = new Author();
    	$author->name = $request->input('name');
        $author->name_en = $request->input('name_en');
    	$author->country()->associate(Country::find($request->input('country')));
        $author->gender = $request->input('gender');
    	$author->info = $request->input('info');
        $author->info_en = $request->input('info_en');
        $author->email = $request->input('email');

        $img = Image::make($request->file('photo')->getRealPath())->encode('data-url');
        $author->photo = $img;

        $author->save();

        if ($request->input('works')) {
            $worksIds = $request->input('works');
            foreach ($worksIds as $id) {
                $author->works()->attach($id);
            }
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
    	return view('authors.details', ['author' => $author]);
    }

    public function edit(Request $request, $id)
    {
    	$author = Author::find($id);
        $works = Work::all()->sortBy('englishTitle');
        $countries = Country::all();

        if (App::getLocale() == 'bg') {
            $countries = $countries->sortBy('title');
        } else {
            $countries = $countries->sortBy('title_en');
        }

    	return view('authors.edit', [ 'author' => $author, 'works' => $works, 'countries' => $countries ]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, $this->editValidationRules());

    	$author = Author::find($id);
    	$author->name = $request->input('name');
        $author->name_en = $request->input('name_en');
    	$author->country()->associate(Country::find($request->input('country')));
        $author->gender = $request->input('gender');
    	$author->info = $request->input('info');
        $author->info_en = $request->input('info_en');
        $author->email = $request->input('email');

        if ($request->hasFile('photo')) {

            $img = Image::make($request->file('photo')->getRealPath())->encode('data-url');
            $author->photo = $img;
        }

        if ($request->input('works')) {
            $worksIds = $request->input('works');
            $author->works()->detach();
            foreach ($worksIds as $id) {
                $author->works()->attach($id);
            }
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
        ];
    }
}
