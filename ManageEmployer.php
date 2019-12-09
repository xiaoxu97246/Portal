
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
include "Amenu.php"
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
                     <td bgcolor="#A0B9F3"><strong>Approve for Pending Employer Registration </strong></td>>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                        <tr>
                          <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Company Name</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>City</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Contact Person</div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Approved</strong></div></th>
                        </tr>
                        <?php
include_once 'job.php';
// Establish Connection with Database
$con=odbc_connect("job","","");
// Specify the query to execute
$sql = "select * from Employer_Reg where status='Pending'";
// Execute query
$result=odbc_exec($con,$sql);
// Loop through each records 
while($row = odbc_fetch_array($result))
{
$Id=$row['EmployerId'];
$Name=$row['CompanyName'];
$City=$row['City'];
$CP=$row['ContactPerson'];
$Status=$row['Status'];

?>
                        <tr>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CP;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="UpdateEmployer.php?EmployerId=<?php echo $Id;?>">Pending</a></strong></div></td>

                        </tr>
                        <?php
}
// Retrieve Number of records returned
$records = odbc_result($result,1);
?>
                        <tr>
                          <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$result." Records"; ?> </div></td>
                        </tr>
                        <?php
// Close the connection
odbc_close($con);
?>
                    </table></td>
                  </tr>
                </table>
                <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "Aright.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
