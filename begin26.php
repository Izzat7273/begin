<?php
$x = isset($_POST['x']) ? $_POST['x'] : 0;
$a = 4*pow($x-3,6);
$b = 7*pow ($x-3,3);
$c = 3*$a;
$d = 6*$b;
$y = $a-$b+2;

 
echo $y;


?>
<!doctype html>
<html>
<head>
    <title> begin 26</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="x" placeholder = "x ni kiriting" value="<?php echo $x ?>">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>