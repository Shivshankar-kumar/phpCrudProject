<?php 
session_start();
?>

<?php
$sid=$_POST['sid'];
$java=$_POST['java'];
$web=$_POST['web'];
$cloud=$_POST['cloud'];
$ood=$_POST['ood'];
$lab1=$_POST['lab1'];
$lab2=$_POST['lab2'];
//connection
$conn=mysqli_connect("localhost", "root", "","BCASTUDENT") or die("Connection failed".mysqli_connect_error());
//query
$sql="INSERT INTO studentmarks (sid, java, webdevelopment, cloudcomputing, ood, lab1, lab2) VALUES ('$sid', '$java', '$web', '$cloud', '$ood', '$lab1', '$lab2');";
mysqli_query($conn, $sql) or die("Query failed". mysqli_connect_error());

    header("Location: http://localhost/project.bca/faculty/viewmarks.php");
mysqli_close($conn);
?>