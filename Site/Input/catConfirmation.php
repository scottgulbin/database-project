
	<?php
	require_once 'login.php';
	$connection = mysqli_connect(
		$db_hostname, $db_username,
		$db_password, $db_database);
	if( $_POST)
	{
	if(mysqli_connect_error()){
		die("Database Connection Failed: " .
				mysqli_connect_error() .
				" (" . mysqli_connect_error() . ")"
	)
	mysql_select_db()
	};
	}
	?><?php
	$result = mysql_query( "select count(id) as num_rows from Category_Item" );
	$row = mysql_fetch_object( $result );
	$total = $row->num_rows;
	//stuff here
	$query ="INSERT INTO Category_Item ('MerchPrimary','Street Number','Street','City','State','Phone_Number')
VALUES ($total+1,$_GET['catName']);"
	
	?><?php
	mysqli_close($connection);
	?>
	<?php
	echo " Data added! < <a href=\\"addtran.html">Click here</a> to return to the transaction page"
	>