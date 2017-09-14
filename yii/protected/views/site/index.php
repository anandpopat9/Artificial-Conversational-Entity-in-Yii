<?php
/* @var $this SiteController */
use yii\bootstrap\ActiveForm;
/* @var $form CActiveForm  */
include('db.php');
?>

<?php
//--------------------------------After submit, split string into words---------------------------------
  if(isset($_POST['submit']))
    { 
      $query=$_POST['query'];
      
      $count=0;
      $rtype='';
      $response='';
      $var=''; //Iterative var|will have the last character/word after splitting string
      $first='';//first word
      $command=0;
      $tolearn=0;
      $sent='';
      $debug='a';
      $i=0;
      $req_id[]='';
      $req_noun='';
      $c='';
      $clgid='';
      $karray[]='';
      $addstr='';

      //Query without punctuations
      $withoutp=strtolower(str_replace(array(".","?","!",",",";",":","-","(",")","[","]","{","}","'","\""), "", $query));
 
      
      //to Lowercase
      $query=strtolower($query);

      $squery = preg_split('/(?<=\s)|(?<=\w)(?=[.,:;!?()-])|(?<=[.,!()?\x{201C}])(?=[^ ])/u', $query);
      
      include('rspaces.php');

      //Check if sent is to learn
      include('checkpres.php');      
      //
      //Check if query is command; set rtype=command
      include('checkcommand.php');
      
      if($sent=='timetable')
      {
        goto respond;
      }
      //Clear Log and set rtype=log cleared
      include('command_imp.php');
      

      //echo 'User: ';
      
      //echo $debug.'<br>';

      //echo 'Sentence type:';
      include('stype.php');

      
      //key matching, array parsing and random function
      include('kgen.php');
      
      
      //Check in Special and set rtype=special
      include('special.php');
      if($rtype=='special')
      {
        goto respond;
      }
      //
      //Dynamic response
      include('dynamic.php');
      if($rtype=='dynamic')
      {
        goto respond;
      }

      //Check in nouns db
      include('checknouns.php');

      //if($debug!='a'){
      //Query to get response string from the db and set rtype=simple
      include('resgen.php');
      
      respond:
     //learn if prev response was il and set rtype=learned
      include('learn.php');

      //Question back to learn and set stype=il
      include('change_stype.php');
      //include('vdebug.php');
      
      
      //Update prev response and type
      include('previous.php');
      
      //Make a log entry 
      include('log.php');  
      
      //Check Redundancy
      include('red.php');
    
      
      //Final response
      include('fresponse.php');
      
      //$response=mysqli_real_escape_string($con,$response);
     
    }
    else
    {
      $response='Start a conversation- Say "Log me in"!';
      
    }

?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="elusive-icons.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">


</style>

</head>

<body>

 <center>
<br><br>

 <div id="response">        
  <iframe srcdoc='<?php include("output.php") ?>'
 allowtransparency="true" scrolling="yes" allowfullscreen="true" ></iframe>
 </div>
 </center>
  <center>
    <div>
       <div>
        <?php $form=$this->beginWidget('CActiveForm', array('id'=>'query-form','action'=>array('index'))); ?>
        <input type='text' name='query'>
        <input class='btn btn-primary' type="submit" value="Send" name='submit'>
        <?php $this->endWidget(); ?>
       </div>
    </div>

<br>
<br>


<div>
  To start a fresh Conversation, just say-"Clear"
<div>

</center> 

 </body>
 </html>
 </html>
