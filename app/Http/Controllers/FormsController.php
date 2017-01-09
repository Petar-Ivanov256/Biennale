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

        $photo1 = $request->file('file-7');
        $photo2 = $request->file('file-8');

        $path1 = $photo1->store('public');      // saves it to storage/app/public/{file name as UUID}
        $path2 = $photo2->store('public');

        $form->photo1 = $path1;
        $form->photo2 = $path2;

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
            'file-7' => 'max:4096'
        ];
    }
}