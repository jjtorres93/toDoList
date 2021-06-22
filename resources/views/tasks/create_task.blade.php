<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create a new task</h1>
    <form action="{{ route('tasks.store') }}" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="task-title">
        <label for="description">Description:</label>
        <input type="text" name="description" id="task-description">
        <label for=status">Status:</label>
        <select name="status" id="task-status">
            <option value="new" selected>New</option>
            <option value="assigned">Assigned</option>
            <option value="in-progress">In progress</option>
            <option value="finished">Finished</option>
        </select>
        <label for="user-id">User:</label>
        <input type="number" name="user-id" id="user-id" min="1" max="1000">
        <input type="submit" value="Create">
        <a href="{{ route('tasks.index') }}"></a>
    </form>
</body>

</html>
