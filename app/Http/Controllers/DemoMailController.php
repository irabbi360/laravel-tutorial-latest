<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class DemoMailController extends Controller
{
    public function demoMail()
    {
        $email = 'admin@demo.com';

        $details = [
            'title' => 'Mail Demo from Coding Xpress',
            'url' => 'http://youtube.com'
        ];

        Mail::to($email)->send(new DemoMail($details));

        dd('Mail send successfully');
    }
}
