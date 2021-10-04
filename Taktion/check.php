<?php
$con = mysqli_connect('localhost','root','','taktion');
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$telephone=$_POST['telephone'];
$feedback=$_POST['feedback'];

$sql=mysqli_query($con,"INSERT INTO feedback(name,lastname,telephone,feedback) VALUES('$name','$lastname','$telephone' ,'$feedback')");


?>
