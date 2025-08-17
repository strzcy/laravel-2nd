<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f8f9fc;
    }
    #wrapper {
      display: flex;
      min-height: 100vh;
    }
    /* Sidebar */
    .sidebar {
      width: 220px;
      background: #4e73df;
      color: white;
      padding: 20px 0;
    }
    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: white;
      text-decoration: none;
    }
    .sidebar a:hover {
      background: #2e59d9;
    }
    .sidebar hr {
      border: none;
      border-top: 1px solid rgba(255,255,255,0.2);
      margin: 15px 0;
    }
    /* Content */
    #content-wrapper {
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    #content {
      flex: 1;
      padding: 20px;
    }
    /* Navbar */
    .navbar {
      background: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .navbar form {
      display: flex;
      gap: 5px;
      align-items: center;
    }
    .navbar input {
      padding: 6px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .navbar button {
      padding: 6px 10px;
      background: #4e73df;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    /* Footer */
    footer {
      background: white;
      padding: 15px;
      text-align: center;
      font-size: 14px;
      color: #666;
      border-top: 1px solid #ddd;
    }
    h1 {
      margin: 0;
      color: #333;
    }
  </style>
</head>
<body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->
    <div class="sidebar">
      <a href="{{ route('dashboard') }}">Dashboard</a>
      <a href="{{ route('products') }}">Product</a>
      <a href="/profile">Profile</a>
      <hr>
    </div>

    <!-- Content Wrapper -->
    <div id="content-wrapper">

      <!-- Navbar -->
      <div class="navbar">
        <!-- Left: Search -->
        <span>{{ auth()->user()->name }} ({{ auth()->user()->level }})</span>


        <!-- Right: User -->
        <div>
          <a href="{{ route('logout') }}" style="margin-left:15px; color:#4e73df; text-decoration:none;">Logout</a>
        </div>
      </div>

      <!-- Main Content -->
      <div id="content">
        <h1>@yield('title')</h1>
        @yield('contents')
      </div>

      <!-- Footer -->
      <footer>
        <span>Copyright © Your Website 2025</span>
      </footer>

    </div>
  </div>
</body>
</html>
