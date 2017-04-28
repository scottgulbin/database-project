
<?php
	echo " Go here:http://fa16-547-330-02.rutgers-sci.domains/group6/home.php to return, Data has been added"
	?><?php
	
	//stuff here
	$query ="INSERT INTO merchant ('MerchPrimary','Street Number','Street','City','State','Phone_Number')
VALUES ($_GET['merchname'],$_GET['tel',$_GET['streetNumber'],$_GET['address'],$GET_['city'],$_GET['state']);"
	
	mysqli_free_result($result);
	?><?php
	mysqli_close($connection);
	?>
	