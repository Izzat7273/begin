<?php
$f = isset($_POST['f']) ? $_POST['f'] : 0;

$c = ($f-32)*5/9;

 
echo $c;


?>
<!doctype html>
<html>
<head>
    <title> begin 31</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="f" placeholder = "f ni kiriting" value="<?php echo $f ?>">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>