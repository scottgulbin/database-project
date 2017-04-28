
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
	//stuff here
	$start_Date = $_POST["sdate"];
	$end_Date = $_POST["edate"];
	echo  $_POST["sdate"];
	echo  $_POST["edate"];
	$query ="SELECT User_Name, count(idReceipt) as 'total transactions', sum(Transaction.Amount) AS 'Total' FROM `fa16-547-330-02_group6`.Receipt 
INNER JOIN `Transaction` ON Transaction.Receipt_idReceipt=Receipt.idReceipt 
where Date between '$start_Date' and '$end_Date' group by User_Name";
	$result = mysqli_query($connection,$query); if(!$result) {
		die("Database Query Failed!");
	};
		echo "<table><tr><th>User_Name</th><th>Number of Transactions</th><th>Amount</th></tr>";
		while($row = $result->fetch_assoc()){
			echo"<tr><td>".$row["User_Name"]."</td><td>".$row["total transactions"]."</td><td>".$row["Total"]."</td></tr>";
		}
		echo "</table>";
	;
	mysqli_free_result($result);
	?><?php
	mysqli_close($connection);
	?>
	
