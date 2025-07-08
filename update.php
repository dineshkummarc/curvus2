<?php
include('admin/connect.php');

$ses_id=$_GET['id'];

mysql_query("UPDATE `curvus`.`order_details` SET `status`='Pending' WHERE memberID ='$ses_id'")or die(mysql_error());

header('location:reservation.php');

?>