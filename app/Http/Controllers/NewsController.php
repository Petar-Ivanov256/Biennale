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

class NewsController extends Controller
{
    public function news(Request $request){

        return view('news/news');
    }
    
    public function add(Request $request) {
        
        return view('news/add');
    }
    
    public function create(Request $request) {
        
        // TODO: validate
        
        DB::table('news')->insert([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
            'date' => date("Y-m-d H:i:s"),
            'user_id' => 1
        ]);
        
        return 'asd';
    }
}