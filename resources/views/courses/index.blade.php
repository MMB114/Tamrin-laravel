<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>Courses Page</h1>

<ul>
    <li><a href="{{ route("courses.course" , ['name' => 'student-1']) }}">student 1</a></li>
    <li><a href="{{ route("courses.course" , ['name' => 'student-2']) }}">student 2</a></li>
    <li><a href="{{ route("courses.course" , ['name' => 'student-3']) }}">student 3</a></li>
</ul>
</body>
</html>
