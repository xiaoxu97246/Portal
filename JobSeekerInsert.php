<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Qualification=$_POST['cmbQual'];
	$Gender=$_POST['cmbGender'];	
	$BirthDate=$_POST['txtBirthDate'];
	$path1 = $_FILES["txtFile"]["name"];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$UserType="JobSeeker";
	if ($Qualification=="Other")
	{
		$Qualification=$_POST['txtOther'];
	}
	  move_uploaded_file($_FILES["txtFile"]["tmp_name"],"upload/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with odbc
	$con=odbc_connect("job","","");
	// Specify the query to Insert Record
	$sql = "insert into JobSeeker_Reg(JobSeekerName,Address,City,Email,Mobile,Qualification,Gender,BirthDate,Resume,Status,UserName,Password,Question,Answer) values('".$Name."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Qualification."','".$Gender."','".$BirthDate."','".$path1."','".$Status."','".$UserName."','".$Password."','".$Question."','".$Answer."')";
	// execute query
	odbc_exec($con,$sql);
	// Close The Connection
	odbc_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully, Please wait for Approval");window.location="index.php";</script>';

?>
</body>
</html>
