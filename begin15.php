<?php
$s = isset($_POST['s']) ? $_POST['s'] : null;
$d = 2*sqrt($s)/M_PI;
$r = $d/2;
echo $d.'<br>'.$r;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Begin15</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="s" placeholder="s ni kiriting" value="<?php echo $s ?>">
        <button type="SUBMIT">OK</button>
</form>
</body>
</html>