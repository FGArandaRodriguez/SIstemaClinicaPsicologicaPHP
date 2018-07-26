<?php
$hostname_localhost="localhost";
$database_localhost="hms";
$username_localhost="root";
$password_localhost="";

$json=array();

if(isset($_GET["doctorSpecialization"]) && isset($_GET["doctorId"]) && isset(_GET["userId"]) && isset(_GET["consultancyFees"]) && isset(_GET["appoimentDate"]) && isset(_GET["appoimentTime"]) && isset(_GET["postingDate"])){
	$doctorSpecialization=_GET['doctorSpecialization'];
	$doctorId=_GET['doctorId'];
	$userId=_GET['userId'];
	$consultancyFees=_GET['consultancyFees'];
	$appoimentDate=_GET['appoimentDate'];
	$appoimentTime=_GET['appoimentTime'];
	$postingDate=_GET['postingDate'];
	$userStatus=_GET['userStatus'];
	$doctorStatus=_GET['doctorStatus'];
	$updationDate=_GET['updationDate'];

	$conexion = new mysqli($hostname_localhost, $username_localhost, $password_localhost, $database_localhost);

	$insert= "insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) VALUES ('{$doctorSpecilization}','{$doctorId}','{$userId}','{$consultancyFees}','{$appoimentDate}','{$appoimentTime}','{$userStatus}','{$doctorStatus}')";

	if ($conexion->query($insert)===TRUE) {
		# code...
		$resultado = $conexion->query ("SELECT * FROM appointment WHERE userId = '{$userId}'");

		if ($registro=mysqli_fetch_array($resultado)) {
			$json['appointment'][]=$registro;
		}
		mysqli_close($conexion);
		echo json_encode($json);
	}else{
		$resulta['doctorSpecialization']="No se pudo registrar";
		$resulta['doctorId']= "No se pudo registrar";
		$resulta['userId']= "No se pudo registrar";
		$resulta['consultancyFees'] = "No se pudo registrar";
		$resulta['appoimentDate']="No se pudo registrar";
		$resulta['appoimentTime']="No se pudo registrar";
		$resulta['userStatus']="No se pudo registrar";
		$resulta['doctorStatus']="No se pudo registrar";
		$json['appointment'][]=$resulta;
		echo json_encode($json);
	}


}else{
		$resulta['doctorSpecialization']="Web Service No Retorna";
		$resulta['doctorId']= "Web Service No Retorna";
		$resulta['userId']= "Web Service No Retorna";
		$resulta['consultancyFees'] = "Web Service No Retorna";
		$resulta['appoimentDate']="Web Service No Retorna";
		$resulta['appoimentTime']="Web Service No Retorna";
		$resulta['userStatus']="Web Service No Retorna";
		$resulta['doctorStatus']="Web Service No Retorna";
		$json['appointment'][]=$resulta;
		echo json_encode($json);

}

?>