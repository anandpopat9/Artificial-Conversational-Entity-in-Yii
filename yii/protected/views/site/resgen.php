<?php
      //$qvar = mysqli_real_escape_string($con,$k);
      $qvar=$k;
      $sqlm = "SELECT r FROM $tresponse where k='$qvar'";
      
      if($resultm = mysqli_query($con,$sqlm) or die(mysqli_error($con))!==null)
      {
         // echo 'Random key:'.$k.'<br>';
          while ($row = mysqli_fetch_array($resultm, MYSQL_NUM))
          {
            //echo 'test';
            if(is_numeric(substr_compare($query,$row[0],0)))
             $response=$row[0];
          }

          if($response=='')
          {
            //echo "string";
            //Last possible responses
            $karray = array(3,4,6,7,8,9);
            $rand_k = array_rand($karray);
            $k=$karray[$rand_k];
            
            //$qvar = mysqli_real_escape_string($con,$k);
            $qvar=$k;
            $sql2 = "SELECT r FROM $tresponse where k='$qvar'";

            $result2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
          
            while ($row2 = mysqli_fetch_array($result2, MYSQL_NUM))
              {
                //echo 'sads';
               // if(is_numeric(substr_compare($query,$row[0],0)))
                $response=$row2[0];
              }
           //   echo 'Random key:'.$k.'<br>';
          }
      }
?>