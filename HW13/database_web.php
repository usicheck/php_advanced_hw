<?php
require_once __DIR__ . '/functions/database.php';
$connection = get_database_connection();

$res = $connection->query("SHOW TABLES LIKE 'users'");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>database_web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-lg-6">
            <?php
            if (($res->rowCount()) > 0) { ?>
                <form action="controllers/delete-table-controller.php" class="row g-3" method="post">
                    <div class="thumbnail">
                        <h3> Table 'users' is already exist</h3>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Drop table 'users'</button>
                    </div>
                    <a href="users.php">Create user</a>
                </form>

                <?php
            } else { ?>
                <form action="controllers/create-table-controller.php" class="row g-3" method="post">
                    <div class="thumbnail">
                        <h3> Table 'users' is not exist</h3>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Create table 'users'</button>
                    </div>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
