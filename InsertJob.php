<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$txtId=$_SESSION['ID'];
	$txtTitle=$_POST['txtTitle'];
	$txtTotal=$_POST['txtTotal'];
	$cmbQual=$_POST['cmbQual'];
	$txtDesc=$_POST['txtDesc'];
	$Name=$_SESSION['Name'];
	if($cmbQual=="Other")
	{
	$cmbQual=$_POST['txtOther'];
	}
	// Establish Connection with odbc
	$con=odbc_connect("job","","");
	// Specify the query to Insert Record
	$sql = "insert into job_master (EmployerId,CompanyName,JobTitle,Vacancy,MinQualification,Description) values('".$txtId."','".$Name."','".$txtTitle."','".$txtTotal."','".$cmbQual."','".$txtDesc."')";
	// execute query
	odbc_exec($con,$sql);
	// Close The Connection
	odbc_close ($con);
	echo '<script type="text/javascript">alert("New Requisition Inserted Succesfully");window.location="ManageJob.php";</script>';

?>
</body>
</html>
