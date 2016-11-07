<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 20:48
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function applyForAttendanceForm(Request $request){
        return view('applyForAttendanceForm');
    }
}