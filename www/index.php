<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="simple.css" rel="stylesheet" type="text/css">
<form name="form" method="post" action="connect.php">
<div id="lg">
<div id="lgtitle">
會員登入
</div>
<div id="lgput">
帳號：<input name="id" type="text" /> 

密碼：<input type="password" name="pw" />
<input type="submit" name="button" id="button" value="登入" />
<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
</div>
<div id="reg">
<a href="register.php">申請帳號</a>

<a href="HP.html">回首頁</a>

</div>
<div>
</form>