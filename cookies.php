<?php
setcookie("user","Menna",time()+60);
setcookie("course","PHP",time()+60);
echo"<pre>";
var_dump($_COOKIE);
echo"
</pre>" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
    if(isset($_COOKIE["user"])){
    echo "Welcome ".$_COOKIE["user"]."<br>";
    echo "Course is ".$_COOKIE["course"]."<br>";
}
    else
    echo"Sorry not recognized <br>";
    setcookie("user","Mennatullah");
    ?>
</body>
</html>