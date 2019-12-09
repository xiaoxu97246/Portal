
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Status="Arrange for Interview"; 
$AId = $_GET['Id'];
// Establish Connection with odbc
$con=odbc_connect("job","","");
// Specify the query to Update Record
$sql = "Update Job_App set Status='".$Status."' where Id=$AId";
// Execute query
odbc_exec($con,$sql);
// Close The Connection
odbc_close($con);

echo '<script type="text/javascript">alert("Status Updated Succesfully");window.location="Application.php";</script>';

?>
</body>
</html>
