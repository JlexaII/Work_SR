<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller {
  public function signup(SignupRequest $req)
  {
    /* $validation = $req -> validate ([
      'InputEmail' => 'required|email',
      'InputPassword' => 'required|min:8|max:16'
    ]); */
  }
}
