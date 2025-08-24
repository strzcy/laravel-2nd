<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      min-height: 100vh;
      background: #d81900ff; /* warna solid */
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      text-align: center;
    }

    .container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(12px);
      padding: 50px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
      max-width: 500px;
      width: 90%;
    }

    h1 {
      font-size: 42px;
      margin-bottom: 15px;
      font-weight: 800;
      color: #fff;
    }

    p {
      font-size: 16px;
      margin-bottom: 30px;
      color: #ffecec;
    }

    .buttons {
      display: flex;
      gap: 20px;
      justify-content: center;
    }

    .btn {
      padding: 12px 28px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 50px;
      text-decoration: none;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .btn-login {
      background: #fff;
      color: #d81900ff;
    }
    .btn-login:hover {
      background: #f5f5f5;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .btn-register {
      border: 2px solid #fff;
      color: #fff;
      background: transparent;
    }
    .btn-register:hover {
      background: #fff;
      color: #d81900ff;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .footer {
      margin-top: 25px;
      font-size: 13px;
      color: #ffecec;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to My App</h1>
    <p>Nikmati pengalaman terbaik dengan fitur modern, mudah digunakan, dan cepat 🚀</p>
    
    <div class="buttons">
      <a href="{{ route('login') }}" class="btn btn-login">Log in</a>
      <a href="{{ route('register') }}" class="btn btn-register">Register</a>
    </div>

    <p class="footer">&copy; 2025 My App. All rights reserved.</p>
  </div>
</body>
</html>
