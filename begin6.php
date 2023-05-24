<?php
$r = isset($_POST['d']) ? $_POST['d'] : 0;
$l=2*3.14*$r;
$s=3.14*$r*$r;
echo $l.'<br>'.$s;

?>
<!doctype html>
<html>
<head>
    <title> begin 6</title>
</head>
<body>

<form action="" method="POST">
 
    <input type="text" name="r" placeholder="r ni kiriting">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>