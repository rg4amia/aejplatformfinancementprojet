<?php
//require_once ROOT . '/helpers.php';

use App\Models\Promoteur;

if (!function_exists('promoteurLogin')) {

    function promoteurLogin(){
       $promoteur = Promoteur::where('user_id', auth()->user()->id)->first();
       return $promoteur;
    }
}
