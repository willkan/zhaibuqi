<?php
$array =explode(',',base64_decode( $_GET['p']));
$email  =  ($array[0]);
$domain_name= $array[1];

$mail="";
switch($domain_name){
    case 163: $mail="http://mail.163.com/";
    break;
    case sina:$mail="http://mail.sina.com.cn/";
break;
    case yahoo:$mail = "http://mail.cn.yahoo.com/";
    break;
    case sohu:$mail = "http://mail.sohu.com/";
    break;
    case 139:$mail = "http://mail.10086.cn/";
    break;
    case 21+cn:$mail = "http://mail.21cn.com/";
    break;
    case qq:$mail = "https://mail.qq.com/";
    break;
    case hotmail:$mail = "https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=11&ct=1364028054&rver=6.1.6206.0&wp=MBI&wreply=http:%2F%2Fmail.live.com%2Fdefault.aspx&lc=2052&id=64855&mkt=zh-cn&cbcxt=mai&snsc=1";
    break;
    case gmail:$mail = "https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2";
    break;
    case yeah:$mail = "http://www.yeah.net/";
    break;
    Default:
        $mail = "您的";
}




?>
<!DOCTYPE html>
<html>
<head>
    <title>宅不起 | 发送成功</title>
    <link type="text/css" rel="stylesheet" href="css/top-nav.css"/>
    <link type="text/css" rel="stylesheet" href="css/footer.css"/>
    <link type="text/css" rel="stylesheet" href="css/sent-confirm.css"/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php require_once("top-nav.php"); ?>
<div id="container">
    <div id="container-clear-fix">
        <div class="tips">
            <h2>账号注册已成功</h2>
            <p>确认信已经发到你的邮箱<?php echo $email; ?>，你需要点击邮件中的确认链接来完成注册。</p>
            <a href="<?php echo $mail ?>" name="email_domain_name" >登录<?php echo $domain_name ?>邮箱查收确认信</a>  <br/><br/>
            <p>没有收到确认信怎么办？······

                检查一下上面Email地址是否正确，错了就<a href="register.php" >重新注册</a>一次吧。
                看看是否在邮箱的垃圾箱里
                稍等几分钟，若仍旧没收到确认信，让宅不起<a href="php/register_send_email.php">重发一封</a>
            </p>
            <br /><br />
            <a id="back" href="index.php" >返回首页</a>
        </div>
    </div>
</div>
<?php require_once("footer.php"); ?>
</body>
</html>