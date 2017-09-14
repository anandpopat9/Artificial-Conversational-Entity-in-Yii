<?php
$first;
$query;
$withoutp;
$squery;//array

$i=0;

      	
        $sql = "SELECT query FROM dquery";
      	//echo $withoutp.'<br>';
      	if($result1 = mysqli_query($con,$sql) or die(mysqli_error($con))!==null)
      	{
      		while ($row = mysqli_fetch_array($result1, MYSQL_NUM))
          {
          		$row[0]=strtolower($row[0]);
              //echo 'Row: '.$row[0].'<br>';

      			$qvar= mysqli_real_escape_string($con,$withoutp);
            $qvar1= mysqli_real_escape_string($con,$row[0]);
            if(is_numeric(stripos($qvar,$qvar1)))
      			{	
                //echo "test";
                $qvar= mysqli_real_escape_string($con,$row[0]);
                $sql1 = "SELECT * FROM dquery where query='$qvar'";
                $result1 = mysqli_query($con,$sql1) or die(mysqli_error($con));

                $kstring='';//---------string of array of keys--------------

                while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM))
                {
                  //echo '<br>string fetched:';
                   
                      $kstring=$row1[2];

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

            		$qvar= mysqli_real_escape_string($con,$k);
          			$sql1 = "SELECT response FROM dresponse where id='$qvar'";
      					
                if($result2 = mysqli_query($con,$sql1) or die(mysqli_error($con))!==null)
				      	{
      						if ($row2 = mysqli_fetch_array($result2, MYSQL_NUM))
          						{
      					   		$response=$row2[0];
      					   		$rtype='dynamic';
      					   		$sent='dynamic';
                      }	
      				  }

                if(is_numeric(stripos($response,'<*')))
                {
                    $addstr=$withoutp;
                    $addstr=str_replace($row[0],'',$addstr);
                    $response=str_replace('<*',' ',$response);
                    
                    //conj
                    
                    $sql3 = "SELECT * FROM conj";
                    $result3 = mysqli_query($con,$sql3) or die(mysqli_error($con));
                    while ($row3 = mysqli_fetch_array($result3, MYSQL_NUM))
                    {
                      if(is_numeric(stripos($addstr,$row3[1])))
                        {
                        //echo $row3[1];
                        $addstr=str_replace($row3[1],$row3[2],$addstr);
                        break;
                        }
                    } 

                    //echo $addstr;
                    $parray = array('?','!','...');
                    $i=array_rand($parray);
                    $punct=$parray[$i];
                    $response.=$addstr.$punct;

      			    } 
              }
      		  }
          }
      	