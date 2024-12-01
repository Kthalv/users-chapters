<!-- resources/views/admin/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include your styles here (e.g., Bootstrap or custom CSS) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- If you're using Laravel Mix for styles -->
</head>
<body>

    <div class="container mt-4">
        <h1>Welcome to the Admin Dashboard!</h1>

        <!-- Display Admin Info (optional) -->
        <p>Logged in as: {{ Auth::guard('admin')->user()->name }}</p>
        
        <!-- Add any additional content you'd like to show on the dashboard -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admin Stats</h5>
                        <p class="card-text">Some statistics or information related to admin.</p>
                    </div>
                </div>
            </div>
            <!-- You can add more sections or cards as needed -->
        </div>
    </div>

</body>
</html>
