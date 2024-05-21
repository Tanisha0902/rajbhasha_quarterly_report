<?php

require 'config.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email' ");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert ('Username or Email Has Already taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user Values('', '$name','$username','$email','$password')";
            // mysqli_query($conn,$query);
            // header("Location: index.php");
            // exit();
            if(mysqli_query($conn, $query)) {
                $user_id = mysqli_insert_id($conn); // Get the auto-generated user_id
                $_SESSION["user_id"] = $user_id; // Store user_id in session
                header("Location: index.php");
                exit();
            }else{
                echo "Registration failed.";
            }    
        
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- <link rel="stylesheet" href="CSS/index.css"> -->
    <style>
        body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  /* background-color: rgb(5, 115, 115); */
  background: #eceffc;
  margin: 0;
  padding: 0;
  position: relative;
}

form {
    max-width: 600px;
    margin: 35px auto;
    padding: 30px;
    background-color: rgba(0, 0, 0, 0.861) ;
    /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); */
    box-shadow: 0 4px 8px whitesmoke;
    border-radius: 20px;
}

h2 {
    text-align: center;
    padding: 14px;
    font-weight: bold;
    margin: 0;
    margin-left: 55px;
    margin-right: 55px;
    font-size: 25px;
    background-color: #3498db;
    color: white;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
  

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 90%;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 15px;
    background-color: #f9f9f9;
    box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.1);
    color: #444;
}

label {
    font-weight: bold;
    color: white;
    font-size: 20px;
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
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    /* background-color: rgba(255, 255, 255, 0.863); */
    background-color: rgba(249, 10, 229, 0.616);
}

p {
    text-align: center; /* Align the text to the right */
    font-weight: bolder;
    margin-top: 10px; /* Add some spacing between the link and the text */
    color: white;
    font-weight: bold;
    text-decoration: underline;
}

a {
    color: rgb(0, 94, 255);
    text-decoration: underline;
}

a:hover {
    text-decoration: underline;
    color: aqua;
}

    </style>
</head>
<body>
    <form class="" action="" method="post" autocomplete="off">
        <h2>Registration</h2>
        <br>
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" required value=""> <br>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required value=""> <br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required value=""> <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required value=""> <br>
        <label for="confirmpassword">Confirm Password :</label>
        <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
        <button type="submit" name="submit">Register</button>
        <br>
        <p>Already Have An Account?</p>
        <p>Click Here 
        <br>
        <br> 
        <a href="login.php">Login</a></p>
    </form>
    <br>

    
</body>
</html>