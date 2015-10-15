<?php

namespace Model;
use Think\Model;


class UserModel extends Model{
	protected $patchValidate=true;
	
	protected $_validate= array(
	array('username','require','user name can not be empty'),
	array('password','require','password can not be empty'),
	array('password2','require','confirm password can not be empty'),
	array('password2','password','password should be equal',0,confirm),
	);
	
}
