<?php

//connect to database
if(($connection = mysql_connect("localhost","root","12345")) === FALSE)
	die("Could not connect to database");
else
	echo "database connected";
// select database
if(mysql_select_db("assignment3",$connection) === FALSE)
	die("Could not select database");
else 
	echo "database selected";
// if username and password were submitted,check them
echo ($_POST['name1']);
if(isset($_POST["name1"]) && isset($_POST["password1"]))
{
	echo "ok";
		$sql = sprintf("SELECT 1 FROM user WHERE username = '%s' AND password = '%s'",
						mysql_real_escape_string($_POST["name1"]),
						mysql_real_escape_string($_POST["password1"]));
			// execute query
			$result = mysql_query($sql);
			if($result === FALSE)
				die("Could not query database");

			// check whether we found a row
			if(mysql_num_rows($result) == 1)
			{
		
				$username = $_POST["name1"];
				$password = $_POST["password1"];
				setcookie('mycookie_name',$username);
				setcookie('count',0);	
				header("Location:main.php");
				exit;
			
			}
}
?>

