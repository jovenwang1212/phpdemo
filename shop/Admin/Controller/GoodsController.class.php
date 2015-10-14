<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
	public function showlist1() {
		$this -> display();

		//$good=new \Model\GoodsModel();
		//$good = D('Goods');
		//$good = D();
		$good = M();
		show_bug($good);
		//show_bug(new \Model\QqModel());
	}

	function showlist() {
		$goods = D('Goods');
		$info = $goods -> select();

		//show_bug($info);
		$this -> assign('info', $info);

		$this -> display();
	}

	public function add1() {
		$goods = D('Goods');
		/*$ar=array(
		 'goods_name'=>'iPhone6s',
		 'goods_price'=>4999,
		 'goods_number'=>53
		 );
		 $rst=$goods->add($ar);*/
		$goods -> goods_name = 'xiaomi';
		$goods -> goods_price = 1800;
		$rst = $goods -> add();
		show_bug($rst);
		$this -> display();
	}

	public function add() {
		$good = D('Goods');
		if (!empty($_POST)) {
			/*$good -> goods_name = $_POST['goods_name'];
			 $good -> goods_price = $_POST['goods_price'];
			 $good -> goods_number = $_POST['goods_number'];
			 $good -> goods_weight = $_POST['goods_weight'];
			 $good -> goods_introduce = $_POST['goods_introduce'];*/

			$good -> create();

			$rst = $good -> add();
			if ($rst > 0) {
				echo "success";
				//$this -> success('add good successful!', U('Goods/showlist'));
			} else {
				echo "failure";
			}
		} else {
			$this -> display();
		}

	}

	public function update() {
		$this -> display();
	}

}
