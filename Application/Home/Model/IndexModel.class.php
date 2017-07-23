<?php
namespace Home\Model;
use Think\Model;
class IndexModel extends Model {

	public function search(){
		$where['state']=0;
		$where['shop_name']=array('like','%'.$_POST['search'].'%');
		$search=M('shop')->where($where)->select();
		//调用Shop模型
		
	}



	//搜索
}
?>