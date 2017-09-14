<?php
if($sent=='i' && $rtype!='special')
      {
      $response=$response.'<br>And Btw, can i know what answer to that would please you the most? ';
      $sent='il';
      }

if($rtype=='resultid')
{
	$sent='resid'; 
}

if($rtype=='resdone')
{
	$sent='respas'; 
}


?>