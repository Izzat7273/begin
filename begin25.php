<?php
$x = isset($_POST['x']) ? $_POST['x'] : 0;
$a = $x*$x*$x*$x*$x*$x;
$b = $x*$x;
$c = 3*$a;
$d = 6*$b;
$y = $c-$d-7;


echo $y;


?>
<!doctype html>
<html>
<head>
    <title> begin 25</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="x" placeholder = "x ni kiriting" value="<?php echo $x ?>">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>