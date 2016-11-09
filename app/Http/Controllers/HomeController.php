<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 20:28
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(Request $request){

        return view('home');
    }
    
    // Delete this
    public function testdb(Request $request) {
        $results = DB::select('SELECT * FROM biennale.students;');
        return $results;
    }
}