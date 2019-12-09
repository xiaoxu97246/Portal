<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<?php require_once('job.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>JOB PORTAL</title>
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "Emenu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
          <div class="article">
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               


                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Application For Job Seeker </strong></td>
                  </tr>
                  </table>


                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>ContactNo</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Email</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Status</strong></div></th>
                     <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>View resume</strong></div></th>
                                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Update Status</strong></div></th>
                  </tr>
                  <?php
$Name=$_SESSION['Name'];
// Establish Connection with Database
$con=odbc_connect('job','','');
// Specify the query to execute
$sql = "select * from Job_App where CompanyName='".$Name."'";
// Execute query
$result = odbc_exec($con,$sql);
// Loop through each records 
while ($row = odbc_fetch_array($result))
{
$Id=$row['ID'];
$Status=$row['Status'];
$JobSeekerName=$row['JobSeekerName'];
$Contact=$row['Mobile'];
$Email =$row['Email'];
$JobSeekId=$row['JobSeekId'];
$Resume=$row['Resume'];
?>
                  <tr>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobSeekerName;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Contact;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                     <td><a href="../JobPortal/upload/<?php echo $Resume;?>" target="_blank"><strong>View</strong></a></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="UpdateStatus.php?Id=<?php echo $Id;?>">Call For Interview</a></strong></div></td>
                  </tr>
                  <?php
}
// Retrieve Number of records returned
$records = odbc_result($result,1);
?>
                </table>
               <?php
			
// Close the connection
odbc_close($con);

?>
            <p>&nbsp;</p>
          </div> 
            <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "Eright.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 

</div> <!-- /main -->

</body>
</html>
