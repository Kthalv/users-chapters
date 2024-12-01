<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER</title>
</head>
<body>
    <h1>EDIT USER</h1>
    <form action=" {{ route('updateUser', ['id' => $user->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="{{ $user->password }}" required><br>

        <button type="submit">Update User</button>
    </form>
</body>
</html>