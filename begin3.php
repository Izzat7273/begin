<?php
$a = isset($_POST['a']) ? $_POST['a'] : 0;
$b = isset($_POST['b']) ? $_POST['b'] : 0;
$p= 2*($a+$b);
$s=$a*$b;
echo $p.'<br>'.$s;
?>
<!doctype html>
<html>
<head>
    <title> begin 3</title>
</head>
<body>

<form action="" method="POST">
 
    <input type="text" name="a" placeholder="a ni kiriting">
    <br>
    <input type="text" name="b" placeholder = "b ni kiriting">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>