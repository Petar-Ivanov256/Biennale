<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 21:03
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function events(Request $request){

        return view('events');
    }
}