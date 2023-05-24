<?php
$v = isset($_POST['v']) ? $_POST ['v'] : null;
$u = isset($_POST['u']) ? $_POST ['u'] : null;

$t1 = 10;
$t2 = 15;

$s1 = ($v+$u)*$t1;
$s2 = ($v-$u)*$t2;

$s3 = $s1+$s2;

echo $s3;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Begin36</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="v" placeholder="v ni kiriting" value="<?php echo $v ?>">
        <input type="text" name="u" placeholder="u ni kiriting" value="<?php echo $u ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>