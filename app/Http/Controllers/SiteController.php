<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('welcome');

    }

    public function about() {
        $company = 'CCT';
        $user =['jorn','marry','bob'];
        return view('about', [
            'compa' => $company,
            'users' => $user
        ]);

    }
}
