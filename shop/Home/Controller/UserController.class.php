<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
   function login(){
   	$this->display();
   }
   
    function register(){
	  	$this->display();
   }
	function _empty(){
		echo "404";
	}
	function number(){
		return "2,000,000 users.";
	}
}