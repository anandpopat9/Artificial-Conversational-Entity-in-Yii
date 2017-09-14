<?php
  $qvar= mysqli_real_escape_string($con,$first);
 
 $sql = "SELECT ka FROM $tquery where q='$qvar'";
     $result = mysqli_query($con,$sql) or die(mysqli_error($con));

      $kstring='';//---------string of array of keys--------------

      while ($row = mysqli_fetch_array($result, MYSQL_NUM))
        {
          //echo '<br>string fetched:';
          if(is_numeric(substr_compare($query,$row[0],0)))
            {
            //  echo $row[0];
              $kstring=$row[0];
            }

        }
        //echo '<br>array:';

        $karray = explode(",", $kstring);

       foreach ($karray as $ar) 
        {
          $ar = preg_replace('/\s/', '', $ar);//-------remove spaces from the end
          //echo $ar;# code...
          //echo '|'.'&nbsp';
        }
      
      //echo '<br>';
        $rand_k = array_rand($karray);
        $k=$karray[$rand_k];
?>