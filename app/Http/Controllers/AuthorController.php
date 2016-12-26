<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
	public function add(Request $request)
	{
		return view('authors.create');
	}

    public function create(Request $request)
    {
    	$this->validate($request, $this->validationRules());

    	$author = new Author();
    	$author->name = $request->input('name');
    	$author->country = $request->input('country');
    	$author->info = $request->input('info');
    	$author->photo = $request->file('photo');
    	$author->save();

    	return redirect('/');
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
    	return view('authors.edit', [ 'author' => $author ]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, $this->validationRules());

    	$author = Author::find($id);
    	$author->name = $request->input('name');
    	$author->country = $request->input('country');
    	$author->info = $request->input('info');
    	$author->photo = file_get_contents($request->file('photo'));
    	$author->save();

    	return redirect('/');
    }

    public function delete(Request $request, $id)
    {
    	$author = Author::find($id);
    	$author->delete();
    }

    private function validationRules()
    {
    	return [
    		'name' => 'required|max:100',
    		'country' => 'required|max:100',
    		'info' => 'required'
    	];
    }
}
