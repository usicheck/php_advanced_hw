<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-lg-6">

            <form action="controllers/add-users-controller.php" class="row g-3" method="post">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name = 'name' required>
                </div>
                <div class="col-md-6">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="surname" name = 'surname'>
                </div>
                <div class="col-md-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name = 'age'>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name = 'email' required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Create user</button>
                </div>
                <a href="database_web.php">Create table `users`</a>
                <a href="users_id.php">See all ID from `users`</a>

            </form>

</body>
</html>
