<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsumirApiController extends Controller
{
    public function teste() {

        $response = Http::get('https://hacker-news.firebaseio.com/v0/item/8863.json?print=pretty');

        dd($response->json());

    }
}
