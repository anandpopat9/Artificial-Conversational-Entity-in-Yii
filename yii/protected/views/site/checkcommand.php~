<?php
$lquery="select * from commands";

          	$result1 = mysqli_query($con,$lquery) or die(mysqli_error($con));
          	
          	while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM))
              {
              	$id=$row1[0];
               // echo $id;
              	$c=$row1[1];
               // echo $c;

              	if($first==$c)
				          {
					         //echo 'id: '.$id.'<br>';
				           $command=$id;
                   $rtype='command';
                  }
              }
?>