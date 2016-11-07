<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 20:45
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program(Request $request){
        return view('program');
    }
}