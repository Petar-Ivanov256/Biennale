<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 21:10
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(Request $request){

        return view('news');
    }
}