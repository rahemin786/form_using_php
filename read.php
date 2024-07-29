<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>User List</title>
</head>

<body>

    <?php
    include 'database.php';
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    ?>

    <?php if ($result) : ?>
        <div class="container mt-5">
            <?php if ($result->num_rows > 0) : ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <td><?= $row["id"] ?></td>
                                <td><?= $row["name"] ?></td>
                                <td><?= $row["mobile"] ?></td>
                                <td><?= $row["city"] ?></td>
                                <!-- <td>

                                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a>
                                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">DELETE</a>



                                </td> -->


                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>No users found</p>
            <?php endif;
            ?>
        </div>




    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>