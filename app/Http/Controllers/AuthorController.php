<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
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

    	return view('TODO', [ 'authors' => $authors ]);
    }

    public function show($id)
    {
    	$author = Author::find($id);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, $this->validationRules());

    	$author = Author::find($id);
    	$author->name = $request->input('name');
    	$author->country = $request->input('country');
    	$author->info = $request->input('info');
    	$author->photo = $request->file('photo');
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
