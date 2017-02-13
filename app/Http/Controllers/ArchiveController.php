<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 21:00
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function archive(Request $request){
        return view('archive');
    }
}