<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function getListed()
    {
        return view('pages.get_listed');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function show()
    {
        return view('pages.single_listing');
    }
}
