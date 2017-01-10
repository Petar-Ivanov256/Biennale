<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 20:39
 */

namespace App\Http\Controllers;


use App\Mail\ContactFormEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function send_contact_mail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $description = $request->input('title');
        $content = $request->input('message');

        $myEmail = 'senderglassbiennalebg@gmail.com';
        Mail::to($myEmail)->send(new ContactFormEmail($name,$email,$description,$content));

        return redirect('/contact')->with('success', 'Успешно изпратихте съобщение!');
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

