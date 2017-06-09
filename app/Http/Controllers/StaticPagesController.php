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
use App;
use App\Author;

class StaticPagesController extends Controller
{
   /* public function terms(Request $request){
        return view('terms');
    }*/

    public function about(Request $request){

        return view('about');
    }

    /*public function vision(Request $request){
        return view('vision');
    }*/

    public function contact(Request $request){
        return view('contact');
    }

    public function send_contact_mail(Request $request){

        App::setLocale($request->input('locale'));  // used to bypass a localization bug in the used plugin ;(
        $this->validate($request, $this->validationRules());

        $name = $request->input('name');
        $email = $request->input('email');
        $description = $request->input('title');
        $content = $request->input('message');

        $emailTo = 'glassbiennalebg@gmail.com';
        Mail::to($emailTo)->send(new ContactFormEmail($name,$email,$description,$content));

        return redirect('/contact')->with('success', trans('contacts.success'));
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
        $authors = Author::where('isVisible', 1)->get()->sortBy('name');
        if (App::getLocale() == 'bg') {
            $authors = $authors->sortBy('name');
        } else {
            $authors = $authors->sortBy('name_en');
        }

        return view('authors', ['authors' => $authors]);
    }

    public function partners(Request $request){
        return view('partners');
    }

    private function validationRules()
    {
        return [
            'name' => 'required|max:100',
            'email' => 'required|max:100|email',
            'title' => 'required|max:100',
            'message' => 'required|max:500'
        ];
    }
}

