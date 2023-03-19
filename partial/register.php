<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voting system - Registration page</title>
</head>
<body class="bg-light">
    <h1 class="text-center text-info">Voting system</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../action/registration.php" method="POST"
            enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" placeholder="Enter your username"
                    requiredr="required" name="username" class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Enter your mobile number"
                           requiredr="required" name="mobile" class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Enter your password"
                           requiredr="required" name="password" class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Confirm your password"
                           requiredr="required" name="cpassword" class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <input type="file" name="photo"
                           class="form-control w-50 m-auto">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
                <p>Already have an account? <a href="../" class="text-white"
                    >Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html>
