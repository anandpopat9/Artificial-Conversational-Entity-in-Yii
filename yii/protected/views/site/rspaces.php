<?php
      $f=0;  

        foreach ($squery as $var) 
        {
          $var = preg_replace('/\s/', '', $var);//-------remove spaces from the end
          if($f==0)
          {
            $first=$var;
            $f=1;
          }

          //echo $var;# code...
          //echo '|'.'&nbsp';
        } 
?>