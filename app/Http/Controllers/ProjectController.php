<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function newsubject() {
        return view('newsubject');
    }
    public function edit() {
      return view('edit');
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
      $projects = [
        [
            "id" => "1",
            "name" => "project1",
            "description" => "desc1",
        ],
        [
            "id" => "2",
            "name" => "project2",
            "description" => "desc2",
        ],
    ];
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
