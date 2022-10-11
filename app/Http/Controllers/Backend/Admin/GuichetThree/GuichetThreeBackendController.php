<?php

namespace App\Http\Controllers\Backend\Admin\GuichetThree;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuichetThreeBackendController extends Controller
{
    public function index()
    {
        return view('backend.pages.admin.guichet-three.index');
    }
}
