<?php
/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 07/11/2016
 * Time: 20:48
 */

namespace App\Http\Controllers;


#use App\Mail\ApplicationFormEmail;
use App\Mail\NewAuthorEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\ApplicationForm;
use App\Technique;
use Image;

class FormsController extends Controller
{
    public function applyForAttendanceForm(Request $request)
    {

        $techniques = Technique::all();

        return view('applicationForm', ['techniques' => $techniques]);
    }

    public function sendForm(Request $request)
    {
        $this->validate($request, $this->validationRules());

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

        // TODO: File upload max size: 2MB ?!?!?!
        // Fix: edit php.ini
        // upload_max_filesize = 100M post_max_size = 100M

        $img1 = Image::make($request->file('file-7')->getRealPath())->encode('data-url');
        $form->photo1 = $img1;
        $img2 = Image::make($request->file('file-8')->getRealPath())->encode('data-url');
        $form->photo2 = $img2;

        $form->save();

        foreach ($request->technique as $tech_id) {
            $form->techniques()->save(Technique::find($tech_id));
        }

        // $myEmail = 'senderglassbiennalebg@gmail.com';
        // Не знам дали така се вземат променливи от модела ако не по стандартния начин: $name = $request->input('name');
        // Mail::to($myEmail)->send(new NewAuthorEmail($form->name,$form->country,$form->email, $form->phoneNumber));
        
        return redirect('/')->with('success', 'Еваларката качи формичка :)');
    }

    private function validationRules()
    {
        return [
            'name' => 'required|max:100',
            'country' => 'required|max:100',
            'email' => 'required|max:100|email|unique:application_forms',
            'phoneNumber' => 'required|max:100',
            'title' => 'required|max:100',
            'englishTitle' => 'required|max:100',
            'dimensions' => 'required|max:100',
            'installationGuide' => 'required|max:300',
            'year' => 'required|max:4',
            'synopsis' => 'required|max:100',
            'file-7' => 'required|max:4096',
            'file-8' => 'required|max:4096',
            'technique' => 'required',
        ];
    }
}