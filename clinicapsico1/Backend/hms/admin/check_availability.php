<?php 
require_once("include/config.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	
		$result =mysql_query("SELECT email FROM users WHERE email='$email'");
		$count=mysql_num_rows($result);
		echo $count;
if($count>0)
{
echo "<span style='color:red'> Este correo electrónico ya existe.</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Este correo esta disponible.</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
