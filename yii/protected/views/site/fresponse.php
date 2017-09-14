<?php
 	switch ($rtype) 
 		{
 		
 		case 'learned':
 		$response='Me too! See, as they say- Great minds do think alike!;)';
 		break;

 		case 'log cleared':
 		$response='As clean as a Slate!';
 		break;

 		case 'command':
 		$response='Command executed. command id: '.$command;
 		break;

 		case 'noun':
 		break;
 		
 		case 'result':
 		$response='Your college id, please?';
 		break;

 		case 'resultid':
 		$response='Your birth_date, please?';
 		break;

 		case 'resdone':
 		$response='There you go!';
 		break;

 		case 'dynamic':
 		break;

 		case 'search':
 		$response='At your service.';
 		break;

 		case 'timetable':
 		$response='Branch and Semester, please?(eg.- ce4/ce6)';
 		break;

 		case 'timetableid':
 		break;
		
		default:
 		
 		break;
 		}
 				
 
?>