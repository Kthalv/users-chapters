<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS PAGE</title>
</head>
<body>
    <h1>USERS PAGE</h1>

    <form action="{{ route('createUser') }}" method="GET">
        @method('GET')
        <button type="submit">Create User</button>
    </form>

    @foreach ($users as $user)
        <div>Name: {{ $user->name }}</div>
        <div>Email: {{ $user->email }}</div>
        <div>Password: {{ $user->password}}</div>

        <form action="{{ route('viewUser', ['id' => $user->id]) }}" method="GET">
            <button type="submit">
                View User
            </button>
        </form>
        <hr>
    @endforeach 
</body>
</html>