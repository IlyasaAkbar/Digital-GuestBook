<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathCon extends Controller
{
    public function perkalian (){   
        $data = 'MyCalculator';
        return view ('pages_math', $data);
    }
}
