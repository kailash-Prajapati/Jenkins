<?php
$con =  new mysqli("172.31.0.195","kailash","redhat","dm");
if($con->connect_error)
{
   echo $con->connect_error;
   exit;
}
?>