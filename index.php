<?php

?>

<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Voting system</title>
</head>
<body class="bg-light">
    <h1 class="text-info text-center p-3">Voting system</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./action/login.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control w-50 m-auto" placeholder="Enter your username"
                           required="required">
                </div>
                <div class="mb-3">
                    <input type="text" name="mobile" class="form-control w-50 m-auto" placeholder="Enter your mobile number"
                           required="required" maxlength="10" minlength="10">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control w-50 m-auto" placeholder="Enter your password"
                           required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                    <button type="submit" class="btn btn-dark my-4">Login</button>
                    <p>Don't have an account<a href="./partial/register.php" class="text-white"> Register</a></p>
            </form>
        </div>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</footer>
</html>