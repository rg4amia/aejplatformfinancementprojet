<?php

namespace App\Http\Controllers\Backend\Promoteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashPromoteurController extends Controller
{
    public function index(){
        return view('backend.pages.promoteur.dashboard.index');
    }
}
