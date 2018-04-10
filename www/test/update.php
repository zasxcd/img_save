<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="simple.css" rel="stylesheet" type="text/css">
<div id="lg">
<div id="lgtitle">
會員修改
</div>
<?php
include("mysql_connect.inc.php");

if($_SESSION['id'] != null)
{
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM member where id='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
        echo "帳號：<input type=\"hidden\" name=\"id\" value=\"$row[2]\" />$row[2] <br>";
		echo "暱稱：<input type=\"text\" name=\"na\" value=\"$row[1]\" /> <br>";
        echo "密碼：<input type=\"password\" name=\"pwd\" value=\"$row[3]\" /> <br>";
        echo "再一次輸入密碼：<input type=\"password\" name=\"pwd2\" value=\"$row[3]\" /> <br>";
        echo "信箱：<input type=\"text\" name=\"email\" value=\"$row[4]\" /> <br>";
		echo '<div id="button">';
        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
		echo '</div>';
		echo '<div id="reg">';
		echo '<a href="member.php">回上頁</a>';
		echo '</div>';
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
</div>