<?php
require('db.php');

// If form submitted, insert values into the database.
if(isset($_POST['loginkaro'])){
        // removes backslashes
	$username = stripslashes($_POST['uname']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_POST['psw']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `login` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['uname'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h1> <b>Username/password is incorrect!!!</b></h1>
<br/><br/> <br/> <h1>Click here to <a href='index.php'>Login</a></h1></div>";
	}
    }else{ echo "sry"; }

?>