<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User</title>


    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <center>

        <h1 class="list-title_header ">Users</h1><br>

        <a href="{{ route('users.create') }}" class="btn-create">Create User</a>
        <a href="{{ route('posts.index') }}" class="btn-edit">Page Post</a>

    </center><br>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($users as $user)
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn-edit">Edit</a><br><BR>

                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit-button" class="btn-delete">Delete</button>

                            <div class="confirmation-box">
                                <p>Are you sure you want to delete this post?</p>
                                <button type="submit" class="btn-confirm-delete">Yes, delete</button>
                                <button type="button" class="btn-cancel-delete">Cancel</button>
                            </div>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
