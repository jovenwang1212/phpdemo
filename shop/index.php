<?php 
//include thinkphp core php
header('content-type:text/html;charset=utf8');

function show_bug($msg){
	echo "<pre style='color:red'>";
		var_dump($msg);
		echo "</pre>";
}
define("APP_DEBUG", true);

define("SITE_URL", 'http://web.demo.com:8080/');
define("CSS_URL", '/demo/shop/public/home/css/');
define("IMG_URL", '/demo/shop/public/home/images/');
define("JS_URL", '/demo/shop/public/home/js/');

define("ADMIN_CSS_URL", '/demo/shop/public/admin/css/');
define("ADMIN_IMG_URL", '/demo/shop/public/admin/img/');
define("ADMIN_JS_URL", '/demo/shop/public/admin/js/');

include "../ThinkPHP/ThinkPHP.php";