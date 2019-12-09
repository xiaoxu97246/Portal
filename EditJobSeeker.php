
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$Id = $_GET['JobSeekId'];
$Status="confirm";
// Establish Connection with odbc
$con=odbc_connect("job","","");
// Specify the query to Update Record
$sql = "Update jobseeker_reg set Status='".$Status."' where JobSeekId=$Id";
// Execute query
odbc_exec($con,$sql);
// Close The Connection
odbc_close($con);

echo '<script type="text/javascript">alert("Status Updated Succesfully");window.location="ManageJobSeeker.php";</script>';

?>
</body>
</html>
