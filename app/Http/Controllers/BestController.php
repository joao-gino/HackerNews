<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BestController extends Controller
{
    public function best() {

        $response = Http::get('https://hacker-news.firebaseio.com/v0/beststories.json?print=pretty');
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $result = Http::get('https://hacker-news.firebaseio.com/v0/item/' . $response->json()[$i] . '.json?print=pretty');
            $data[$i] = $result->json();
        }
        //$cont = count($response->json());
        //dd($data);
        return view('best')->with('data', $data);

    }
}
