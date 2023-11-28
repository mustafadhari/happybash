<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showAboutUs()
    {
        return view('about-us');
    }
    public function showContactUs()
    {
        return view('contact-us');
    }
    public function showTerms()
    {
        return view('terms-conditions');
    }
    public function showPrivacyPolicy()
    {
        return view('privacy-policy');
    }
    
}
