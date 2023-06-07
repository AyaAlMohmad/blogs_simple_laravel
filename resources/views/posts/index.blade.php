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

        <a href="{{ route('posts.create') }}" class="btn-create">Create Post</a>
        <a href="{{ route('users.index') }}" class="btn-edit">Page User</a>


</center>
    <ul class="list">
        @foreach($posts as $post)
            <li class="list-item">
                <h2 class="list-title">{{ $post->title }}</h2>
                <p class="list-description">{{ $post->description }}</p>
                <p class="list-type">{{ $post->type }}</p>
                <p class="list-author">By {{ $post->user->name }}</p>
                <div class="list-actions">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn-edit">Edit</a>
                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit-button" class="btn-delete">Delete</button>

                        <div class="confirmation-box">
                            <p>Are you sure you want to delete this post?</p>
                            <button type="submit" class="btn-confirm-delete">Yes, delete</button>
                            <button type="button" class="btn-cancel-delete">Cancel</button>
                        </div>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>

</html>
