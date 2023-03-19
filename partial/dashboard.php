<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data= $_SESSION['data']; 
if($_SESSION['status']==1){
    $status = '<b class="text-success">Voted</b>';
}else{
    $status = '<b class="text-danger">Not voted</b>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">Log out</button></a>
        <h1 class="my-3">Voting system</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <?php
                    if(isset($_SESSION['groups'])){
                        $group=$_SESSION['groups'];
                        for($i=0;$i<count($group);$i++){
                            ?>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../uploads/<?php echo $group[$i]['photo']; ?>" alt="Image1">
                            </div>
                            <div class="col-md-8">
                                <strong class="text-dark h5">Group name:</strong>
                                <?php echo $group[$i]['username']; ?><br>
                                <strong class="text-dark h5">Votes:</strong>
                                <?php echo $group[$i]['votes']; ?><br>
                            </div>
                        </div>
                        <form action="../action/voting.php" method="post">
                            <input type="hidden" name="groupvotes" value="<?php echo $group[$i]['votes']?>"> 
                            <input type="hidden" name="groupid" value="<?php echo $group[$i]['id']?>"> 
                            <?php
                                if($_SESSION['status']==1){
                                    ?>
                                    <button class="bg-success my-4 text-white px-3">Voted</button>
                                    <?php
                                }else{
                                    ?>
                                    <button class="bg-danger my-4 text-white px-3" type="submit">Vote</button>
                                    <?php
                                }
                            ?>
                        </form>
                        <hr>
                        <?php
                        }
                    }else{
                        ?>
                        <div class="container">
                            <p>No groups to display</p>
                        </div>
                        <?php
                    }
                    ?>
                <!-- groups  -->
            </div>
            <div class="col-md-5">
                <!-- user profile-->
                <img src="../uploads/<?php echo $data['photo'];?>" alt="user image">
                <br>
                <br>
                <strong class="text-dark h5">Name:</strong>
                <?php echo $data['username']; ?><br><br>
                <strong class="text-dark h5">Mobile:</strong>
                <?php echo $data['mobile']; ?><br><br>
                <strong class="text-dark h5">Status:</strong>
                <?php echo $status ?><br><br>
            </div>
        </div>
    </div>
</body>
<footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</footer>
</html>