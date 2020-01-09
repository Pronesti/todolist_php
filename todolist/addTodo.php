<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add todo</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>
<div class="card mx-auto" style="padding: 1rem;margin: 1rem;width:50vw;">
<h5 class="card-title text-center">Add To Do</h5>
    <form action='save.php' method='POST'>
    <div class="form-group">
        <label>Title</label>
        <input class="form-control" name="title" />
</div>
        <div class="form-group">
        <label>Message</label>
        <input class="form-control" name="message" />
</div>
        <input class="btn btn-primary w-75 m-1" type='submit' value='Add To Do' />
        <a href="index.php" class="btn btn-danger float-right w-auto m-1"> Volver</a>
    </form>
</div>
    <script src="./js/bootstrap.min.js"><script/>
</body>
</html>