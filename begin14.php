<?php
$l = isset($_POST['l']) ? $_POST['l'] : null;
$r = $l/(2*M_PI);
$s = M_PI*($r*$r);
echo $r.'<br>'.$s;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Begin14</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="l" placeholder="l ni kiriting" value="<?php echo $l ?>">
        <button type="SUBMIT">OK</button>
</form>
</body>
</html>