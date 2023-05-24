<?php
$v1 = isset($_POST['v1']) ? $_POST ['v1'] : null;
$v2 = isset($_POST['v2']) ? $_POST ['v2'] : null;

$t = 1;
$s1 = 50;
$s2 = $t*($v1+$v2)+$s1;

echo $s2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Begin36</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="v1" placeholder="v1 ni kiriting" value="<?php echo $v1 ?>">
        <input type="text" name="v2" placeholder="v2 ni kiriting" value="<?php echo $v2 ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>