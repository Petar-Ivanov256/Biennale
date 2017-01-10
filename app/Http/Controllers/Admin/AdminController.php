<?php

/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 11/12/2016
 * Time: 15:13
 */

namespace App\Http\Controllers\Admin;

use App\Events;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Response;
use Image;
use Intervention\Image\Exception\NotReadableException;

class AdminController extends Controller
{
    public function home_admin(Request $request)
    {

        return view('admin.admin_home');
    }

    private function validateEvent()
    {
        return [
            'start' => 'required',
            'place' => 'required',
            'title' => 'required',
            'description' => 'required'
        ];
    }
}