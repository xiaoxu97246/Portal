
<?php
	session_start();
	$txtTitle=$_POST['txtTitle'];
	$txtTotal=$_POST['txtTotal'];
	$cmbQual=$_POST['cmbQual'];
	$txtDesc=$_POST['txtDesc'];
	$txtDate=$_POST['txtDate'];
	$txtTime=$_POST['txtTime'];
	$CompanyName=$_SESSION['Name'];
	$txtOther=$_POST['txtOther'];

	// Establish Connection with odbc
	$con=odbc_connect("job","","");
	// Specify the query to Insert Record
	$sql = "insert into walkin_master (CompanyName,JobTitle,Vacancy,MinQualification,Description,InterviewDate,InterviewTime,Other) values ('".$CompanyName."','".$txtTitle."','".$txtTotal."','".$cmbQual."','".$txtDesc."','".$txtDate."','".$txtTime."','".$txtOther."')";
	// execute query
	odbc_exec($con,$sql);
	// Close The Connection
	odbc_close ($con);
	echo '<script type="text/javascript">alert("Walkin Inserted Succesfully");window.location="ManageWalkin.php";</script>';

?>
