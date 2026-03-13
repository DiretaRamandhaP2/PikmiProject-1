<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login() {
        return view('pages.login');
    }

    function register() {
        return view('pages.register');
    }

    function admin() {
        return view('pages.admin.dashboard');
    }

    function petugas() {
        return view('pages.petugas.dashboard');
    }
}
