<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE USER</title>
</head>
<body>
    <h1>CREATE USER</h1>

    <form action="{{ route('storeUser') }}" method="POST">
        @method('POST')
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Create User</button>
    </form> 

    <form action="{{ route('showAllUsers')}}" method="GET">
        <button type="submit">Back to Users</button>
    </form>
</body>
</html>