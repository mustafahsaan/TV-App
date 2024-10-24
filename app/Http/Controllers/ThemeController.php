<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //
    public function index(){

      return  view('theme.index');
    }

    public function app(){

      return  view('theme.app');
    }

    public function tv(){

      return  view('theme.tv');
    }
    public function aboute(){

      return  view('theme.aboute');
    }

    public function show(){

      return  view('theme.show');
    }
}
