<?php
$mysql_host= 'localhost';
$mysql_user= 'root';
$mysql_password= '';
$mysql_database= 'testdatabase';

$link= @mysqli_connect( $mysql_host, $mysql_user, $mysql_password) or die ('Could not connect');
@mysqli_select_db($link,$mysql_database) or die ('Could not connect');
echo 'Connected';

$query="SELECT name,id  FROM user";

if($query_run=mysqli_query($link,$query)){
	while($query_row=mysqli_fetch_assoc($query_run)){
		$name=$query_row['name'];
		$id=$query_row['id'];

		echo $id .'is' .$name ;

	}
}
else {
	echo mysqli_error($link);
}

?>