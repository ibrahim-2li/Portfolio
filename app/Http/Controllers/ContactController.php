<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Mail::to('ibrahim80403@gmail.com')->send(new ContactMail($request->name, $request->email , $request->body));
         return response()->json('success');
    }
}
