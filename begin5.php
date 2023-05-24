<?php
$a = isset($_POST['d']) ? $_POST['d'] : 0;
$v=$a*$a*$a;
$s=6*$a;
echo $v.'<br>'.$s;
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