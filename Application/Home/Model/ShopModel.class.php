<?php
namespace Home\Model;
use Think\Model;
class ShopModel extends Model {

	// public function __construct(){
	// 	$login=D('User');
	// 	$user=$login->get_auth();
	// }
	public function search($shop){
		$where['state']=0;
		$where['shop_name']=array('like','%'.$shop.'%');
		$search=M('shop')->where($where)->select();
		
		return $search;
		//调用Shop模型
		
	}

	//显示商铺信息
	public function shop($id){
		$where['shop_id']=$id;
		$where['state']=0;
		$shop=M('shop')->where($where)->select();
        return $shop;
	}

	//显示菜品信息
	public function food($id){
		$where['shop_id']=$id;
		$where['state']=0;
		$food=M('food')->where($where)->select();
	}

	//显示评论的平均评论水平
	public function ave_commment($id){
		for($times=20170200,$i=0;$times<20170300;$times=$times+15,$i++){
		  	$where['shop_id']=$shop_id;
			$where['time'] = array(array('gt',$times+15),array('lt',$times)) ;
			$where['state']=0;
			$ave_comment[$i]=M('comment')->where($where)->avg('level');
	  }
	  return $ave_comment;

	}

	//显示评论
	public function show_comment($id){
		$where['shop_id']=$id;
		$where['state']=0;
		$comment=M('comment')->where($where)->select();
        $comment_num=M('comment')->where($where)->count();
        return $comment;

        // for($i=0;$i<$comment_num;$i++){
        // 	if(!$comment[$i]['nophoto']){
        // 		$where_1['comment_id']=$comment[$i]['comment_id'];
        // 		$where_1['state']=0;
        // 		$photo[$i]=M('photo')->where($where_1)->select();
        // 	}
        // }
        
        //  $data = array();
        // foreach ($comment as $k=>$v) {
        //     $data[$k] = array_merge($comment[$k], $photo[$k]);
        // }
        // dump($data);


	}

	//判断是否已经收藏
	public function no_love(){
        $where['shop_id']=$_POST['shop_id'];
        $where['user_id']=$_SESSION['user_id'];
        $where['state']=0;
        $no_love=M('love')->where($where)->select();
        if($no_love){
        	return true;
        }else{
        	return false;
        }
	}
	//添加收藏
	public function add_love($shop_id){
		$data['shop_id']=$shop_id;
		$data['user_id']=$_SESSION['user_id'];
		$where['shop_id']=$shop_id;
		M('love')->add($data);
		M('shop')->where($where)->setInc('loves');

	}
	//显示分类
	public function showCategory(){
		$where['state']=0;
		$category=M('category')->where($where)->select();
		return $category;
	}
	//根据分类显示菜品
	public function category($id){
        $where['category_id']=$id;
        $shop=M('shop')->where($where)->limit(12)->select();
        return $shop;
}
//根据分类显示总数
	public function sumCategory($id){
        $where['category_id']=$id;
        $shop=M('shop')->where($where)->limit(12)->count();
        return $shop;
}
//根据收藏数量显示
public function sumLoves(){
	$where['state']=0;
	$shop=M('shop')->where($where)->order('loves desc,level desc')->limit(9)->select();
	return $shop;
}
//根据收藏数量top显示
public function topLoves(){
	$where['state']=0;
	$shop=M('shop')->where($where)->order('level desc')->limit(12)->select();
	return $shop;
}

//日期
public function timeShops(){
	$where['state']=0;
	$shop=M('shop')->where($where)->order('shop_id ,level desc')->limit(4)->select();
	return $shop;
}





} 
?>