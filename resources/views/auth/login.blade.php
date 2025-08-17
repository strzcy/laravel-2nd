<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #4e73df, #224abe);
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background: #fff;
      width: 400px;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    input[type="email"], input[type="password"] {
      width: 90%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      align-items:center;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #4e73df;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background: #2e59d9;
    }
    .extra {
      text-align: center;
      margin-top: 15px;
    }
    .extra a {
      color: #4e73df;
      text-decoration: none;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Welcome Back!</h2>
    <form action="{{ route('login.action') }}" method="POST">
      @csrf
      <div class="form-group">
        <input type="email" name="email" placeholder="Enter Email Address..." required>
      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit">Login</button>
    </form>
    <div class="extra">
      <a href="{{ route('register') }}">Create an Account!</a>
    </div>
  </div>
</body>
</html>
