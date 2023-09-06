<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
     return view('services');
    }
    public function details()
    {
        return view('service-details');
    }


    public function small_business(){
        return view('services.small-business-new');
    }

    public function cfo(){
        return view('services.cfo');
    }

    public function private_client(){
        return view('services.private-clint');
    }

    public function field_in_finance(){
        return view('services.finance');
    }
}
