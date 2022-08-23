<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Exception;

class EmailController extends Controller
{
  public function index(Request $request)
  {
    $dataEmail  = $request->validate([
      'name' => 'required|max:255',
      'from'          => 'required|email:dns',
      'perusahaan'    => 'required|max:255',
      'telepon'       => 'required|max:12',
      'message'       => 'required'
    ]);

    Mail::to('airlanggaj@gmail.com')->send(new SendEmail($dataEmail));
    return redirect('/')->with('status', 'Your Email has been Send, Thanks for the offer');
  }
}
