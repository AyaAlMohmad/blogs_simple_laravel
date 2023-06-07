<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User</title>


    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <form method="POST" action="{{ route('users.update', $user->id) }}" class="form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        {{-- <div class="form-group">
            <label for="role">Role</label>
            <select id="role" name="role" required>
                <option value="">Select a role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div> --}}
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" value="{{ $user->password }}" required>

        </div>
        <button type="submit-edit" class="btn-edit">Update User</button>
    </form>
</body>

</html>
