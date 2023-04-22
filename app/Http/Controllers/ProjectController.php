<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function newsubject() {
        return view('newsubject');
    }
    public function store(Request $request) {
      $validated_data = $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'image_url' => 'nullable|url'
      ]);
    //   dd($validated_data);
     return redirect("/subjects");
      //save data next time
    }
    public function subjects() {
        return view('subjects');
    }
    public function about() {
        return view('about');
    }
    public function mywelcome() {
        return view('mywelcome');
    }
}
