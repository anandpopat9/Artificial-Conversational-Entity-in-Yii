<?php
	$qvar = mysqli_real_escape_string($con,$sent);
	$lquery="UPDATE p set pr='$qvar' where 1";
	$lresult = mysqli_query($con,$lquery) or die(mysqli_error($con));

    $qvar = mysqli_real_escape_string($con,$query);
    $lquery="UPDATE p set pq='$qvar' where 1";
    $lresult = mysqli_query($con,$lquery) or die(mysqli_error($con));
?>