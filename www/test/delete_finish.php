<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="simple.css" rel="stylesheet" type="text/css">
<div id="lg">
<div id="lgtitle">
<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];

if($_SESSION['id'] != null)
{
        $sql = "delete from member where id='$id'";
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
        else
        {
                echo '刪除失敗!';
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