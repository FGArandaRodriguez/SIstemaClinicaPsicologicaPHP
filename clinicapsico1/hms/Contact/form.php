<?php 
$conectar=@mysql_connect ("localhost","root","");

mysql_select_db("hms",$conectar);

$nom = $_POST['nom'];
$email= $_POST['email'];
$message= $_POST['message'];


if(isset($_POST['nom']) && !empty($_POST['nom'])&&
	 isset($_POST['email']) && !empty($_POST['email'])&&
	 isset($_POST['message']) && !empty($_POST['message']))
{
	$consulta="INSERT INTO contacts (nomCont,email,message) VALUES
    ('$nom','$email','$message');";
    
    $hacerconsulta=mysql_query($consulta, $conectar);
	echo ("<br> <font color='#000' size='8'>Se Han enviado satisfactoriamente los datos.");
	

}
else{
	echo ("<br> <font color='#000' size='8'>Llena los campos porfavor.");	
} 
 ?>


  <!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<title>Registro | Construye-t</title>
<body>
<style>

	a:link{text-decoration:underline;color:blue;}
	a:visited{text-decoration:underline;color: blue;}     
	a:active{text-decoration: underline;color:blue;}  
	a:hover{text-decoration:none;color: rgba(120,22,213,0.8);} 
	     
	a{
	 
	  font-family: monospace;
	  font-size: 40px;
	  color:white;
	}
	div.contenedor{
		background-color:rgba(255,255,255,0.9);
		border-radius: 5px 5px 5px;
		box-shadow: 5px 5px 20px red;
		display:inline-flex;
		flex-direction:column;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-o-box-sizing:border-box;
	    box-sizing:border-box;
		width:90%;
		position: relative;
		margin-left: 5%;
		margin-top: 150px;
		text-align:center;
		padding: 60px 50px;

	}

	p.aviso-1{
		color:green;
		text-shadow:2px 1px 2px white;
		font-family: uppercase;
		font-size:40px;
		margin-top:-30px;


	}
	p.aviso-2{
		color:red;
		text-shadow:2px 1px 2px darkred;
		font-family: uppercase;
		font-size:40px;
		margin-top: -30px;	
	}
  .nombres{
  	text-transform: uppercase;
  	font-family: monospace;
  	font-size: 40px;
  	color:navy;
  	text-align: center;
  }
  @media screen and (max-width: 650px){
  	div.contenedor{
		background-color:rgba(255,255,255,0.9);
		border-radius: 5px 5px 5px;
		box-shadow: 5px 5px 20px red;
		display:inline-flex;
		flex-direction:column;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-o-box-sizing:border-box;
	    box-sizing:border-box;
		width:100%;
		position: relative;
		margin-left:0%;
		margin-top: 0px;
		text-align:center;
		padding: 60px 50px;

	}

    p.aviso-1{
		color:green;
		text-shadow:2px 1px 2px white;
		font-family: uppercase;
		font-size:35px;
		margin-top:-30px;
	}
	p.aviso-2{
		color:red;
		text-shadow:2px 1px 2px darkred;
		font-family: uppercase;
		font-size:20px;
		margin-top: -30px;	
	}
  p.nombres{
  	font-family: uppercase;
  	text-transform: uppercase;
  	font-size: 30px;
  	color:navy;
  	text-shadow:2px 1px 2px black;
  	text-align:center;
  }


  }
</style>	
<script>
	var pagina="../../index.html";
	function redireccion(){
		location.href=pagina;
	}
    setTimeout("redireccion()",5000);//2050 son los segundos en los cuales regresa a la página.
</script>

<div class="contenedor">
     
    <p class="aviso-1"><?php echo "$mensaje_1"; ?></p>
    <p class="nombres"><?php echo $_POST['nombre'].'  '.$_POST['apellido']?></p> 
    <p class="aviso-2"><?php echo "$mensaje_2"; ?></p>

	<!--<a href="contact.html">Puedes regresar, ya has sido inscrito.</a>-->
</div>

</body>
</html>