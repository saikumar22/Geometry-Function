<?php
include 'geometry.php';
if(!empty($_POST['d1']) && !empty($_POST['d2'])){
$pd1 = $_POST['d1'];
$pd2 = $_POST['d2'];
$rho =new rhombus($pd1,$pd2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Geometry</title>
</head>
<body>
<h1>Rhombus Calculator</h1>
<form action="<?php
echo $_SERVER['PHP_SELF'];
?>" method="post">
<label>Diagonal D1</label><br>
<input type="text" name="d1"><br>
<label>Diagonal D2</label><br>
<input type="text" name="d2"><br>
<input type="submit"><br>
</form>
</body>
</html>