<?php

namespace App\Http\Controllers\Backend\GuichetThree;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuichetThreeBackendController extends Controller
{
    public function index()
    {
        return view('backend.guichet-three.index');
    }
}
