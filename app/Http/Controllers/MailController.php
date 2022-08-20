<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        \Illuminate\Support\Facades\Mail::to('shahmohamadizohreh@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
