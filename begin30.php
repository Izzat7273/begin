<?php
$a = isset($_POST['a']) ? $_POST['a'] : 0;

$b = $a*180/M_PI;

 
echo $b;


?>
<!doctype html>
<html>
<head>
    <title> begin 30</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="a" placeholder = "a ni kiriting" value="<?php echo $a ?>">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>