<?php
			require_once 'smg330_login.php';
			$connection = mysqli_connect(
			$db_hostname, $db_username,
			$db_password, $db_database);
			if(mysqli_connect_error()){
			die("Database Connection Failed: " .
			mysqli_connect_error() .
		

" (" . mysqli_connect_error() . ")"
);
};
?>
<?php
	echo " Go here:http://fa16-547-330-02.rutgers-sci.domains/group6/input/merch.html to return, Data has been added"
	?><?php
	
	//stuff here
	$name=$_POST['username'];
	$query ="INSERT INTO User (Name) VALUES('$name')"; //Put main query here
	mysqli_query($connection,$query);
	mysqli_free_result($result);
	?><?php
	mysqli_close($connection);
	?>
	