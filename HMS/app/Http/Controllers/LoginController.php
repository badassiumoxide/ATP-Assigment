<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class LoginController extends Controller {
  public function index(Request $request) {
    return view('Login.index');
  }

  public function login(Request $request) {
    $admin = Admin::where('name', $request->username)->where('password', $request->password)->get();
    if (sizeof($admin) > 0) {
      $request->session()->put('info', $admin[0]);
      return redirect()->route('Admin.index');
    } else {  
      $request->session()->flash('Error', 'Invalid Username or Password');  
      return redirect()->route('Login.index');
    }
  }
}
