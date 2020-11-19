<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ResumeController extends Controller
{
    public function view()
    {
        return Inertia::render('Resume');
    }
}
