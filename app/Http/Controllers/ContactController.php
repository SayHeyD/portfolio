<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Inertia\Inertia;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use \App\Mail\InquiryArrived;

class ContactController extends Controller
{
    public function view()
    {
        return Inertia::render('Contact');
    }

    public function send(ContactRequest $request)
    {
        $inquiry = new Inquiry();
        $inquiry->from = $request->email;
        $inquiry->name = $request->name;
        $inquiry->message = $request->message;


        Mail::to(env('MAIL_USERNAME'))->send(new \App\Mail\Inquiry($inquiry));
        Mail::to($request->email)->send(new InquiryArrived($inquiry));
    }
}
