<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validationRules());
        
        $c = new Category();
        $c->title = $request->input('title');
        $c->title_en = $request->input('title_en');
        $c->save();

        return redirect('/admin/category');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $c = Category::find($id);
        return view('categories.edit', ['category' => $c]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, $this->validationRules());
        $c = Category::find($id);
        $c->title = $request->input('title');
        $c->title_en = $request->input('title_en');
        $c->save();

        return redirect('/admin/category');
    }

    public function destroy($id)
    {
        $c = Category::find($id);
        $c->delete();
        return redirect('/admin/category');
    }

    private function validationRules() {
        return [
            'title' => 'required',
            'title_en' => 'required'
        ];
    }
}
