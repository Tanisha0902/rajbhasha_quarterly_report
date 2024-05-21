<?php
require 'config.php';

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("Location: login.php");
    exit();
}



if (isset($_GET["reportid"])) {
    $reportId = $_GET["reportid"];
    $user_id = $_SESSION["user_id"];

    // Retrieve the report by its ID and user ID
    $sql = "SELECT * FROM rajbhasha_reports WHERE report_id = '$reportId' AND user_id = '$user_id'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo '<div class="error-message">"Error retrieving report: " . mysqli_error($conn) . </div>';
    } else {
        $reportData = mysqli_fetch_assoc($result);
        if (!$reportData) {
            echo '<div class="error-message">"Report not found or you do not have access to this report." . </div>';
        } else {
           include 'edit_report_form.php';
           exit();
           
        }
    }
}    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Report</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #eceffc;
            margin: 0;
            padding: 0;
            position: relative;
        }
            label{
            font-size: 22.5px;
            font-weight: bolder;
            }
            input[type="text"]{
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            color: #444;
            }

            button[type="submit"] {
            background-color: rgba(60, 0, 255, 0.565);
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
            padding: 12px 150px;
            text-align: center;
            border:none;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            }

        button[type="submit"]:hover {
            background-color: rgba(249, 10, 229, 0.616);
        }
        .error-message {
                    background-color: #f44336;
                    color: white; 
                    padding: 10px;
                    font-weight: bolder;
                    text-align: center;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    z-index: 9999;  
        }
</style> 
</head>
<body>
    <form action="edit_report.php" method="get">
        <label for="reportid">Enter Your Report Id:</label>
        <input type="text" name="reportid" id="reportid" required>
        <br>
        <button type="submit">Edit Report</button>

    </form>
</body>
</html>
