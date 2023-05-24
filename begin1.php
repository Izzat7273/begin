<?php
$a=isset($_POST['a']) ? $_POST['a']:null;
$p=0;
$p=4*$a;
echo $p;
?>
<!doctype html>
<html>
<head>
    <title> begin 1</title>
</head>
<body>

<form action="" method="POST">
 
    <input type="text" name="a" placeholder="a ni kiriting">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>