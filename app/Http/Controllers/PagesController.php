<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function home()
    {
        $people = ['Pham', 'Quoc', 'Buu'];
        return view('welcome', ['people' => $people]);
    }

    public function about()
    {
        return 'About Page';
    }
}
