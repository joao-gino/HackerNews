<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TesteController extends Controller
{
    public function index() {
        
        $response = Http::get('https://hacker-news.firebaseio.com/v0/topstories.json?print=pretty');
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $result = Http::get('https://hacker-news.firebaseio.com/v0/item/' . $response->json()[$i] . '.json?print=pretty');
            $data[$i] = $result->json();
        }
        //$cont = count($response->json());
        //dd($data);
        return view('index')->with('data', $data);
        
    }
}
