<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff9ff3, #f368e0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Register Container */
        .register-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Headings */
        h1 {
            margin-bottom: 20px;
            color: #f368e0;
            font-size: 1.8rem;
        }

        /* Error Messages */
        .error-messages ul {
            list-style: none;
            background-color: #fdecea;
            color: #e74c3c;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 0.9rem;
            text-align: left;
            border-left: 5px solid #e74c3c;
        }

        /* Form Labels */
        form label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            text-align: left;
            font-weight: bold;
            color: #555;
        }

        /* Input Fields */
        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        form input:focus {
            outline: none;
            border-color: #f368e0;
            box-shadow: 0 0 5px rgba(243, 104, 224, 0.5);
        }

        /* Register Button */
        .register-button {
            background: linear-gradient(135deg, #f368e0, #ff9ff3);
            color: white;
            padding: 10px 15px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            width: 100%;
        }

        .register-button:hover {
            background: linear-gradient(135deg, #ff9ff3, #f368e0);
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .register-container {
                padding: 20px;
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
            <button type="submit" class="register-button">Register</button>
        </form>
    </div>
</body>
</html>
