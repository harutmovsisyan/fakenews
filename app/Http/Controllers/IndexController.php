<?php

namespace App\Http\Controllers;

use http\Exception\BadConversionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index(){
        return view('index');
//        return Http::get('harutmovsisyan.net');
    }
}
