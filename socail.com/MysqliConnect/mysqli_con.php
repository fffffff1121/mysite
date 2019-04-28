<?php 

$con = mysqli_connect('localhost','root','','socail');
if($con == FALSE){
	echo mysqli_connect_error($con)."<br>"."Connect Error";
}

 ?>