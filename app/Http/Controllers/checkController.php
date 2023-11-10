<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class checkController extends Controller
{
      public function __invoke() {
      return view('check');
   }
}