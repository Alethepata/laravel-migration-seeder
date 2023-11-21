<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\train;

class PageController extends Controller
{
    public function index(){
        $train = train::all();
        return view('home', compact('train'));
    }
}
