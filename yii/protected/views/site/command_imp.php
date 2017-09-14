<?php


//-----------------------------clear log-----------------------------------------------
     switch($command)
     {
     	  case 1:
        $dquery='DELETE FROM log WHERE 1';
        $dresult = mysqli_query($con,$dquery) or die(mysqli_error($con));
        $rtype='log cleared';
        break;
      	
        case 2:
      	$rtype='timetable';
      	break;
      	
        case 3:
        $rtype='result';
        $sent='result';
        break;

        case 4:
        case 5:
        $googleq=$query;
        $googleq=str_replace(array('search','google'),'',$googleq);
        echo '<script>window.open("https://www.google.co.in/search?q='.$googleq.'", "_newtab");</script>';
        $rtype='search';
        $sent='search';
        break;

        case 6:
        $rtype='timetable';
        $sent='timetable';
        break;

      	default:
      	break;
      }


?>