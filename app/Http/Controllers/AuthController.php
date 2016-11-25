<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;

class AuthController extends Controller
{
    public function showRegister(Request $request) {
        return view('auth.register');
    }
    
    public function registerUser(Request $request) {
        $this->validate($request, $this->validateRules());
        
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = Role::where('title', 'user')->first()->id;
        $user->save();
        
         Auth::login($user);
        
        return redirect('/');
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    
    public function showLogin(Request $request) {
        return view('auth.signin');
    }
    
    public function loginUser(Request $request) {
        $this->validate($request, ['email' => 'required', 'password' => 'required']);
        
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/');
        }
        
        return redirect()->back();
    }
    
    public function test(Request $request) {
        return Auth::user();
    }
    
    private function validateRules() {
        return [
            'name' => 'required|max:100',
            'email' => 'required|unique:users|max:100',
            'password' => 'required|min:4|max:100',
            'password_confirmation' => 'same:password'
        ];
    }
}
