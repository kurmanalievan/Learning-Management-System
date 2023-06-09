@extends('layouts.main')

@section('h1', 'Subjects Page')

@section('content')
 <h2>This is the content for subjects page</h2>
 <hr>
 <div class="container">
 @foreach ($projects as $project)
      <div class="col-sm-3 my-3">
        <div class="card h-100">
          <img src="https://cdn.dribbble.com/users/12015/screenshots/2131050/apple_music.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{$project["name"]}}</h5>
            <p class="card-text">{{$project["description"]}}</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="/{{ $project->id}}" class="btn btn-primary">Open</a>
            <a href="/{{ $project["id"] }}/edit" class="btn btn-secondary">Edit</a>
          </div>
        </div>
      </div>
    @endforeach

    <div class="col-sm-3 my-3">
        <div class="card h-100">
          <a href="{{ route("newproject") }}" class="btn btn-secondary h-100 pt-5">Create a new project</a>
        </div>
      </div>
    </div>
@endsection