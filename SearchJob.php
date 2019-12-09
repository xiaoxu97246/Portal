<?php
if(!isset($_SESSION))
{
session_start();
}
?>
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
.style2 {font-weight: bold}
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
include "Jmenu.php"
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
                <h2><span><a href="#">Job Applied Status </a></span></h2>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Job Applied</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th bgcolor="#006699" class="style3"><strong>No</strong></th>
                                                <th bgcolor="#006699" class="style3"><strong>JobSeekid</strong></th>
                        <th bgcolor="#006699" class="style3"><strong>Company Name</strong></th>
                        <th height="32" bgcolor="#006699" class="style3"><strong>Job Title</strong></th>
                        <th bgcolor="#006699" class="style3"><span class="style9 style5 style2"><strong>Min Qualification</strong></span></th>
                        <th bgcolor="#006699" class="style3"><strong>Description</strong></th>

                      </tr>
                      <?php
include_once 'job.php';
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con=odbc_connect("job","","");
// Specify the query to execute
$sql = "SELECT * from Job_App where JobSeekid=$ID";
// Execute query
$result=odbc_exec($con,$sql);
// Loop through each records 
while($row = odbc_fetch_array($result))
{
$JID=$row['ID'];
$JobID=$_SESSION['ID'];
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Qua=$row['MinQualification'];
$Description=$row['JobDescription'];
$Status=$row['Status'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JID;?></strong></div></td>
                                                <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobID;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qua;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>

                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = odbc_result($result,1);
?>
                      <tr>
                        <td colspan="6" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?></div></td>
                      </tr>
                      <?php
                      
// Close the connection
odbc_close($con);
?>
                    </table></td>
                  </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Job Listing</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th bgcolor="#006699" class="style3"><strong>Company Name</strong></th>
                        <th height="32" bgcolor="#006699" class="style3"><strong>Job Title</strong></th>
                        <th bgcolor="#006699" class="style3"><span class="style9 style5 style2"><strong>Min Qualification</strong></span></th>
                        <th bgcolor="#006699" class="style3"><strong>Description</strong></th>
                         <th bgcolor="#006699" class="style3">Status</th>
                      </tr>
                      <?php
// Establish Connection with Database
$con=odbc_connect("job","","");
// Specify the query to execute
$sql = "SELECT * from job_master";
// Execute query
$result=odbc_exec($con,$sql);
// Loop through each records 
while($row = odbc_fetch_array($result))
{
$Id=$row['JobId'];
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Qua=$row['MinQualification'];
$Description=$row['Description'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qua;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="Apply.php?JobId=<?php echo $Id;?>">Apply</a></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = odbc_result($result,1);
?>
                      <tr>
                        <td colspan="6" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
                      
// Close the connection
odbc_close($con);
?>
                    </table></td>
                  </tr>
              </table>


              

           
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div>
<?php
include "Jright.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
