<?php

/**
 * Created by PhpStorm.
 * User: Petar
 * Date: 11/12/2016
 * Time: 15:13
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home_admin(Request $request){

        return view('admin.admin_home');
    }
}