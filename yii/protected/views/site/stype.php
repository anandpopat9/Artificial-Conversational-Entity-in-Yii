<?php

      if($first=='what' || $first=='where' || $first=='who' || $first=='when' || $first=='why' || $first=='which' || $first=='how' || $first=='are' || $first=='am' || $first=='can')//-------8 Q's--------
          {//echo 'Interrogative'; 
          $sent='i';}

      if($sent=='')
    {
      switch($var)//-----------------------determine sentence type-------------------------------
      {
        case '?':
        //echo "Interrogative";
        $sent='i';
        break;

        case '.':
        //echo 'Statement';
        $sent='s';
        break;
      
        case '!':
        //echo 'Exclamatory';
        $sent='e';
        break;
        
        default:
        {
        //echo 'Cannot be deduced';
        $sent='c';
        break;
        }
      }
    }
?>