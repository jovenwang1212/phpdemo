<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
   function login(){
   	$this->display();
   }
   
    function register(){
    	$user =D('User');
    	if(!empty($_POST)){
    		$z=$user->create();
			if(!$z){
				// validate fail,
				show_bug($user->getError());
				exit();
			}
			$rst=$user->add();
			if($rst){
				echo "success";
			}else{
				echo "failure";
			}
    	}else{
    		$this->display();
    	}
    	$this->display();
	  	
   }
	function _empty(){
		echo "404";
	}
	function number(){
		return "2,000,000 users.";
	}
}