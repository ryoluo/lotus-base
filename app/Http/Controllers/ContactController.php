<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitMessage(Request $req)
    {
        Mail::to(config('const.MY_EMAIL'))->send(new ContactNotification($req));
        return http_response_code();
    }
}
