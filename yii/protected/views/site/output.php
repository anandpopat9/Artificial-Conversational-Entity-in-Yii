<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<style type="text/css">
#text
{
	font-size: 15px;
	font-family: Arial, Helvetica, sans-serif;
  position: relative;
  left: 0px;
  color: white;
}

</style>
</head>
<body>


<center>
<?php
echo '<div id="text">';

$text='';
  
if(isset($_POST['submit']))
  { 
  $query=$_POST['query'];
  $query=str_replace(array("'"), "", $query);
  $response=str_replace(array("\\r"), "", $response);
  $response=str_replace(array("\\"), "", $response);
  $response=str_replace(array("'"), "`", $response);
  
  $text='<b>User</b> : '.$query.'<br><br> &nbsp&nbsp&nbsp <b>AI</b> &nbsp: '.$response;
  //$text=mysqli_real_escape_string($con,$text);
  echo $text;
  }
else
{
  
  echo $response;
}


?>
</div>
</center>
</body>
</html>