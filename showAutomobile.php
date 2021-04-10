<pre>
<?php
require "index.php";
//echo $_GET['brand']
$car=new Automobile($_POST['licensePlate'],$_POST['brand'],$_POST['model'],$_POST['modelYear'],$_POST['color']);
echo $car;
?>
</pre>