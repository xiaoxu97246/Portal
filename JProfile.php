<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<?php
	if (isset($_SESSION['message'])){
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>
            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>
               
<?php

$Name=$_SESSION['Name'];
$con = odbc_connect("job", "", "");
$sql = "select * from JobSeeker_Reg where JobSeekerName='".$Name."'";
$result = odbc_exec($con, $sql);
while ($row = odbc_fetch_array($result))
{
	$Name=$row['JobSeekerName'];
	$Address=$row['Address'];
	$City=$row['City'];
	$Email=$row['Email'];
	$Mobile=$row['Mobile'];
	$Qual=$row['Qualification'];
	$Sex=$row['Gender'];
	$Birthdate=$row['BirthDate'];
	$Resume=$row['Resume'];
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Name:</strong></td>
                    <td><?php echo $Name;?></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><?php echo $Address;?></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><?php echo $City;?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $Email;?></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><?php echo $Mobile;?></td>
                  </tr>
                  <tr>
                    <td><strong>Highest Qualification:</strong></td>
                    <td><?php echo $Qual;?></td>
                  </tr>
                  <tr>
                    <td><strong>Gender:</strong></td>
                    <td><?php echo $Sex;?></td>
                  </tr>
                  <tr>
                    <td><strong>Birth Date:</strong></td>
                    <td><?php echo $Birthdate;?></td>
                  </tr>
                  <tr>
                    <td><strong>Resume:</strong></td>
                    <td><a href="../JobPortal/upload/<?php echo $Resume;?>" target="_blank"><strong>View</strong></a></td>
                  </tr>
<?php
}
// Retrieve Number of records returned
$records = odbc_result($result, 1);
?>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
<?php
// Close the connection
odbc_close ($con);
?>
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
