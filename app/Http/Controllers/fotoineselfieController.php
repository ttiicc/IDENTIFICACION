<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fotoineselfieController extends Controller
{
    public function __invoke() {
        return view('fotoineselfie');
    }
}
