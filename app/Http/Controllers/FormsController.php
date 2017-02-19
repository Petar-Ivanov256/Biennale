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
use App\Technique;
use App\Author;
use App\Work;
use App\Country;
use Image;
use App;

class FormsController extends Controller
{
    public function applyForAttendanceForm(Request $request)
    {

        $techniques = Technique::all();
        $countries = Country::all()->sortBy('title_en');

        return view('applicationForm', ['techniques' => $techniques, 'countries' => $countries]);
    }

    public function sendForm(Request $request)
    {
        App::setLocale($request->input('locale'));  // used to bypass a localization bug in the used plugin ;(
        $this->validate($request, $this->validationRules());

        $author = new Author();
        $work = new Work();

        $author->name = $request->input('name');
        $author->country()->associate(Country::find($request->input('country')));
        $author->email = $request->input('email');
        $author->phoneNumber = $request->input('phoneNumber');
        $author->gender = $request->input('gender');

        $author->save();

        $work->title = $request->input('title');
        $work->englishTitle = $request->input('englishTitle');
        $work->dimensions = $request->input('dimensions');
        $work->installationGuide = $request->input('installationGuide');
        $work->year = $request->input('year');
        $work->synopsis = $request->input('synopsis');

        // TODO: File upload max size: 2MB ?!?!?!
        // Fix: edit php.ini
        // upload_max_filesize = 100M post_max_size = 100M

        $img1 = Image::make($request->file('file-7')->getRealPath())->encode('data-url');
        $work->photo1 = $img1;
        $img2 = Image::make($request->file('file-8')->getRealPath())->encode('data-url');
        $work->photo2 = $img2;

        $work->save();

        foreach ($request->technique as $tech_id) {
            $work->techniques()->save(Technique::find($tech_id));
        }

        $author->works()->save($work);

        // $myEmail = 'senderglassbiennalebg@gmail.com';
        // Не знам дали така се вземат променливи от модела ако не по стандартния начин: $name = $request->input('name');
        // Mail::to($myEmail)->send(new NewAuthorEmail($form->name,$form->country,$form->email, $form->phoneNumber));
        
        return redirect('/')->with('success', trans('form.successMsg'));
    }

    private function validationRules()
    {
        return [
            'name' => 'required|max:100',
            'country' => 'required|max:100',
            'email' => 'required|max:100|email|unique:authors',
            'phoneNumber' => 'required|max:100',
            'title' => 'required|max:100',
            'englishTitle' => 'required|max:100',
            'dimensions' => 'required|max:100',
            'installationGuide' => 'required|max:300',
            'year' => 'required|numeric|min:1900|max:2017',
            'synopsis' => 'required|max:100',
            'file-7' => 'required|image|max:4096',
            'file-8' => 'required|image|max:4096',
            'technique' => 'required',
        ];
    }
}