<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    @if (count($tasks) !== 0)
        @foreach ($tasks as $task)
            <div>{{ $task }}</div>
        @endforeach
    @else
        <h1>There is no task available</h1>
    @endif
</body>

</html>
