<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arsenals</h1>

    @foreach($arsenals as $arsenal)
            <div style="background-color: gray; padding:10px; margin:10px;">

                <div>Tournament: {{$arsenal['trournament']}}</div>
                <div>Date: {{$arsenal['date']}}</div>
                    <h2>Oil Pattern Analysis</h2>
                <div>Oiling Lenght: {{$arsenal['oiling_lenght']}}</div>
                    <h2>Accross the lane</h2>
                <div>Centre: {{$arsenal['atl_centre']}}</div>
                <div>Track: {{$arsenal['atl_centre']}}</div>

                <p>
                    <a href="/edit-post/{{$post->id}}">Edit</a>
                </p>
                <form action="/delete-post/{{$post->id}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>

        @endforeach
</body>
</html>