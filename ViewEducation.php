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
-->
    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
.style2 {font-weight: bold}
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
                <h2><span><a href="#">Education Qualification </a></span></h2>
               

              <table width="100%" border="1" cellspacing="2" cellpadding="2">
 
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Educational Profile of <?php echo $_SESSION['Name'];?></strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                       <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>ID</strong></div></th>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Degree</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>University</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Passing Year</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Percentage</strong></div></th>
                      </tr>
<?php
include_once 'job.php';
$ID=$_SESSION['ID'];
$Name=$_SESSION['Name'];
// Establish Connection with Database
$con=odbc_connect('job','','');
// Specify the query to execute
$sql = "select * from jobseeker_education where JobSeekId=$ID";
// Execute query
$result=odbc_exec($con,$sql);
// Loop through each records 
while($row = odbc_fetch_array($result))
{
$EID=$row['Eduld'];
$Degree=$row['Degree'];
$Univ=$row['University'];
$Passing=$row['PassingYear'];
$Percentage=$row['Percentage'];
?>
                      <tr>
                       <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $EID;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Degree;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Univ;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Passing;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Percentage;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = odbc_result($result,1);
?>
                      <tr>
                        <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
odbc_close ($con);
?>
                    </table></td>
                  </tr>
                </table>
                <p>&nbsp;</p>


          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

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
