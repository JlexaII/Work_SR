<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Models\signup;

class SignupController extends Controller {
  public function signup(SignupRequest $req)
  {
    $signup = new signup();
    $signup->email = $req->input('RegEmail');
    $signup->password = $req->input('RegPassword');

    $signup->save();
  }
}
