<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\contactemail;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function sendmail(Request $req){
        $details=[
            'name' => $req->name,
            'email' => $req->email,
            'subject' =>$req->subject,
            'message' => $req->message,];
     Contact::create($details);

      Mail::to($req->email)->send(new contactemail($details));
      return back()->with('sentmail','Your message has been sent ');
    }
}
