<?php

namespace App\Http\Controllers\Backend\Admin\GuichetOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuichetOneBackendController extends Controller
{
    public function index(){
        return view('backend.pages.admin.guichet-one.index');
    }
}
