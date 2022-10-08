<?php

namespace App\Http\Controllers\Backend\GuichetFive;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuichetFiveBackendController extends Controller
{
    public function index()
    {
        return view('backend.guichet-five.index');
    }
}
