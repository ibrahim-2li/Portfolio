<?php

namespace App\Http\Controllers\Api;

use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
        Mail::to('ibrahim80403@gmail.com')->send(new ContactMail($request->name, $request->email , $request->body));
        return response()->json('success');
    }
}
