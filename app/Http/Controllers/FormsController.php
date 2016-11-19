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
use App\ApplicationForm;

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
    
    public function sendForm(Request $request) {
        
        // TODO: validate input
        
        $form = new ApplicationForm();
        $form->name = $request->input('name');
        $form->country = $request->input('country');
        $form->email = $request->input('email');
        $form->phoneNumber = $request->input('phoneNumber');
        $form->title = $request->input('title');
        $form->englishTitle = $request->input('englishTitle');
        $form->dimensions = $request->input('dimensions'); 
        $form->installationGuide = $request->input('installationGuide');
        $form->year = $request->input('year');
        $form->synopsis = $request->input('synopsis');
        
        $form->save();
        
        return redirect('/');
    }
}