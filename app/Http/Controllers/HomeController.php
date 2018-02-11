<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->client = new \GuzzleHttp\Client();

    }
    public function index(){
        return view('index',[
            'quote' => $this->getQuotes(),
            'image' => $this->getImages()->images[0],
        ]);
    }

    public function getQuotes(){
        $res = $this->client->request('GET', 'https://talaikis.com/api/quotes/random/');
        return json_decode($res->getBody());
    }

    public function getImages(){
        $res = $this->client->request('GET', 'http://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=en-US');
        return json_decode($res->getBody());
    }
}
