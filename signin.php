<?php
require 'database_con.php';

// if(isset($_POST['submit'])){
//     $email=$_POST['email'];
//     $pass=$_POST['password'];
//     $query="SELECT * FROM admins WHERE email = '$email'";
//     $con=database_con->query($query);
//     if($con->num-row>0){
//         $user=$con->fetch_assoc();
//         $print_r($user);
//         $hashed=$user['password'];
//         $password_verify=password_verify($pass,$hashed)
//         if($password_verify){
//             echo $password_verify;
//         }else{
//             echo '<div class="text-center text-danger">incorrect password</div>'
//         }
//     }else{
//         echo '<div class="text-center text-danger">Email does not exist</div>'
//     }
// }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-6 mx-auto">
            <div class="p-3">
                <form action="" action="<?php echo?>" method="">
                <input type="text">
                <input type="text">
                </form>
            </div>
        </div>
    </div>
</body>
</html>