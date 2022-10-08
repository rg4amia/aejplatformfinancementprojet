<?php

namespace App\Http\Controllers\Backend\GuichetFour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuichetFourBackendController extends Controller
{
    public function index()
    {
        return view('backend.guichet-four.index');
    }
}
