<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
    <a href="index.php?controller=student&action=add" class="btn btn-primary">ADD</a>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $student){
            ?>
            <tr>
                <td><?=$student['name']?></td>
                <td><?=$student['email']?></td>
                <td><?=$student['phone']?></td>
                <td class="text-right">
                    <a href="index.php?controller=student&action=edit&id=<?= $student['id']?>" class="btn btn-danger">Edit</a>
                    <a href="index.php?controller=student&action=delete&id=<?= $student['id']?>" class="btn btn-primary">Delete</a>
                </td>
            </tr>
        <?php


        }

        ?>

        </tbody>
    </table>
</div>
</body>
</html>