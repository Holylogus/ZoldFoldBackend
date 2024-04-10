<?php

namespace App\Http\Controllers;

use App\Models\User;

abstract class Controller
{
    public function index(){
        $user = response()->json(User::all());
        return $user;
    }
    
}
