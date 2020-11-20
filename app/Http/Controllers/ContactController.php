<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function view()
    {
        return Inertia::render('Contact');
    }

    public function send(ContactRequest $request)
    {

    }
}
