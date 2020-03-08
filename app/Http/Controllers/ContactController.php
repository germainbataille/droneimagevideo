<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
      $to = "g_bataille@hotmail.com";
      $subject = $request->sujet;
      $msg = $request->message;
      $headers =  "From: ".$request->nom." <".$request->email.">" . PHP_EOL.
                  "X-Mailer: PHP/" . phpversion();
      mail($to,$subject,$msg,$headers);

      return redirect()->route('contact')->with('success','Message envoyé.');
    }
}
