<?php
/*

	Page Model
		Generates page bootstrapping

*/
class Page extends Model{

	public function __construct()
	{
	
	}

	public function get_footer()
	{
		include(TEMPLATE_PATH."/views/footer.php");
	}
	
	public function get_header()
	{
		include(TEMPLATE_PATH."/views/header.php");
	}
	
	public function get_footer_scripts()
	{
		//load up from a folder and loop thrpough each file to build dynaically
	}
	
	
	public funtion get_content($id)
	{
		//will be used to grab per post pages... via controller route
	}
	
}