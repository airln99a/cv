<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
  public function index(Request $request)
  {
    $dataEmail  = $request->validate([
      'name'          => 'required|max:255',
      'from'          => 'required|email:dns',
      'perusahaan'    => 'required|max:255',
      'telepon'       => 'required|max:12',
      'message'       => 'required'
    ]);

    Mail::to('airlanggaj@gmail.com')->send(new SendEmail($dataEmail));
    return redirect('/')->with('status', 'Your Email has been Send, Thanks for the offer');
  }
}
