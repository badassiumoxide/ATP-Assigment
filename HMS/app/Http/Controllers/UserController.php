<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {
  public function index() {
    return view('User.index');
  }

  public function editUserPage() {
    return view('User.edit');
  }

  public function editUser(Request $request) {
    if ($request->password != $request->cpassword) {
      $request->session()->flash('Problem', 'Passwords entered are not same');  
      return redirect()->route('User.editUserPage');
    }
    $name = $request->session()->get('info')->name;
    if (strlen($request->name) > 0) {
      $name = $request->name;
    }
    $contact = $request->session()->get('info')->contact;
    if (strlen($request->contact) > 0) {
      $contact = $request->contact;
    }
    $password = $request->session()->get('info')->password;
    if (strlen($request->password) > 0) {
      $contact = $request->password;
    }
    $result = User::where('id', $request->session()->get('info')->id)->update(array(
      'name'=>$name,
      'contact'=>$contact,
      'password'=>$password
    ));
    $tmp = User::where('id', $request->session()->get('info')->id)->get();
    $request->session()->put('info', $tmp[0]);
    return redirect()->route('User.index');
  }
}