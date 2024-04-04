<?php

namespace App\Http\Controllers\session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('session.home');
    }
    public function service() {
        return view('session.service');
    }

    public function about() {
        return view('session.about');
    }

    public function portofolio() {
        return view('session.portofolio');
    }

    public function blog() {
        return view('session.blog');
    }
}
