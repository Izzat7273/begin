<?php
$a = isset($_POST['a']) ? $_POST['a'] : 0;

$b = pow ($a,2);
$c = pow ($a,3);
$d = pow ($a,5);
$e = pow ($a,10);
$f = pow ($a,15);
 
echo $b.'<br>'.$c.'<br>'.$d.'<br>'.$e.'<br>'.$f;


?>
<!doctype html>
<html>
<head>
    <title> begin 28</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="a" placeholder = "a ni kiriting" value="<?php echo $a ?>">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>