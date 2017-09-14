<?php
      
      
      $lquery="UPDATE log set last='0' where 1";
      $lresult = mysqli_query($con,$lquery) or die(mysqli_error($con));

      $qvar= mysqli_real_escape_string($con,$query);
      $lquery="select * from log where uquery='$qvar'";
      $result1 = mysqli_query($con,$lquery) or die(mysqli_error($con));
          
      $flag=0;

      while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM)) //Already present
      {
                //echo 'sads';
               // if(is_numeric(substr_compare($query,$row[0],0)))
                
                $count=$row1[1];
                $count=$count+1;
          		
                $qvar= mysqli_real_escape_string($con,$query);
                $lquery="UPDATE log set count=count+'1' where uquery='$qvar'";
                $lresult = mysqli_query($con,$lquery) or die(mysqli_error($con));

                $lquery="UPDATE log set last=last+'1' where uquery='$qvar'";
                $lresult = mysqli_query($con,$lquery) or die(mysqli_error($con));
                
                $flag=1; //Not to make a new entry

      }

      if($flag==0) //New Entry
        {

        $count=$count+1;
        
        $qvar= mysqli_real_escape_string($con,$query);
        $qvar2= mysqli_real_escape_string($con,$count);
        $qvar3= mysqli_real_escape_string($con,$response);
      
        $lquery="INSERT INTO log(uquery, count, response) VALUES ('$qvar','$qvar2','$qvar3')";
        $lresult = mysqli_query($con,$lquery) or die(mysqli_error($con));
        
        $lquery="UPDATE log set last=last+'1' where uquery='$qvar'";
        $lresult = mysqli_query($con,$lquery) or die(mysqli_error($con));
        }
?>