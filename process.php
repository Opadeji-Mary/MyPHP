<?php
if(isset($_POST['submit.php'])){
    print_r($_FILES['image']);
}else{
    header('location:signin.php');
}
?>