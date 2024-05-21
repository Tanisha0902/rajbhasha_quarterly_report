<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- <link rel="stylesheet" href="CSS/design.css"> -->
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

        }


        h1 {
            font-family:Georgia, 'Times New Roman', Times, serif;
            text-align: center;
            padding: 20px;
            background-color: rgb(199, 193, 21);
            color: black;
            font-weight: bolder;
            font-size: 50px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px;
        }

        .left-links {
            display: flex;
            gap: 10px;
        }
        .logout-link{
            margin-left: auto;
        }
        a {
            display: inline-block;
            padding: 10px;
            background-color: #d1102d;
            /* background-color: #FF69B4; */
            font-weight: bolder;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #27ae60;
        }

</style>
</head>
<body>
<h1>WELCOME TO HOME PAGE!</h1>
    <div class="container">
        <div class="left-links">
            <a href="report.php">New Report</a>
            <a href="edit_report.php">Edit Report</a>
            <a href="view_report.php">View Reports</a>
        </div>
        <a href="logout.php" class="logout-link">Logout</a>
    </div>
</body>
</html>
