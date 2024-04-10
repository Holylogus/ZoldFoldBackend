<?php

namespace App\Http\Controllers;

use App\Models\Tevekenyseg;
use Illuminate\Http\Request;

class TevekenysegController extends Controller
{
    public function index(){
        $tevekenyseg = response()->json(Tevekenyseg::all());
        return $tevekenyseg;
    }
}
