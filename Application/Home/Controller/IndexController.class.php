<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

   public function index(){
    $sumLoves=D('Shop')->sumLoves();
    $this->assign('sumLoves',$sumLoves);
   
    $timeShops=D('Shop')->timeShops();
    $this->assign('timeShops',$timeShops);

	   $this->display('index');
   }
   public function top(){
    $topLoves=D('Shop')->topLoves();
    $this->assign('topLoves',$topLoves);
    $this->display('top');
   }


    public function classify(){
      $category=D('Shop')->showCategory();
      $this->assign('category',$category);
      

    $count=D('Shop')->sumCategory($_GET['category_id']);
    $page=new \Org\Util\Page($count,1);
    $where['category_id']=$_GET['category_id'];
    $list=M('shop')->where($where)->order('shop_id desc')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('list',$list);
    $this->assign('classifyPage',$page->show());
    $shop=D('Shop')->category($_GET['category_id']);
      $this->assign('shop',$shop);
    $this->display('classify');
   }

   public function page1(){
      $category=D('Shop')->showCategory();
      $this->assign('category',$category);

      $where['category_id']=$_GET['category_id'];
      $where['state']=0;
      $count=M('shop')->where($where)->count();
      $page=new \Org\Util\Page($count,12);
      $list=M('shop')->where($where)->order('shop_id desc')->limit($page->firstRow.','.$page->listRows)->select();
      $this->assign('shop',$list);
      $this->assign('classifyPage',$page->show());

      $this->display('classify');

    }
        public function page2(){
          $where['category_id']=$_GET['category_id'];
      $where['state']=0;
    $count=M('shop')->where($where)->count();
    $page=new \Org\Util\Page($count,12);
    $list=M('shop')->where($where)->order('shop_id desc')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('list',$list);
    $this->assign('page',$page->show());

     $category=D('Shop')->showCategory();
      $this->assign('category',$category);
    $this->display('test');

    }

   public function email(){
    $this->display('email');
   }
    public function gallery(){
    $this->display('gallery');
   }

   public function search(){
    $search=D('Shop')->search($_GET['search']);
    $where['state']=0;
    $count=M('shop')->where($where)->count();
    $page=new \Org\Util\Page($count,5);
    $list=M('shop')->where($where)->order('shop_id desc')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('list',$list);
    $this->assign('page',$page->show());

    $this->assign('shop',$search);
    $this->display('search');
   }

   public function sumLoves(){
    $sumLoves=D('Shop')->sumLoves();
    $this->assign('sumLoves',$sumLoves);
    $this->display('index');

   }



    //登陆，注册，退出，注销
    public function register(){ 
    $user = D ( 'User' );
    if (! $user->create ()) {
     dump ( $user->getError () );
      }else {
          $login=D('Login')->register($_POST['user_name'],$_POST['email'],md5($_POST['password']));
          if($login){
            $this->success( '注册成功，请登录' );
           }else{
            $this->error('注册失败');
           }
        }
    }


    public function checkEmail() {
    $user = D ( 'user' );
    if (! $user->create ()) {
     echo '该邮箱已被注册！或邮箱不合法';
    } else {
      echo 0;
    }
  }




     public function register1() {
        $rules = array(
          array('username','require','用户名不能为空!'),
          array('username','','用户名已经存在',0,'unique',1), 
              
          array('email','require','邮箱不能为空!'),
          array('email','email','邮箱格式不正确!'),
          array('email','','该邮箱已经注册过！',0,'unique',1),
        );
       $user = M( 'user' );
      if (! $user->create ()) {
        dump ( $user->getError () );
      }else {
          $login=D('Login')->register($_POST['Typehere'],md5($_POST['Password']),$_POST['email']);
          if($login){
            $this->redirect ( 'Index/index' );
           }else{
            $this->error('注册失败');
           }
        }
    }
    //ajax


   public function logins(){
      $logins=D('Login')->login($_POST['username'],md5($_POST['password']));
      if($logins){
        $this->success('登录成功');
       }else{
         $this->error('登录失败');
      
       }
  }
  public function log_out(){
    $log_out=D('Login')->log_out();
   if($log_out){
        $this->success('退出成功');
       }else{
         $this->error('退出失败');
      
       }
  }
    public function log_off(){
    $log_off=D('Login')->log_off();
   if($logins){
        $this->success('注销成功');
       }else{
         $this->error('注销失败');
      
       }
  }



   public function details(){
   	$shop=D('Shop')->shop($_GET['shop_id']);
    $comment=D('Shop')->show_comment($_GET['shop_id']);
    $this->assign('comment',$comment);

   	$this->assign('shop',$shop);
   	$this->display('details');

  }




  // public function classify(){
  //   // $classify=D('Shop')->category($_GET['category_id']);
  //   // $this->assign('classify',$classify);
  //   $this->display('classify');
  // }
   
    public function user(){
  	$user=M('user');
  	$date=$user->select();
  	dump($date);
  }
 public function area()
    {
        if (IS_POST) {
            dump($_POST);
        } else {
          $where['state']=0;
            $where['provice_id'] = 1;
            $region = M('provice')->where($where)->select();
            $this->assign('region',$region);
               $this->display('top');
        }
    }
   // public function area(){
   //   $area=D('Recomment')->show_area();

   // }
   public function love(){
     $love=D('User')->loves();
   }
   //错误跳转
   //ajax返回
   //输入变量
   public function upload(){
     $this->display('face');

 }
  public function uping(){
      $face=D('User')->upload();
  }


  //展示地区
  public function show_area(){
    D('Recomment')->show_area();
  }


    public function page(){
      $where['state']=0;
    $count=M('shop')->where($where)->count();
    $page=new \Org\Util\Page($count,1);
    $list=M('shop')->where($where)->order('shop_id desc')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('list',$list);
    $this->assign('page',$page->show());
    $this->display('search');

    }

    public function classifyPage(){
      $where['state']=0;
    $count=D('Shop')->sumCategory($_GET['category_id']);
    $page=new \Org\Util\Page($count,1);
    $where['category_id']=$_GET['category_id'];
    $list=M('shop')->where($where)->order('shop_id desc')->limit($page->firstRow.','.$page->listRows)->select();
    $this->assign('list',$list);
    $this->assign('classifyPage',$page->show());
    $this->display('classify');

    }

    public function mail(){
      // $name=I('post.name');
      // $address=I('post.address');
      // $phone=I('post.phone',0,'intval');
       
      // // 拼接字符串方式
      // $str='姓名：'.$name.'<br>'.'地址：'.$address.'<br>'.'手机号：'.$phone.'<br>';
       
      // // 或者更直观的使用定界符：
      // $str=<<<html
      // 姓名：$name <br>
      // 地址：$address <br>
      // 手机号：$phone
      // html;
       
      // // 发送邮件
      // send_email('baijunyao@baijunyao.com','邮件标题',$str);
      // 发送单条邮件
      send_email('1978815340@qq.com','MIFOOD','陈叔叔，近来可好？哈哈哈');
 
    // 如果群发邮件 则传入数组即可
    // $emails=array('b1@baijunyao.com','b2@baijunyao.com');
    // send_email($emails,'邮件标题','邮件内容');
    }

    public function picture(){
      $picture=D('Proxy')->one('http://p1.meituan.net/merchantpic/1d98ddf240dd1a08fac58f69896662b8940404.jpg');
    }
    public function ip(){
      $ip=D('Test')->setHeader();
    }




















    
}