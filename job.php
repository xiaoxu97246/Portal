<?php

 $con=odbc_connect("job","","") or die (odbc_errormsg());
 if (!$con)
 {
 exit
 ("Error connecting to database: ".$con);
 } 
?>



