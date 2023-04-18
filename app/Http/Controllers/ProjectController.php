<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function newsubject() {
        return view('newsubject');
    }
    public function subject() {
        return view('subjects');
    }
    public function about() {
        return view('about');
    }
    public function mywelcome() {
        return view('mywelcome');
    }
}
