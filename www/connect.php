
<link href="simple.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id='lg'>
<div id='lgtitle'>
<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
$refer = $_POST['refer'];

$sql = "SELECT * FROM member where id = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);


if($id != null && $pw != null && $row[2] == $id && $row[3] == $pw)
{
        
        setcookie("user",$id,time()+3600);
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
		
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
</div>
</div>