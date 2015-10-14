<?php
namespace Home\Controller;
use Think\Controller;
//http://web.demo.com:8080/demo/shop/index.php?/Home/User/login
//http://web.demo.com:8080/demo/shop/index.php?s=Home/User/login
class GoodsController extends Controller {
	function showlist() {
		//$user = new UserController();
		//		var_dump($user);
		/*$user=A('User');
		echo $user -> number();*/
		echo R('User/number');
		$this -> display();
	}

	function detail() {

		$this -> display();
	}

}
