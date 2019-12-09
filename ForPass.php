<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

require_once('job.php');
session_start();
$UserName = $_POST['txtUserName'];
$Question = $_POST['cmbQue'];
$Answer = $_POST['txtAnswer'];
$UserType = $_POST['rdUser'];

if ($UserType == "Employer")
{
    $con = odbc_connect("job", "", "");

    $sql = "select * from employer_reg where UserName='" . $UserName .
        "' and Question='" . $Question . "' and Answer='" . $Answer . "'";
    $result = odbc_exec($con, $sql);
    $records = odbc_num_rows($result);
    $row = odbc_fetch_array($result);
    echo $records;
    if ($records == 0)
    {
        echo '<script type="text/javascript">alert("Wrong Information Provided");window.location="Forget.php";</script>';
    } else
    {
        $_SESSION['ID'] = $row['EmployerId'];
        $_SESSION['Name'] = $row['CompanyName'];
        header("location:EProfile.php");
    }
    odbc_close($con);
} else
{
    $con = odbc_connect("job", "", "");
    $sql = "select * from jobseeker_reg  where UserName='" . $UserName .
        "' and Question='" . $Question . "' and Answer='" . $Answer . "'";
    $result = odbc_exec($sql, $con);
    $records = odbc_num_rows($result);
    $row = odbc_fetch_array($result);
    if ($records == 0)
    {
        echo '<script type="text/javascript">alert("Wrong Information Provided");window.location="Forget.php";</script>';
    } else
    {
        $_SESSION['ID'] = $row['JobSeekId'];
        $_SESSION['Name'] = $row['JobSeekerName'];
        header("location:JProfile.php");
    }
    odbc_close($con);
}

?>
</body>
</html>
