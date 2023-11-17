<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    @auth

        <a href="{{ url('/students/' . $user->userDetails->id) }}">Student</a>

    <form action="/logout" method="POST">
        @csrf 
        <button type="submit">Log out</button>

    </form>
    <p>Logged in</p>
    <div style="border: 3px solid black; padding: 5px;">
        <h2>Create Post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="post title">
            <textarea name="body" placeholder="body content..."></textarea>
            <button type="submit">Save Post</button>
        </form>
    </div>

    <div style="border: 3px solid black; padding: 5px;">
        <h2> All Post </h2>

        @foreach($posts as $post)
            <div style="background-color: gray; padding:10px; margin:10px;">
                <h3>{{$post['title']}} by {{$post->user->name}}</h3>
                {{$post['body']}}
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
    </div>


    @else
    <div style="border: 3px solid black; padding: 5px;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name ="email" type="text" placeholder="email">
            <input name ="age" type="text" placeholder="age">
            <input name ="programme" type="text" placeholder="programme">
            <input name="password"type="password" placeholder="password">
            <button type="submit">Register</button>
        </form>
    </div>

    <div style="border: 3px solid black; padding: 5px;">
        <h2>login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginName" type="text" placeholder="name">
            <input name="loginPassword"type="password" placeholder="password">
            <button type="submit">login</button>
        </form>
    </div>

    @endauth





</body>
</html>