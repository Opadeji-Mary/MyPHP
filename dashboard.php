<?php
require 'database_con.php';
session_start();
$admins_id=$_SESSION['adminid'];
$query = "SELECT * FROM admins WHERE admins_id= $admins_id";
$con=$database_con->query($query);
print_r($con);
$user=$con->fetch_assoc();
print_r($user);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <div>
                Welcome
            </div>
            <form action="process.php" method="post" enctype="multipart/form-data">
                <input type="file">
                <input type="submit" value="upload file pc" class>
                <button></button>
            </form>
        </div>
    </div>
</body>
</html>