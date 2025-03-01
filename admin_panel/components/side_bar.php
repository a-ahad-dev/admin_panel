<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Reset some basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Overall layout */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        /* Container */
        .container {
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
            
        }

        .sidebar-header h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .menu {
            list-style-type: none;
            padding: 0;
        }

        .menu li {
            margin: 15px 0;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .menu li a:hover {
            background-color: #34495e;
        }

        /* Main content area */
        .main-content {
            flex: 1;
            padding: 20px;
        }

        header h1 {
            font-size: 28px;
            color: #333;
        }

        .dashboard {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 18px;
            font-weight: bold;
            color: #27ae60;
        }
    </style>


</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Panel</h2>
            </div>
            <ul class="menu">
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="#">Admin Control</a></li>
                <li><a href="product_fetch.php">Products display </a></li>
            </ul>
        </div>

      


        
    </div>
</body>

</html>