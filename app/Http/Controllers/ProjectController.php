<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectFormRequest;
use Illuminate\Http\Request;
use App\Models\Subject;

class ProjectController extends Controller
{
    public function newsubject() {
        return view('newsubject');
    }
    public function edit($id) {
      $subject = Subject::find($id);
      return view('edit',  ["subject" => $subject]);
  }

  public function show($id) {
    $subject = Subject::findOrFail($id);
    return view('show',  ["subject" => $subject]);
 }
    public function store(ProjectFormRequest $request) {
     Subject::create($request->validated());
     return redirect("/subjects");
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
    public function update(ProjectFormRequest $request, $id){
      $subject = Subject::find($id);
      $subject->update($request->validated());
      return redirect("/subjects");
    }

    public function destroy($id) {
      //read the project from database
      $subject = Subject::find($id);
      $subject->delete();
      return redirect("/subjects");
  }
}
