<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitMessage(Request $req)
    {
        try {
            Mail::to(config('const.MY_EMAIL'))->send(new ContactNotification($req));
        } catch (Exception $e) {
            http_response_code(500);
            return false;
        }
        http_response_code();
    }
}
