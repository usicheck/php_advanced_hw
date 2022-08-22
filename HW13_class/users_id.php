<?php
require_once __DIR__ . '/functions/database.php';

$connection = get_database_connection();

$statements = $connection->query('SELECT * FROM `users`');
$stat = $statements->fetchAll();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Users_id</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-lg-6">
            <form method="post" action="controllers/delete-users-controller.php">
                <h1>Users ID</h1>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Remove</th>
                    </tr>
                    <?php
                    foreach ($stat

                    as $statement) {
                    ?>
                    <tr>
                        <td>
                            <a href="controllers/personal-id-controller.php?id=<?php echo($statement['id']); ?>">
                                <?php print_r((string)$statement['id']); ?></a>
                        </td>
                        <td>
                            <label>
                                <input type="checkbox" name="remove[]" value="<?php echo $statement['id'] ?>">
                            </label>
                            <?php
                            } ?>
                        </td>
                    </tr>
                </table>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"><img src="storage/trash.png" width='30' height='30'
                                                                       alt=""> Delete user
                    </button>
                </div>
                <div class="col-12">
                    <a href="users.php">Create user</a>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
</body>
</html>
