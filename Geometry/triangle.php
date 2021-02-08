<?php
include 'geometry.php';
if(!empty($_POST['base']) && !empty($_POST['height'])){
$pbase =$_POST['base'];
$pheight =$_POST['height'];
$tri =new triangle($pbase,$pheight);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Geometry</title>
</head>
<body>
<h1>Triangle Calculator</h1>
<form action="<?php
echo $_SERVER['PHP_SELF'];
?>" method="post">
<label>Base</label><br>
<input type="text" name="base"><br>
<label>Height</label><br>
<input type="text" name="height"><br>
<input type="submit"><br>
</form>
</body>
</html>