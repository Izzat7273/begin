<?php
$r1 = isset($_POST['r1']) ? $_POST['r1'] : null;
$r2 = isset($_POST['r2']) ? $_POST['r2'] : null;
$s1 = M_PI*($r1*$r1);
$s2 = M_PI*($r2*$r2);
$a = $s1-$s2;
echo $s1.'<br>'.$s2.'<br>'.$a;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Begin13</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="r1" placeholder="r1 ni kiriting" value="<?php echo $r1 ?>">
        <input type="text" name="r2" placeholder="r2 ni kiriting" value="<?php echo $r2 ?>">
        <button type="SUBMIT">OK</button>
</form>
</body>
</html>