<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 20:39
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function terms(Request $request){
        return view('terms');
    }

    public function about(Request $request){

        return view('about');
    }

    public function vision(Request $request){
        return view('vision');
    }

    public function contact(Request $request){
        return view('contact');
    }

    public function scholarships(Request $request){
        return view('scholarships');
    }

    public function bachelor(Request $request){
        return view('bachelor');
    }

    public function master(Request $request){
        return view('master');
    }
    public function phd(Request $request){
        return view('phd');
    }

    public function authors(Request $request){
        return view('authors');
    }

    public function partners(Request $request){
        return view('partners');
    }
}

