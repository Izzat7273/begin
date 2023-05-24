<?php
$c = isset($_POST['c']) ? $_POST['c'] : 0;

$f = ($с*9/5)+32;

echo $f;


?>
<!doctype html>
<html>
<head>
    <title> begin 32</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="c" placeholder = "c ni kiriting" value="<?php echo $c ?>">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>