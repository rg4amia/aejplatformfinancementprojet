<?php

namespace App\Http\Controllers\Backend\GuichetOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuichetOneBackendController extends Controller
{
    public function index(){
        return view('backend.pages.guichet-one.index');
    }
}
