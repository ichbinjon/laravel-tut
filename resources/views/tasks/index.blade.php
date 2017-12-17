<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
</head>
<body>
    <h1>Your Tasks Today</h1>
    <ul>
        @foreach ($tasks as $task)

            <li> <a href="{{ $task->id }}">{{ $task->body }}</a></li>
            
        @endforeach

</body>
</html>
