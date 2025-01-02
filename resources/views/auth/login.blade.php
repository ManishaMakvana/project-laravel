<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Login Container */
        .login-container {
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
            color: #0984e3;
            font-size: 1.8rem;
        }

        /* Success Message */
        .success-message {
            background-color: #d1f8d7;
            color: #27ae60;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 0.9rem;
            text-align: left;
            border-left: 5px solid #27ae60;
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
            border-color: #0984e3;
            box-shadow: 0 0 5px rgba(9, 132, 227, 0.5);
        }

        /* Login Button */
        .login-button {
            background: linear-gradient(135deg, #0984e3, #74b9ff);
            color: white;
            padding: 10px 15px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            width: 100%;
        }

        .login-button:hover {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .login-container {
                padding: 20px;
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <h1>Login</h1>
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</body>
</html>



