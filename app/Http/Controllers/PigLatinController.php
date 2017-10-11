<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PigLatinController extends Controller
{
    //
    
    public function index() 
    {
        return 'Show textarea and forms where user can input information';
    }
    
    public function translate() 
    {
        return 'Translate text based on user input';
        # redirect
    }
}
