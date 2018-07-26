<?php				
class Home extends Controller
{
	public function index(){
		//its create page like
		//http://example.com/public/
		//OR
		////http://example.com/		
		echo "hay i am home";
	}	
	public function about(){
		//its create page like
		//http://example.com/public/home/about
		//OR
		////http://example.com/home/about
		echo "hay i am about";
	}	
	public function dynamic(){
		//its create page like
		//http://example.com/public/home/dynamic
		//OR
		////http://example.com/home/dynamic
		// view(file,params);
		$this->view("home");
	}
}	
