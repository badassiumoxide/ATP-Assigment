<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller {
  public function index() {
    return view('Admin.index');
  }

  public function addUserPage(Request $request) {
    return view('Signup.user');
  }

  public function addUser(Request $request) {
    if ($request->password != $request->cpassword) {
      $request->session()->flash('Problem', 'Passwords entered are not same');  
      return redirect()->route('Admin.addUserPage');
    } else {
      $user = new User;
      $user->id = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10 / strlen($x)))), 1, 5);
      $user->name = $request->name;
      $user->password = $request->password;
      $user->contact = $request->contact;
      $user->is_blocked = 'F';
      $user->save();
      $request->session()->put('users', User::all());
      $request->session()->flash('Register', 'Registration Complete');  
      return redirect()->route('Admin.addUserPage');
    }
  }

  public function banUser(Request $request, $id) {
    $result = User::where('id', $id)->update(array(
      'is_blocked'=>'T'
    ));
    $request->session()->put('users', User::all());
    return redirect()->route('Admin.index');
  }

  public function unbanUser(Request $request, $id) {
    $result = User::where('id', $id)->update(array(
      'is_blocked'=>'F'
    ));
    $request->session()->put('users', User::all());
    return redirect()->route('Admin.index');
  }

  public function deleteUser(Request $request, $id) {
    $ok = User::where('id', $id)->delete();
    $request->session()->put('users', User::all());
    return redirect()->route('Admin.index');
  }
}