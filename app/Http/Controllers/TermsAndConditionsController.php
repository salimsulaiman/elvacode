<?php

namespace App\Http\Controllers;


class TermsAndConditionsController extends Controller
{
    public function index() {
         return view('pages.terms-and-conditions.index'); 
    }
}