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
        
        $article = new News();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->photo = $request->file('photo');
        $article->save();
        
        return redirect('/');
    }
}