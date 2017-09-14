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
       

        if($userres==$puserquery || $command!=0)
        {
          $prtype='';
        }

        if($prtype=='il')
        {
          $lquery="select id from special";

            $result1 = mysqli_query($con,$lquery) or die(mysqli_error($con));
            
            while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM))
              {
                $id=$row1[0];
              }

        $id=$id+1;
        $qvar= mysqli_real_escape_string($con,$puserquery);
        $qvar1= mysqli_real_escape_string($con,$userres);
        $lquery="INSERT INTO special(id,q,r) VALUES ('$id','$qvar','$qvar1')";
        $lresult = mysqli_query($con,$lquery) or die(mysqli_error($con));
        $rtype='learned';
        $sent='c';
    	  }


?>