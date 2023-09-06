<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class UniversityController extends Controller
{
    public function getUniversities()
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'university-college-list-and-rankings.p.rapidapi.com',
            'X-RapidAPI-Key' => '362c3a86f9msh80ba36e1d1f870fp116898jsnc0d1a27ee891'
        ])->get('https://university-college-list-and-rankings.p.rapidapi.com/api/top-universities/us');

        if ($response->failed()) {
            $error = $response->serverError() ? 'Server Error' : 'Request Error';
            echo "cURL Error: $error";
        } else {
            dd($response);
            echo $response->body();
        }
    }
}
