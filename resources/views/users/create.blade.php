<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User</title>


    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
<form method="POST" action="{{ route('users.store') }}" class="form">
    @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
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
            <input type="password" name="password">

        </div>
        <button type="submit-create" class="btn-create">Create User</button>
    </form>
</body>

</html>
