
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
                             <td height="27" bgcolor="#A0B9F3"><strong>Approve of Job Seeker Pending List</strong></td> 
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                        <tr>
                          <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5">Qualification</div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Contact</div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Resume</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Status</strong></div></th>
                        </tr>
                        <?php
include_once 'job.php';
// Establish Connection with Database
$con=odbc_connect("job","","");
// Specify the query to execute
$sql = "select * from jobseeker_reg where Status='Pending'";
// Execute query
$result=odbc_exec($con,$sql);
// Loop through each records 
while($row = odbc_fetch_array($result))
{
$Id=$row['JobSeekId'];
$Name=$row['JobSeekerName'];
$Qua=$row['Qualification'];
$Mobile=$row['Mobile'];
$Resume=$row['Resume'];


?>
                        <tr>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qua;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mobile;?></strong></div></td>
                    <td><a href="../JobPortal/upload/<?php echo $Resume;?>" target="_blank"><strong>View</strong></a></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="EditJobSeeker.php?JobSeekId=<?php echo $Id;?>">Approved</a></strong></div></td>

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
