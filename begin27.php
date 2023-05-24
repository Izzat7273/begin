<?php
$a = isset($_POST['a']) ? $_POST['a'] : 0;

$b = pow ($a,2);
$c = pow ($a,4);
$d = pow ($a,8);
 
echo $b.'<br>'.$c.'<br>'.$d;


?>
<!doctype html>
<html>
<head>
    <title> begin 27</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="a" placeholder = "a ni kiriting" value="<?php echo $a ?>">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>