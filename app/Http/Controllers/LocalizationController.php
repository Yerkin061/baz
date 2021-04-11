<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    //
    public function index($Locale){
            App::setlocale($locale);
            session()->put('locale',$locale);
            return redirect()->back();
    }
}
