<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class subirController extends Controller
{
    public function __invoke() {
        return view('subir');
    }
}
