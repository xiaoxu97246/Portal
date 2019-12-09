<?php
if(!isset($_SESSION))
{
session_start();
}
$con=odbc_connect("job","","");
 $Id=$_SESSION['Id'];
 
	$sql = "delete from walkin_master where WalkInId='".$Id."'";
	// execute query
	odbc_exec($con,$sql);
	
	// Close The Connection
	odbc_close ($con);

	echo '<script type="text/javascript">alert("Walkin Deleted Succesfully");window.location="ManageWalkin.php";</script>';

	
?>
