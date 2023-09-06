<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function business()
    {
         return view('business');
    }

    public function owner()
    {
         return view('owner');
    }

    public function private()
    {
         return view('private');
    }

    public function finance()
    {
         return view('finance');
    }
}