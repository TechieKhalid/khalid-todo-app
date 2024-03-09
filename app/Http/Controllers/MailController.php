<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index() {
        $mailData = [
            'title' => 'Mail from Khalid using Laravel',
            'body' => 'This is for testing email using SMTP',
        ];

        Mail::to('albarnawy1997@gmail.com')->send(new DemoMail($mailData));

        dd('Email send successfully!');
    }
}
