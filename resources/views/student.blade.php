<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student</h1>
    <div>
        <div>name: {{$student->user->name}}</div>
        <div>age: {{$student['age']}}</div>
        <div>credit: {{$student['credit']}}</div>
        <div>programme: {{$student['programme']}}</div>
        <div>coach: {{$student['coach']}}</div>

        <button><a href="/students/{{$student['id']}}/equipments">Arsenal</a></button>
    </div>
</body>
</html>
