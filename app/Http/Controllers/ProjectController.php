<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class ProjectController extends Controller
{
    public function newsubject() {
        return view('newsubject');
    }
    public function edit() {
      //read the project from database
      return view('edit');
  }
    public function store(Request $request) {
      $validated_data = $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'image_url' => 'nullable|url'
      ]);

     Subject::create($validated_data);
     return redirect("/subjects");
      //save data next time
    }
    public function subjects() {
      $projects = Subject::all();
    return view('subjects', [
        "projects" => $projects,
    ]); //projects/list.blade.php
    }
    public function about() {
        return view('about');
    }
    public function mywelcome() {
        return view('mywelcome');
    }
}
