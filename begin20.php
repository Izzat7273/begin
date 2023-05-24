<?php
$x1 = isset($_POST['x1']) ? $_POST['x1'] : null;
$y1 = isset($_POST['y1']) ? $_POST['y1'] : null;
$x2 = isset($_POST['x2']) ? $_POST['x2'] : null;
$y2 = isset($_POST['y2']) ? $_POST['y2'] : null;
$a = sqrt(($x2-$x1)*($x2-$x1)+($y2-$y1)*($y2-$y1));
echo $a;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beggin20</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="x1" placeholder="x1 ni kiriting" value="<?php echo $x1 ?>">
        <input type="text" name="y1" placeholder="y1 ni kiriting" value="<?php echo $y1 ?>">
        <input type="text" name="x2" placeholder="x2 ni kiriting" value="<?php echo $x2 ?>">
        <input type="text" name="y2" placeholder="y2 ni kiriting" value="<?php echo $y2 ?>">
        <button type="SUBMIT">OK</button>
</form>
</body>
</html>