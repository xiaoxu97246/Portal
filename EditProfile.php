<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />
	
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
</head>

<body>
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
                <h2><span><a href="#">Welcome <?php

echo $_SESSION['Name'];

?></a></span></h2>
				<?php

//include_once 'job.php';
$ID = $_SESSION['Name'];
// Establish Connection with Database
$con = odbc_connect("job", "", "");
// Specify the query to execute
$sql = "select * from employer_reg where CompanyName ='". $ID."'";
// Execute query
$result = odbc_exec($con, $sql);
// Loop through each records
while ($row = odbc_fetch_array($result))
{
    $EmpId = $row['EmployerId'];
    $CompanyName = $row['CompanyName'];
    $CtcPerson = $row['ContactPerson'];
    $Address = $row['Address'];
    $City = $row['City'];
    $Email = $row['Email'];
    $Mobile = $row['Mobile'];
    $AW = $row['Area_Work'];
    $UserName = $row['UserName'];

?>
<form method="post" action="UpdateProfile.php">
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Company ID:</strong></td>
                    <td><span id="sprytextfield1">
                      <label>
                      <input name="txtId" type="text" id="txtId" value="<?php echo $EmpId;?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Company Name:</strong></td>
                    <td><span id="sprytextfield2">
                      <label>
                      <input name="txtName" type="text" id="txtName" value="<?php echo $CompanyName;?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Contact Person:</strong></td>
                    <td><span id="sprytextfield3">
                      <label>
                      <input name="txtContact" type="text" id="txtContact" value="<?php echo $CtcPerson;?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><span id="sprytextarea1">
                      <label>
                      <textarea name="txtAddress" id="txtAddress" cols="35" rows="3"><?php echo $Address;?></textarea>
                      </label>
                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><span id="sprytextfield4">
                      <label>
                      <input name="txtCity" type="text" id="txtCity" value="<?php echo $City;?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><span id="sprytextfield5">
                      <label>
                      <input name="txtEmail" type="text" id="txtEmail" value="<?php echo $Email;?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><span id="sprytextfield6">
                      <label>
                      <input name="txtMobile" type="text" id="txtMobile" value="<?php echo $Mobile;?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Area of Work:</strong></td>
                    <td><span id="sprytextfield7">
                      <label>
                      <input name="txtArea" type="text" id="txtArea" value="<?php echo $AW;?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td><span id="sprytextfield8">
                      <label>
                      <input name="txtUser" type="text" id="txtUser" value="<?php echo $UserName;?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Password:</strong></td>
                    <td><span id="sprytextfield9">
                      <label>
                      <input name="txtPassword" type="password" id="txtPassword" value="<?php echo $Password;?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
				  <?php

}
// Retrieve Number of records returned
$records = odbc_result($result, 1);

?>                    
                  <tr>
                    <td>&nbsp;</td>
                    <td><label>
                      <input type="submit" name="button" id="button" value="Submit" />
                    </label></td>
                  </tr>
<?php

// Close the connection
odbc_close($con);

?>
                </table>
</form>
              <p>&nbsp;</p>

                
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "Eright.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
//-->
</script>
</body>
</html>
