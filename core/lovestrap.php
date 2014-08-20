<?php
/*

	Main loader

*/

//Get the config stuff first so we can use it right away
include("config/config.php");

include("autoload.php");

$controller = $_GET['controller']."Controller";
$action = $_GET['action'];
 

if ( !empty($controller) && file_exists(CONTROLLER_PATH . "/" . $controller))) {
	try{
		$c = new $controller();
		if(!empty($action))
		{
			$c->$action();
		}
		else
		{
			$c->init();
		}
	}
	catch (Exception e)
	{
		echo "HA!";
	}
}
else
{
	$c = new Controller();
	echo $c->output();
}



// call_user_func( array($obj,$func), $params )