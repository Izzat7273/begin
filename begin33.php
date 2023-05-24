<?php
$x = isset($_POST['x']) ? $_POST ['x'] : null;
$y = isset($_POST['y']) ? $_POST ['y'] : null;


$a = 30000;
$b = 50000;

$x1 = $b/$x;
$y1 = $b/$y;

echo $x1.'<br>'.$y1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Begin33</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="x" placeholder="X ni kiriting" value="<?php echo $x ?>">
        <input type="text" name="y" placeholder="y ni kiriting" value="<?php echo $y ?>">
        <button type="SUBMIT">OK</button>
    </form>
</body>
</html>