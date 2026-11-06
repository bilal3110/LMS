<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $to = "sheikhbilal1025@gmail.com";
        $data = [
            'name' => 'Sheikh Bilal',
            'subject' => 'Test Email',
            'body' => 'This is a test email'
        ];

        Mail::to($to)->send(new WelcomeMail($data));

        return "Email sent successfully";
    }
}
