<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="simple.css" rel="stylesheet" type="text/css">
<div id="lg">
<div id="lgtitle">
會員刪除
</div>
<?php
if($_SESSION['id'] != null)
{
        echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\">";
        echo "要刪除的帳號：<input type=\"text\" name=\"id\" /> <br>";
		echo '<div id="button">';
        echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
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
?></div>