<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
</head>
<body>
    <h1>Hello {{ $name }} </h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach

</body>
</html>
