<?php
namespace Home\Model;
use Think\Model;
class LoginModel extends Model {

	private $auth='';
    //    array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
      


	//判断是否已经登陆
	public function no_login(){
         if($_SESSION['name']){
         	return false;
         }else{
         	return true;
         }
	}

    //登陆
	public function login($name,$password){

		$where['user_name']=$name;
		$where['password']=$password;
		$auth=M('user')->where($where)->select();

		if(!empty($auth)){
			$_SESSION['user']=$name;
			$_SESSION['face']=$auth[0]['face'];
            $_SESSION['user_id']=$auth[0]['user_id'];
			return $auth;
		}else{
			return false;
		}
    }    

    //注册
    public function register($name,$email,$password){
        $date['user_name']=$name;
        $date['email']=$email;
        $date['password']= $password;
        $date['face']=$name.'.jpg';
    	$auth=M('user')->add($date);
        if($auth){
            $_SESSION['user']=$name;
            $_SESSION['face']=$auth[0]['face'];
            $_SESSION['user_id']=$auth[0]['user_id'];
            return $auth;
        }else{
            return false;
        }
    }



    //退出
    public function log_out(){
    	$_SESSION['user']='';
		$this->$auth='';
        return ture;

    }

    //注销
    public function log_off(){
    	$where['user_name']=$_SESSION['name'];
    	$date['state']='1';
    	$log_off=M('user')->where($where)->save($date);

    } 

    //返回私有属性
    public function get_auth(){
    	return $this->$auth;
    }


}
?>