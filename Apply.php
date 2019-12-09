<?php
if(!isset($_SESSION))
{
session_start();
}
	$JobId=$_GET['JobId'];
	$JId=$_SESSION['ID'];
	$Status="Apply";
	$Desc="No Message";
	
	
	// Establish Connection with odbc
	$con=odbc_connect("job","","");
	// Specify the query to Insert Record
	$sql = "insert into application_master (JobSeekId,JobId,Status,Description)values($JId,$JobId,'".$Status."','".$Desc."')";
	// execute query
	odbc_exec($con,$sql);
	// Close The Connection
	odbc_close($con);
	
	echo '<script type="text/javascript">alert("Succesfully Applied For Job");window.location="SearchJob.php";</script>';

?>

