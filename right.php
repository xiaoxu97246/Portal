        <!-- Right column -->
<script src="file:///D|/wou/SE Project/project/JobPortal/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="file:///D|/wou/SE Project/project/JobPortal/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                <h3>Contact Us</h3>

                <div id="about-me">
                    <p><strong>SE Job Portal</strong></p>
                    <p>welcome to here!</p>
                    <p>please contact me at yuenlai97246@yahoo.com.my<br />
                    </p>
</div> <!-- /about-me -->

                <hr class="noscreen" />

                <!-- Category -->
                <h3 >Login</h3>
<div class="login">
                <form name="form1" method="post" action="login.php">
                  <table width="100%" border="0">
                    <tr>
                      <td><strong>User Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="text" name="txtUser" id="txtUser">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span>
          <label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Password</strong></td>
                    </tr>
                    <tr>
                <td><span id="sprytextfield2">
                        <label>
                        <input type="password" name="txtPass" id="txtPass">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    <tr>
                      <td><strong>User Type</strong></td>
                    </tr>
                    <tr>
                      <td><label>
                        <select name="cmbUser" id="cmbUser">
                          <option value="JobSeeker">JobSeeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          <option value="Administrator">Administrator</option>
                          </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Login">
                          </div>
                      </label></td>
                    </tr>
                    <tr>
                      <td><div align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div></td>
                    </tr>
                  </table>
      </form>
              </div>
                <br/>

      <hr class="noscreen" />

                <!-- Archive -->
              

            <hr class="noscreen" />

                <!-- Links -->
              
                <hr class="noscreen" />
          </div> <!-- /col-in -->
</div> <!-- /col -->
        <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>