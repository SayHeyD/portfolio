<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function view()
    {
        return Inertia::render('Welcome', [
            'User' => Auth::user(),
        ]);
    }
}
