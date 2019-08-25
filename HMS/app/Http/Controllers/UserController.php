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

  public function editUser() {

    
  }
}