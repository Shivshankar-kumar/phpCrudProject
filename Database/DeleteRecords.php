<?php
//to take for update data from edit form
$s_id=$_POST['sid'];
include '../connection.php';
//Query for delete records
$sql="DELETE FROM student2 WHERE sid = {$s_id} ";
mysqli_query($conn,$sql) or die("Query failed".mysqli_error());

//code for redirect this page on home
header ("Location: http://localhost/project.bca/Menu-option/viewData.php");

//close the connection
mysqli_close($conn);
?>