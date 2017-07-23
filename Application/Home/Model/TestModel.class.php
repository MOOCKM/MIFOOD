<?php 
namespace Home\Model;
use Think\Model;

class TestModel extends Model{
    protected $_validate=array(
        array('user_name','require','用户名不能为空!'),
        array('user_name','','用户名已经存在',0,'unique',1), 
        //array('user_name','/^[a-zA-Z][a-zA-Z0-9_]{1,19}$/','用户名不合法！'), 
            
        array('email','require','邮箱不能为空!'),
        array('email','email','邮箱格式不正确!'),
        array('email','','该邮箱已经注册过！',0,'unique',1),
    );

    
}
?>