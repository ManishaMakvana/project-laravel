<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        /* Header */
        .dashboard-header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .dashboard-header h1 {
            font-size: 2rem;
        }

        /* Success Message */
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px 15px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 1rem;
            text-align: center;
        }

        /* Logout Form */
        .logout-form {
            display: flex;
            justify-content: center;
        }

        .logout-button {
            background-color: #ff4d4d;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #e60000;
        }

        /* Login & Register Links */
        .auth-links {
            text-align: right;
        }

        .auth-links a {
            color:rgb(229, 255, 0);
            font-size: 1rem;
            text-decoration: none;
            margin: 0 10px;
        }

        .auth-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header class="dashboard-header">
        <h1>Dashboard</h1>

        <!-- Login and Register Links -->
        <div class="auth-links">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </header>

    <!-- Display success message -->
    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <!-- Logout Form -->
    <form method="POST" action="{{ route('logout') }}" class="logout-form">
        @csrf
        <button type="submit" class="logout-button">Logout</button>
    </form>
</body>
</html>
