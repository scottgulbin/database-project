<html>
	<body>
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
?><?php
// DO STUFF HERE
	$query = "SELECT * FROM Receipt";
	$result = mysqli_query($connection,$query); if(!$result) {
		die("Database Query Failed!");
	};
		while ($row = mysqli_fetch_row($result)){ var_dump($row);
		echo "<hr/>";
	};
	mysqli_free_result($result);
// TO HERE
?><?php
mysqli_close($connection);
?>
	</body>
</html>