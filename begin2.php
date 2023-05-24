<?php
$a=isset($_POST['a']) ? $_POST['a']:null;
$s=$a*$a;

echo  $s;

?>


<!doctype html>
<html>
<head>
    <title> begin 2</title>
</head>
<body>

<form action="" method="POST">
 
    <input type="text" name="a" placeholder="a ni kiriting">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>