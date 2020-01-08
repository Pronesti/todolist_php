<?php
session_start();
$which = $_SESSION['list'][$_GET['id']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='update.php?id=<?=$_GET['id']?>' method='POST'>
        <label>Title</label>
        <input name="title" value='<?=$which['title']?>'/>
        <label>Message</label>
        <input name="message" value='<?=$which['message']?>'/>
        <input type='submit' value='Update To Do' />
    </form>
</body>
</html>