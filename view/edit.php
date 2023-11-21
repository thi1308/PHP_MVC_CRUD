<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?=$name?>" class="form-control">
        <label for="email">Email</label>
        <input type="text" name="email" value="<?=$email?>" class="form-control">
        <label for="phone">Phone</label>
        <input type="text" name="phone" value="<?=$phone?>" class="form-control">
        <input type="submit" name="submit" value="Add" class="btn btn-danger">
    </form>
</div>



</body>
</html>