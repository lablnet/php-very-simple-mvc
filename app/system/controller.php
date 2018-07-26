<?php

class Controller
{
	public function model($folder,$model)
	 {
		 if(file_exists("../app/models/".$folder . "/". $model.".php")){
		 require_once "../app/models/".$folder . "/". $model.".php";
		 return new $model();
		}else{
			require_once "../app/errors/pages/index.php";
		} 
	 }
	public function view($view, $args = [])
	{
		$theme = "basic";
		//or grab form database
		extract($args, EXTR_SKIP);
		if(file_exists("../app/theme/".$theme."/".$view.".php")){
		require_once "../app/theme/".$theme."/" . $view.".php";
		}else{
			require_once "../app/errors/pages/index.php";
		}
	}
  
}
