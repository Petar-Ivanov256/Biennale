<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Work;
use App\Http\Controllers\Controller;
use App\Technique;
use Image;

class AdminWorksController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('works.index', ['works' => $works]);
    }

    public function create()
    {
        $techniques = Technique::all();
        return view('works.create', ['techniques' => $techniques]);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->createValidationRules());

        $work = new Work();

        $work->title = $request->input('title');
        $work->englishTitle = $request->input('englishTitle');
        $work->dimensions = $request->input('dimensions');
        $work->installationGuide = $request->input('installationGuide');
        $work->year = $request->input('year');
        $work->synopsis = $request->input('synopsis');
        $work->synopsis_en = $request->input('synopsis_en');

        $img1 = Image::make($request->file('photo1')->getRealPath())->encode('data-url');
        $work->photo1 = $img1;
        $img2 = Image::make($request->file('photo2')->getRealPath())->encode('data-url');
        $work->photo2 = $img2;

        $work->save();

        foreach ($request->technique as $tech_id) {
            $work->techniques()->save(Technique::find($tech_id));
        }

        return redirect('/admin/works');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $work = Work::find($id);
        $techniques = Technique::all();
        return view('works.edit', ['work' => $work, 'techniques' => $techniques]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, $this->editValidationRules());

        $work = Work::find($id);

        $work->title = $request->input('title');
        $work->englishTitle = $request->input('englishTitle');
        $work->dimensions = $request->input('dimensions');
        $work->installationGuide = $request->input('installationGuide');
        $work->year = $request->input('year');
        $work->synopsis = $request->input('synopsis');
        $work->synopsis_en = $request->input('synopsis_en');

        if ($request->hasFile('photo1')) {
            $img1 = Image::make($request->file('photo1')->getRealPath())->encode('data-url');
            $work->photo1 = $img1;
        }
        
        if ($request->hasFile('photo2')) {
            $img2 = Image::make($request->file('photo2')->getRealPath())->encode('data-url');
            $work->photo2 = $img2;
        }

        $work->save();

        $work->techniques()->detach();
        foreach ($request->technique as $tech_id) {
            $work->techniques()->save(Technique::find($tech_id));
        }

        return redirect('/admin/works');
    }

    public function delete($id)
    {
        $work = Work::find($id);
        $work->delete();

        return redirect('/admin/works');
    }

    private function createValidationRules()
    {
        return [
            'title' => 'required|max:100',
            'englishTitle' => 'required|max:100',
            'dimensions' => 'required|max:100',
            'installationGuide' => 'required|max:300',
            'year' => 'required|max:4',
            'synopsis' => 'required|max:100',
            'photo1' => 'required|image|max:4096',
            'photo2' => 'required|image|max:4096',
            'technique' => 'required',
        ];
    }

    private function editValidationRules()
    {
        return [
            'title' => 'required|max:100',
            'englishTitle' => 'required|max:100',
            'dimensions' => 'required|max:100',
            'installationGuide' => 'required|max:300',
            'year' => 'required|max:4',
            'synopsis' => 'required|max:100',
            'photo1' => 'image|max:4096',
            'photo2' => 'image|max:4096',
            'technique' => 'required',
        ];
    }
}
