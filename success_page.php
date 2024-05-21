
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>successMessage</title>
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
        p{
            text-align: center;
            font-weight: bolder;
            font-family: sans-serif;
            font-size: 20px;
        }
        a { 
            text-align: center;
            font-family: 'Arial Narrow Bold', sans-serif;
            font-weight: bold;
            font-size:20px;
            display: inline-block;
            padding: 10px;
            padding-left: 10px;
            padding-right: 10px;
            margin-left: 80px;
            background-color: #FF69B4;
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
    <div class="container">
       <?php
        if (isset($_GET["report_id"])) {
            $reportId = $_GET["report_id"];
            echo "<p>Your report has been submitted. Your Report ID is: $reportId</p>";
        }
        ?>
        <p>आपकी रिपोर्ट सफलतापूर्वक सबमिट हो गई है।</p>
        <br>
        <a class="link" href="edit_report.php">Edit Report</a>
        <a class="links" href="report.php">New Report</a>
        <a href="view_report.php">View Report</a>
        <a href="logout.php">Log out</a>
    </div>
    <br>
    

</body>
</html>