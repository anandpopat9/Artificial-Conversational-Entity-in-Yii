<?php
    $i=0;
      
      foreach ($squery as $var1) 
      {
      		$qvar= mysqli_real_escape_string($con,$var1);
          $sql = "SELECT * FROM nouns where noun='$qvar'";
      		if($result1 = mysqli_query($con,$sql) or die(mysqli_error($con))!==null)
      		{
      			while ($row = mysqli_fetch_array($result1, MYSQL_NUM))
          		{
      			   $req_id[$i]=$row[0];
               $req_noun=$row[1];
      			 	 $i++;
           	  }
          }
      }
      
      $rand_id = array_rand($req_id);
      $random_id=$req_id[$rand_id];
          
      
      foreach ($squery as $var1) 
      {
      		$qvar= mysqli_real_escape_string($con,$random_id);
          $sql = "SELECT sentence FROM nouns where id='$qvar'";
      		if($result1 = mysqli_query($con,$sql) or die(mysqli_error($con))!==null)
      		{
      			if ($row = mysqli_fetch_array($result1, MYSQL_NUM))
          		{
      			   $req_sent=$row[0];
           		 $response=$req_sent; /////////generate reply
               $rtype='noun';
             	  break;
      			  }
     			}
      	}
      	
        $qvar= mysqli_real_escape_string($con,$query);
      	$sq = "SELECT noun FROM nouns where sentence='$qvar'";
      	if($re = mysqli_query($con,$sq) or die(mysqli_error($con))!==null)
      		{
      			if ($row = mysqli_fetch_array($re, MYSQL_NUM))
          		{
      				goto near_end;
      			  }
      		}
      		
      		////so that same sentence is not stored again
      		
      		
      		
      		
      	$qvar= mysqli_real_escape_string($con,$req_noun);
        $qvar1= mysqli_real_escape_string($con,$query);
      	$q="INSERT INTO nouns(noun,sentence) VALUES ('$qvar','$qvar1')";
      	$r = mysqli_query($con,$q) or die(mysqli_error($con));
      	
      	near_end:
?>