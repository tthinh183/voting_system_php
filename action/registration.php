<?php
    include('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $std = $_POST['std'];

    if($password!=$cpassword){
        echo '<script>
            alert("Password do not match");
            window.location ="../partial/register.php";
        </script>';
    }else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $sql = "insert into `userdata` (username,mobile,password,photo,standard,status,votes)
        values ('$username','$mobile','$password','$image','$std',0,0)";

        $result = mysqli_query($con,$sql);

        if($result){
            echo '<script>
            alert("Registration successfull");
            window.location ="../";
        </script>';
        }else{
            die(mysqli_error($con));
        }
    }
?>
