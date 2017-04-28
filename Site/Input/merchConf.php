
	<?php
	/*require_once 'login.php';
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
	echo " Results: <a href="output/findmerch.html">Click here</a> to return to the merchant page"
	><?php
	$result = mysql_query( "select count(id) as num_rows from Category_Item" );
	$row = mysql_fetch_object( $result );
	$total = $row->num_rows;
	//stuff here
	$query ="SELECT * From Merchant WHERE MerchPrimary=$_GET['searchMerch']";
	
	?><?php
	mysqli_close($connection);
	*/?>
	
	
	
	
	
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
	echo " Go here:http://fa16-547-330-02.rutgers-sci.domains/group6/output/genBud.php to return Results: "
	?><?php
	/*$result = "select count(receipts)";
	$row = mysql_fetch_object( $result );
	$total = $row->num_rows;*/
	//stuff here
	$merchantName = $_POST['search_box'];
	$query ="SELECT * From Merchant WHERE MerchPrimary=$merchantName";
	$result = mysqli_query($connection,$query); 
	if(!$result) {
		die("Database Query Failed!");
	};
		echo "<table><tr><th>Merchant</th><th>Street Number</th><th>Street</th><th>City</th>
				<th>State</th><th>Phone Number</th></tr>";
		while($row = mysqli_fetch_assoc($result)){
			echo"<tr><td>".$row["MerchPrimary"]."</td><td>".$row["Street Number"]."</td><td>".$row["Street"]."</td>
					<td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Phone_Number"]."</td></tr>";
		}
		echo "</table>";
		/*var_dump($row);
		echo "<hr/>"*/;
	;
	mysqli_free_result($result);
	?><?php
	mysqli_close($connection);
	?>
	
	