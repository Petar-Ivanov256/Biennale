<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 21:10
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;

class NewsController extends Controller
{
    public function news(Request $request){

        return view('news/news');
    }
    
    public function add(Request $request) {
        
        return view('news/add');
    }
    
    public function create(Request $request) {
        
        $this->validate($request, $this->validateNews());
        
        $article = new News();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->photo = $request->file('photo');
        $article->save();
        
        return redirect('/');
    }
    
    public function getAll(Request $request) {
        
        $news = News::all();
        
        return view('/news/all', ['news' => $news]);
    }
    
    public function getArticle($id) {
        $article = News::find($id);
        
        return view('/news/viewArticle', ['article' => $article]);
    }

    public function edit($id) {
        $article = News::find($id);
        
        return view('/news/edit', ['article' => $article]);
    }
    
    public function update(Request $request, $id) {
        
        $this->validate($request, $this->validateNews());
        
        $article = News::find($id);
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->photo = $request->file('photo');
        $article->save();
        
        return redirect('/news/' . $id);
    }
    
    public function delete($id) {
        
        $article = News::find($id);
        $article->delete();
        
        return redirect('/news/all');
    }

    private function validateNews() {
        return [
            'title' => 'required',
            'content' => 'required'
        ];
    }
}