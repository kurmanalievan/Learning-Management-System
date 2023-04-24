<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class ProjectController extends Controller
{
    public function newsubject() {
        return view('newsubject');
    }
    public function edit($id) {
      //read the project from database
      $subject = Subject::find($id);
      return view('edit',  ["subject" => $subject]);
  }

  public function show($id) {
    //read the project from database
    $subject = Subject::find($id);
    return view('show',  ["subject" => $subject]);
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
    public function subjects() {    // index
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
    public function update(Request $request, $id){
      $subject = Subject::find($id);
      $validated_data = $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'image_url' => 'nullable|url'
      ]);
      $subject->update($validated_data);
      return redirect("/subjects");
    }

    public function destroy($id) {
      //read the project from database
      $subject = Subject::find($id);
      $subject->delete();
      return redirect("/subjects");
  }
}
