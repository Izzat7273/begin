<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;
$b = isset($_POST['b']) ? $_POST['b'] : null;
$c = abs($b-$a);
$d = $c/sqrt(2);
$e = $d*4;
$f = $d*$d;
echo $e.'<br>'.$f;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Begin19</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
        <input type="text" name="b" placeholder="b ni kiriting" value="<?php echo $b ?>">
        <button type="SUBMIT">OK</button>
</form>
</body>
</html>