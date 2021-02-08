<?php
include 'geometry.php';
if(!empty($_POST['length']) && !empty($_POST['breadth'])){
$plength = $_POST['length'];
$pbreadth = $_POST['breadth'];
$rec =new rectangle($plength,$pbreadth);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Geometry</title>
</head>
<body>
<h1>Rectangle Calculator</h1>
<form action="<?php
echo $_SERVER['PHP_SELF'];
?>" method="post">
<label>Length</label><br>
<input type="text" name="length"><br>
<label>Breadth</label><br>
<input type="text" name="breadth"><br>
<input type="submit"><br>
</form>
</body>
</html>