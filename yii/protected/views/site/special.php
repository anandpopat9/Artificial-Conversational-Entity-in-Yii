<?php
$qvar = mysqli_real_escape_string($con, $withoutp);
$lquery="select r from special where q='$qvar'";
      $result1 = mysqli_query($con,$lquery) or die(mysqli_error($con));
          	
          	while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM))
              {
              	$response=$row1[0];
              	$rtype='special';
          	  }
?>
