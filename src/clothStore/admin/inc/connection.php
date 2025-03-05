<?php
$con= new mysqli("172.31.7.245","prateek","redhat","dm");
if($con->connect_error)
{
    echo $con->connect_error;
    exit;
}
?>