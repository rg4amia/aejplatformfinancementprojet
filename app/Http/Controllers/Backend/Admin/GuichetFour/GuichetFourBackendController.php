<?php

namespace App\Http\Controllers\Backend\Admin\GuichetFour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuichetFourBackendController extends Controller
{
    public function index()
    {
        return view('backend.pages.admin.guichet-four.index');
    }
}
