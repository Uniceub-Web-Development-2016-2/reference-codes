<?php

session_start();

include('httpful.phar');

if($_POST["email"] != null && $_POST["password"] != null)
{
	$login_array = array('email' => $_POST["email"], 'password' =>$_POST["password"]);

	$url = "http://localhost/aula8/user/login";

	$body = json_encode($login_array);

	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send();   
	
	$array = json_decode($response->body, true)[0];

	if(!empty($array) && $array["email"] == $_POST["email"] && $array["password"] == $array["password"]){
 		$_SESSION["email"] = $array["email"];
		$_SESSION["name"] = $array["first_name"];
		$_SESSION["cebola"] = "tomate seco";
		header("Location: perfil.php");
	}
	else
		echo "Pode não mano veio!";
		//chamar página de erro
}





?>

