<?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        var_dump($_POST);
    }

    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requete Post</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
    
</head>
<body>
    <form action="" method="post">
        <input type="e-mail" name="e-mail"  value="martin@gmail.com">
        <input type="password" name="passeword" value="123456789">
        <input type="submit" value="je m'inscris">
    </form>
</body>
</html>


