<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return view('pages.index');
    }
    function about() {
        return view('pages.about');
    }

    function register() {
        return view('pages.register');
    }
    function login() {
        return view('pages.login');
    }
    function home() {
        return view('home');
    }

}
