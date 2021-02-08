<?php
include 'geometry.php';
if(!empty($_POST['side'])){
$pside = $_POST['side'];
$squ =new square($pside);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Geometry</title>
</head>
<body>
<h1>Square Calculator</h1>
<form action="<?php
echo $_SERVER['PHP_SELF'];
?>" method="post">

<label>Side</label><br>
<input type="text" name="side"><br>
<input type="submit"><br>

</form>
</body>
</html>