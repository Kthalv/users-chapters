<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PAGE</title>
</head>
<body>
    <h1>USER PAGE</h1>
    <div>Name: {{ $user->name }}</div>
    <div>Email: {{ $user->email }}</div>
    <div>Password: {{ $user->password}}</div>
    <hr> 

    <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="POST"onsubmit="return confirm('Are you sure you want to delete this user?')">
        @method('DELETE')
        @csrf
        <button type="submit">Delete User</button>
    </form>
    <form action="{{ route('showAllUsers') }}" method="GET">
            <button type="submit">
                Back to Users
            </button>
    </form>
    </form>
    <form action="{{ route('editUser', ['id' => $user->id]) }}" method="GET">
        <button type="submit">
            Edit User
        </button>
    </form>
</body>
</html>