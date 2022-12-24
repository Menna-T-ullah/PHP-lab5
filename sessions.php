<?php
session_start();
// echo"<pre>";
// var_dump($_SESSION);
// echo"</pre>";
if(isset($_SESSION['page_count'])){
    
$_SESSION['page_count']+=1;

}
else{
$_SESSION['page_count']=1;
}
$msg="You have viewed my awesome page <span style='color:red'>".$_SESSION['page_count']."</span> times";

if($_SESSION['page_count'] > 10){
echo "<h1>Thanks for visiting our website <span style='color:green'> 10 </span>times</h1>";
}

echo"<pre>";
var_dump($_SESSION);
echo"</pre>";
// unset($_SESSION['page_count']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <?php
echo $msg;
    ?>
</body>
</html>