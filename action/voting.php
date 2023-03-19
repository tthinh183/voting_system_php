<?php
session_start();
include('connect.php');

$vote = $POST['groupvotes'];
$totalvote =$vote+1;

$gid = $_POST['groupid'];
$uid =$_SESSION['id'];
$updatevote= mysqli_query($con, "update `userdata` set votes= '$totalvote' where id='$gid'");


$updatestatus= mysqli_query($con, "update `userdata` set status=1 where id='$uid'");


if($updatevote and $updatestatus){
    $getgroup = mysqli_query($con, "select username,photo,votes,id from `userdata` where standard = 'group'");
    $groups = mysqli_fetch_all($getgroup,MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;
    $_SESSION['status'] = 1;
    echo '<script>
        alert("Voting successful");
        window.location="../partial/dashboard.php";
    </script>';
}else{
    echo '<script>
        alert("Techical erorr !! Vote after sometime");
        window.location="../partial/dashboard.php";
    </script>';
}
?>