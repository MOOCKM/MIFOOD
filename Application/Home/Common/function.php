<?php
//分页
//数据缓存
//Home模块公共函数库
function get_avatar_name(){
	return 'temp';
}
/**
 * 发送邮件
 * @param  string $address 需要发送的邮箱地址 发送给多个地址需要写成数组形式
 * @param  string $subject 标题
 * @param  string $content 内容
 * @return boolean       是否成功
 */
function send_email($address,$subject,$content){
    $email_smtp=C('EMAIL_SMTP');
    $email_username=C('EMAIL_USERNAME');
    $email_password=C('EMAIL_PASSWORD');
    $email_from_name=C('EMAIL_FROM_NAME');
    $email_smtp_secure=C('EMAIL_SMTP_SECURE');
    $email_port=C('EMAIL_PORT');
    if(empty($email_smtp) || empty($email_username) || empty($email_password) || empty($email_from_name)){
        return array("error"=>1,"message"=>'邮箱配置不完整');
    }
    require_once './ThinkPHP/Library/Org/Net/class.phpmailer.php';
    require_once './ThinkPHP/Library/Org/Net/class.smtp.php';
    $phpmailer=new \Phpmailer();
    // 设置PHPMailer使用SMTP服务器发送Email
    $phpmailer->IsSMTP();
    // 设置设置smtp_secure
    $phpmailer->SMTPSecure=$email_smtp_secure;
    // 设置port
    $phpmailer->Port=$email_port;
    // 设置为html格式
    $phpmailer->IsHTML(true);
    $phpmailer->CharSet='UTF-8';// 设置邮件的字符编码'
    $phpmailer->Host=$email_smtp;// 设置SMTP服务器。
    $phpmailer->SMTPAuth=true;// 设置为"需要验证"
    $phpmailer->Username=$email_username;// 设置用户名
    $phpmailer->Password=$email_password;// 设置密码
    $phpmailer->From=$email_username;// 设置邮件头的From字段。
    $phpmailer->FromName=$email_from_name; // 设置发件人名字
    // 添加收件人地址，可以多次使用来添加多个收件人
    if(is_array($address)){
        foreach($address as $addressv){
            $phpmailer->AddAddress($addressv);
        }
    }else{
        $phpmailer->AddAddress($address);
    }
    // 设置邮件标题
    $phpmailer->Subject=$subject;
    // 设置邮件正文
    $phpmailer->Body=$content;
    // 发送邮件。
    if(!$phpmailer->Send()) {
        $phpmailererror=$phpmailer->ErrorInfo;
        return array("error"=>1,"message"=>$phpmailererror);
    }else{
        return array("error"=>0);
    }
}


 function showImg($url){
        $type = getimagesize($url);
        $type = $type['mime'];
        //header("Content-type: " . $type);

        $httpheader = array();
        $ch         = curl_init($url);
        curl_setopt($ch, CURLOPT_REFERER, 'http://meituan.com/');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:106.46.136.91', 'CLIENT-IP:106.46.136.91'));   //设置referer
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
        //curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_exec($ch);
        curl_close($ch);
    }









