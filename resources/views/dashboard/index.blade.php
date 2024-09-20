<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASR Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

<div class="dashboard-container">
    <header>
        <h1>Autonomous Restaurant Service Robot (ASR) Dashboard</h1>
        <a href="{{ route('logout') }}" class="logout-btn">Logout</a>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Robot Status</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </nav>

    <main>
        <h2>Welcome to the ASR Dashboard</h2>
        <p>This is your control center for managing the Autonomous Restaurant Service Robot.</p>

        <div class="info-section">
            <h3>Robot Status</h3>
            <p>All robots are functioning normally.</p>
        </div>

        <div class="info-section">
            <h3>Recent Orders</h3>
            <p>You have 5 new orders.</p>
        </div>

        <div class="info-section">
            <h3>Customer Feedback</h3>
            <p>4.8/5 star average customer rating.</p>
        </div>
    </main>

</div>

</body>
</html>
