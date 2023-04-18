<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>@yield('h1', 'Learning Management System')</h1>
    <div class="navbar-nav">
          <a class="nav-item nav-link" href="subjects.html">Subjects</a>
          <a class="nav-item nav-link" href="transposer.html">New Subject</a>
          <a class="nav-item nav-link" href="about.html">About</a>
        </div>
        @yield('content')
</body>
</html>