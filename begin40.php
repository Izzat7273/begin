<?php
$a1 = isset($_POST['a1']) ? $_POST ['a1'] : null;
$b1 = isset($_POST['b1']) ? $_POST ['b1'] : null;
$c1 = isset($_POST['c1']) ? $_POST ['c1'] : null;
$a2 = isset($_POST['a2']) ? $_POST ['a2'] : null;
$b2 = isset($_POST['b2']) ? $_POST ['b2'] : null;
$c2 = isset($_POST['c2']) ? $_POST ['c2'] : null;

$a = ($a1*$b2-$a2*$b1);
$b = ($c1*$b2-$c2*$b1)/$a;
$c = ($a1*$c2-$a2*$c1)/$a;

echo $b.'<br>'.$c.'<br>'.$a;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Begin40</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a1" placeholder="a1 ni kiriting" value="<?php echo $a1 ?>">
        <input type="text" name="b1" placeholder="b ni kiriting" value="<?php echo $b1 ?>">
        <input type="text" name="c1" placeholder="c ni kiriting" value="<?php echo $c1 ?>">
        <input type="text" name="a2" placeholder="a2 ni kiriting" value="<?php echo $a2 ?>">
        <input type="text" name="b2" placeholder="b ni kiriting" value="<?php echo $b2 ?>">
        <input type="text" name="c2" placeholder="c ni kiriting" value="<?php echo $c2 ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>