<?php

namespace App\Http\Controllers;

use App\Mail\SendTestMail;
use Illuminate\Http\Request;

use Mail;

class MailSendController extends Controller
{
    public function send() {
        $to = [
            [
                'email' => 'xxxx@xxxx.jp',
                'name' => 'Test',
            ]
        ];

        Mail::to($to)->send(new SendTestMail());
    }
}