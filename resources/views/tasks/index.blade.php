<!DOCTYPE html>
<html>
<head>
    <title>

    </title>
</head>
<body>
    @foreach ($tasks as $task)
        <ul>
            <li> <a href="tasks/{{$task->id}}">{{ $task->body }}</a> 
        	</li>
        </ul>
    @endforeach
</body>
</html>