<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;
$b = isset($_POST['b']) ? $_POST['b'] : null;
$c = sqrt($a*$a+$b*$b);
$d = $a+$b+$c;
echo $c.'<br>'.$d;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Begin12</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
        <input type="text" name="b" placeholder="b ni kiriting" value="<?php echo $b ?>">
        <button type="SUBMIT">OK</button>
</form>
</body>
</html>