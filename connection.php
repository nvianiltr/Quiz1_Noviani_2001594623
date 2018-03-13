<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'gocarshare';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

	if (!$conn)     
		die('Could not connect: ' . mysqli_error($conn));
	if (!mysqli_select_db($conn, $dbname))    
		die("Can't select database");	

	$uname = $_POST["uname"];
	$password = $_POST["psw"];

	if($uname!=''&& $password!='')
	{
		 $query="select * from User where Username='".$uname."' and Password='".$password."'";

		 $result=mysqli_query($conn,$query); 

		 if(!$result)
		    die("Query Failed: " .  mysqli_error($conn));
		 else{
		     if(mysqli_num_rows($result)>0)
		     {
		     	$_SESSION['username']=$uname;

		     	$query = "select Type from User where Username='".$uname."' and Password='".$password."'";
		     	$result=mysqli_query($conn,$query);
		     	$type = mysqli_fetch_row($result);

		     	if($type[0] == 'Driver') //redirect to Driver page
		     	{
  					echo '<script>window.location.href = "DriverPage.php";</script>';
		     	}
		     	else //redirect to Passenger Page
		     	{
					echo '<script>window.location.href = "PassengerPage.php";</script>';
		     	}
		     	
		    }   
		    else
		    {
		       echo'You entered username or password is incorrect';
		     }
		 }
	}
	mysqli_free_result($result);
	mysqli_close($conn);
?>