<?php
$a = isset($_POST['a']) ? $_POST['a'] : 0;

$b = $a*M_PI/180;

 
echo $b;


?>
<!doctype html>
<html>
<head>
    <title> begin 29</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="a" placeholder = "a ni kiriting" value="<?php echo $a ?>">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>