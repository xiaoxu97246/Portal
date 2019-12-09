<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];
if($UserType=="Administrator")
{
$con = odbc_connect("job", "", "");
$sql = "select * from user_master where UserName='".$UserName."' and Password='".$Password."'";
$result = odbc_exec($con,$sql);
$records = odbc_num_rows($result);
$row = odbc_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location="index.php";</script>';
}
else
{
header("location:Aindex.php");
} 
odbc_close($con);
}
else if($UserType=="JobSeeker")
{
$con = odbc_connect("job", "", "");
$sql = "select * from jobseeker_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = odbc_exec($con,$sql);
$records = odbc_num_rows($result);
$row = odbc_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location="index.php";</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
header("location:Jindex.php");
} 
odbc_close($con);
}
else
{
$con = odbc_connect("job", "", "");
$sql = "select * from employer_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = odbc_exec($con,$sql);
$records = odbc_num_rows($result);
$row = odbc_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location="index.php";</script>';
}
else
{
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['CompanyName'];
header("location:Eindex.php");
} 
odbc_close($con);
}
?>

</body>
</html>
