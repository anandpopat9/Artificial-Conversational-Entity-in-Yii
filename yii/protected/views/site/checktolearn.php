<?php
$prtype='';
$puserquery='';
$userres=$query;

			$lquery="select * from p";

          	$result1 = mysqli_query($con,$lquery) or die(mysqli_error($con));
          	
          	while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM))
            {
              	$prtype=$row1[0];
              	$puserquery=$row1[1];
            }

        	if($prtype=='il')
        	{
        	$tolearn=1;
        	}
?>