<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Creat Post</title>


        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    </head>
    <body>
<form method="POST" action="{{ route('posts.store') }}" class="form">
    @csrf

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required autofocus>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
        <label for="type">Type Post:</label>
        <select id="type" name="type" class="form-control" required>
            <option value="">Select a type</option>
            <option value="scientific">Scientific</option>
            <option value="general">General</option>
        </select>
    </div>

    <div class="form-group">
        <label for="user_id">Post author:</label>
        <select id="user_id" name="user_id" class="form-control" required>
            <option value="">Select a Post author</option>
            <@foreach($users as $user)
            <option value="{{$user->id}}" {{isset($item) && $user->id == $item->user_id ? 'selected' : ''}}>{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>
<body>
</html>
