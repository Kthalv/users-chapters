<!-- resources/views/admin/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Optional: Add your CSS or styling here -->
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>

        <!-- Login Form -->
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            <!-- Email Field -->
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}">

            <!-- Password Field -->
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <!-- Submit Button -->
            <button type="submit">Login</button>
        </form>

        <!-- Display errors if any -->
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

</body>
</html>
