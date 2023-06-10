<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Post</title>


    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <center>

        <h1 class="list-title_header ">Posts</h1><br>

        <a href="{{ route('posts.index') }}" class="btn">Page Post</a>
        <a href="{{ route('users.index') }}" class="btn">Page User</a>


</center>
    <ul class="list">
        @foreach($posts as $post)
            <li class="list-item">
                <h2 class="list-title">{{ $post->title }}</h2>
                <p class="list-description">{{ $post->description }}</p>
                <p class="list-type">{{ $post->type }}</p>
                <p class="list-author">By {{ $post->user->name }}</p>
                <div class="list-actions">
                    {{-- <a href="{{ route('restor', $post->id) }}" class="btn-edit">Edit</a> --}}
                    <form method="get" action="{{ route('final', $post->id) }}">
                        @csrf


                        <button type="submit-button" class="btn-delete">Delete</button>

                        <div class="confirmation-box">
                            <p>Are you sure you want to delete this post?</p>
                            <button type="submit" class="btn-confirm-delete">Yes, delete</button>
                            <button type="button" class="btn-cancel-delete">Cancel</button>
                        </div>
                    </form>
                    <form method="GET" action="{{ route('restor', $post->id) }}">
                        @csrf


                        <button type="submit-button" class="btn-edit" >Restor</button>


                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>

</html>
