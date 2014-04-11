<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<style type="text/css">.required {font-style:italic;color:#FF0000;font-weight:bold;}

	body {
		background-image:url('bg2.jpg');
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
    width: 35%;
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
.cellcolor
{
    background-color:#fbcccc;
}
tr.pager td {
    padding: inherit;
}

</style>
<?php  
//session_start();
startSession();
function startSession()
{
	//if(!isset($_SESSION)){@session_start();}
	if(isset($_SESSION))
	{
		return true;
	}else{
		@session_start();
	}
	if(isset($_SESSION)){return true;}else{return false;}
} #End startSession()
// session starts with the help of this function
 ?>   

<?php

if(isset($_SESSION['pass']))   // Checking whether the session is already there or not if 
                              // true that header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     
     $pass = $_POST['pass'];

      if(  $pass == "abc123")  // password is  set to "abc123"  by default  
         {                                    

          $_SESSION['pass']=$pass;


         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successfull Login redirects to home.php

        }

        else
        {
            echo "<em><font color=red><b>*</b>invalid Password</font></em>";        
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body >
<form action="" method="post">
<table>
<th colspan=2 ><em><font color="red"><b>*</b> ENTER PASSWORD</font></em></th>
<tr><td colspan=2 >The web address you typed is password protected.</td></tr>
<tr><td colspan=2>For more info, contact xxx@example.com</td></tr>
 <tr><td colspan=2>Please Sign in to eat!</td></tr>
  <tr>
    <td align="left"> PassWord  </td>
    <td align="right"><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td colspan=2 align="center"> <input type="submit" name="login" value="LOGIN"></td>
    
  </tr>
</table>
</form>

</body>
</html>