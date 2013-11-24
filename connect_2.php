<?
	$inputuser=$POST['user'];
	$inputpass=$POST['pass'];
	$user="";
	$password="";
	$connect=mysql_connect("localhost", $user, $password);
	
	@mysql_connect_db($tutorial) or ("Databasd not found");
	
	$query="SELECT * FROM 'users' WHERE 'user'='$inputuser'";
	$querypass="SELECT * FROM 'users' WHERE 'password'= '$inputpass'";

	echo $query;
	echo $querypass;
	
	mysql_close();
/*
	if ($inputuser=="Hirsch" && $inputuser=="123"){
		echo "Welcome"
		header('Location: Home.php'); 
	}
	else{
		echo "Not Welcome"
		header('Location: Fail.php');
	}*/
?>