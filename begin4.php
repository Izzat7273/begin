<?php
$d = isset($_POST['d']) ? $_POST['d'] : 0;
$l=0;
$l=3,141592*$d;
echo $l;

?>
<!doctype html>
<html>
<head>
    <title> begin 4</title>
</head>
<body>

<form action="" method="POST">
 
    <input type="text" name="d" placeholder="d ni kiriting">
    <button type="SUBMIT">ok</button>
</form>
</body>

</html>