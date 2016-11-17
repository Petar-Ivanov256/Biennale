<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 20:48
 */

namespace App\Http\Controllers;


use App\Mail\ApplicationFormEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FormsController extends Controller
{
    public function applyForAttendanceForm(Request $request){
        return view('applyForAttendanceForm');
    }

    public function sendEmail(Request $request){

        $test = $request->input('test');

        $myEmail = 'glassbiennalebg@gmail.com';

        // Send "instance of class" and the passed parameters to the email are from the constructor
        Mail::to($myEmail)->send(new ApplicationFormEmail($test));

        return view('applyForAttendanceForm', ['data'=>$test]);
    }
}