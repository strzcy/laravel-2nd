<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #36b9cc, #d81900);
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background: #fff;
      width: 450px;
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
    input[type="text"], input[type="email"], input[type="password"] {
      width: 95%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #d81900;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background: #b71500;
    }
    .extra {
      text-align: center;
      margin-top: 15px;
    }
    .extra a {
      color: #d81900;
      text-decoration: none;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Create an Account!</h2>
    <form action="{{ route('register.save') }}" method="POST">
      @csrf
      <div class="form-group">
        <input type="text" name="name" placeholder="Name" required>
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Email Address" required>
      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <input type="password" name="password_confirmation" placeholder="Repeat Password" required>
      </div>
      <button type="submit">Register Account</button>
    </form>
    <div class="extra">
      <a href="{{ route('login') }}">Already have an account? Login!</a>
    </div>
  </div>
</body>
</html>
