<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;

class SigninController extends Controller {
  public function signin(SigninRequest $req) {
    /* $validation = $req -> validate ([
      'InputEmail' => 'required|email',
      'InputPassword' => 'required|min:8|max:16'
    ]); */
  }
}
