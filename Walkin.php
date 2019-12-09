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
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./JobSeeker/css/main.css" />
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
a
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
                <h2><span><a href="#">Walkin Interview Detail</a></span></h2>
               
                <?php
// Establish Connection with Database
$con=odbc_connect("job","","");
// Specify the query to execute
$sql = "select * from Walkin_Master";
// Execute query
$result=odbc_exec($con,$sql);;
// Loop through each records 
while($row = odbc_fetch_array($result))
{
$Id=$row['WalkInId'];
$CompanyName=$row['CompanyName'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description=$row['Description'];
$InterviewDate=$row['InterviewDate'];
$InterviewTime=$row['InterviewTime'];

?>
                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  
                  <tr>
                    <th width="5%" bgcolor="#1CB5F1" class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></th>
                  <th width="26%" height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Company Name</strong>:</div></th>
                    <th width="69%" height="32" bgcolor="#1CB5F1" class="style3"><div align="left"><strong><?php echo $CompanyName;?></strong></div></th>
                  </tr>
                 
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                   <td class="style3"><div align="left"><strong>Job Title:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Vacancy</strong>:</div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Vacancy;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Qualification:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinQualification;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Description:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Date:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $InterviewDate;?></strong></div></td>
                  </tr>
                  <tr>
                    <td class="style3"><img src="../design/ico_cat.gif" alt="" width="8" height="9" /></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong>Time:</strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $InterviewTime;?></strong></div></td>
                  </tr>
                  <?php
}

?>
  </table>
                 
                  <?php
// Close the connection
odbc_close($con);
?>
              
              <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
