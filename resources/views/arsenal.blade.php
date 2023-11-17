<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>

    <h1>Arsenals</h1>
    <a href="/students/{{$userDetails['id']}}/equipments/add" class="add">Add Arsenal</a>
     @foreach($arsenals as $arsenal)

    <div class="arsenal">

        <div>
            <div>
                <h3>Tournament:</h3>
                <p>{{$arsenal['tournament']}}</p>
            </div>
            <div>
                <p>Date: {{$arsenal['date']}}</p>
            </div>
        </div>

        <div>
            <h3>Oiling Lenght:</h3>
            <p>{{$arsenal['oiling_lenght']}}</p>
        </div>

        <h2>Back to front</h2>
        <div>
            <h3>Centre: </h3>
            <p>{{$arsenal['atl_centre']}}</p>
        </div>
        <div>
            <h3>Track:</h3>
            <p>{{$arsenal['atl_track']}}</p>
        </div>
        <div>
            <h3>Outside:</h3>
            <p>{{$arsenal['atl_outside']}}</p>
        </div>

        <h2>Back to front</h2>
        <div>
            <h3>Back:</h3>
            <p>{{$arsenal['btf_back']}}</p>
        </div>
        <div>
            <h3>Middle:</h3>
            <p>{{$arsenal['btf_middle']}}</p>
        </div>
        <div>
            <h3>Front:</h3>
            <p>{{$arsenal['btf_front']}}</p>
        </div>

        <img src="{{ asset('storage/' . $arsenal->img) }}" onerror="this.style.display='none'">
        <h2>Surface Separation</h2>
        <div>
            <h3>Sanding:</h3>
            <p>{{$arsenal['sanding']}}</p>
        </div>
        <div>
            <h3>Polishing:</h3>
            <p>{{$arsenal['polishing']}}</p>
        </div>

        <div style="justify-content: flex-start">
            <a class="edit" href="">Edit</a>

            <form action="/students/{{$userDetails['id']}}/equipments/{{$arsenal->id}}/delete" method="POST">
                @csrf
                @method('DELETE')

                <button class="delete">Delete</button>
            </form>
        </div>

    </div>

    @endforeach
</body>

</html>