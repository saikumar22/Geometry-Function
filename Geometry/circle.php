<?php
include 'geometry.php';
if(!empty($_POST['radius'])){
$pradius = $_POST['radius'];
$rec =new circle($pradius);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Geometry</title>
</head>
<body>
<h1>Circle Calculator</h1>
<form action="<?php
echo $_SERVER['PHP_SELF'];
?>" method="post">

<label>Radius</label><br>
<input type="text" name="radius"><br>
<input type="submit"><br>

</form>
</body>
</html>