<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="simple.css" rel="stylesheet" type="text/css">
<div id="lg">
<div id="lgtitle">
<?php
include("mysql_connect.inc.php");
$na=$_POST['na'];
$id = $_POST['id'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];
$email = $_POST['email'];

if($_SESSION['id'] != null && $pwd != null && $pwd2 != null && $pwd == $pwd2)
{
        $id = $_SESSION['id'];
    
        $sql = "update member set pwd=$pwd,na = $na  ,Email=$email where id='$id'";
        if(mysql_query($sql))
        {
                echo '修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
        else
        {
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
</div>
</div>