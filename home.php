<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<style type="text/css">.required {font-style:italic;color:#FF0000;font-weight:bold;}

	body {
		background-image:url('bg.jpg');
background-color:#cccccc;
background-repeat: no-repeat;
 background-attachment:fixed;
margin:80px;
height: 80%;
}
table {
    background-color: #fbcccc;
    border-collapse: collapse;
    border-spacing: inherit;
    margin-top: 0.75em;
    margin-left:2em;
    border:groove ;
    width: 20%;
    
}

th {
    background-color: #ffd800;
    font-size: 1.2em;
    text-align: left;
    border: thin;
    padding-left: 0;
}

   
td {
    color-interpolation:linearRGB;
    padding: 0.15em 1em 0.15em 0em;
    border: inherit;
}


</style>
<?php  // session_start(); 
 ?>

<html>
  <head>
       <title> Home </title>
  </head>
  <body align="center">
<?php
	//session_start();
    //  if(!isset($_SESSION['pass'])){ // If session is not set that redirect to index Page                            {
    //   header("Location:index.php");  
        // echo '<script type="text/javascript"> window.open("index.php","_self");</script>';
      // }

?>
<table >
<th align="center"><em><font color="red" align="center"><b>*</b> xxx@example.com</font></em></th>
<tr><td align="center">Login Success</td></tr>
<tr><td align="center">Enjoy Your Meal!</td></tr>
<tr><td align="center"><a href='logout.php'> Logout</a> </td></tr>
</body>
</html>