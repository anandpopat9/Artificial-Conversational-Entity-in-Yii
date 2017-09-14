<?php
$prtype='';
$puserquery='';
$userres=$query;

			$lquery="select * from p";

          	$result1 = mysqli_query($con,$lquery) or die(mysqli_error($con));
          	
          	while ($row1 = mysqli_fetch_array($result1, MYSQL_NUM))
            {
              	$prtype=$row1[0];
                //echo $prtype;
              	$puserquery=$row1[1];
                //echo $puserquery;
            }

        	switch($prtype)
          {
            case 'il':
            $learn=1;
            break;

            case 'result':
            $clgid=$withoutp;
            $rtype='resultid';
            break;

            case 'resid':
            $clgid=$puserquery;
            $bdate=str_replace(array("/"), "%2F", $withoutp);
            //echo 'Bdate:'.$bdate;
            echo '
                  <script>
                  window.open("http://www.darpandodiya.com/egov/result.php?id='; echo $clgid; echo '&pass='.$bdate.'&session=6&year=2012&type=intRelational", "_newtab");
                  </script>';

            $rtype='resdone';
            break;

            case 'timetable':
            $bsem=$withoutp;

            //echo 'Bdate:'.$bdate;
            $sql = "SELECT schedule FROM timetable where bsem='$bsem'";
            //echo $withoutp.'<br>';
            if($result1 = mysqli_query($con,$sql) or die(mysqli_error($con))!==null)
            {
             while ($row = mysqli_fetch_array($result1, MYSQL_NUM))
                {
                  echo "string";
                $response=strtolower($row[0]);
                }
            }
            $rtype='timetableid';
              break;
          }
            
?>