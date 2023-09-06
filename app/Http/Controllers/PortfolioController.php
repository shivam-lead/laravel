<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;


class PortfolioController extends Controller
{
    public function index()
    { 
         return view('portfolio');
    }
    public function portfolioDetails()
    {
     return view('portfolio-details');
    }
}
