<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="simple.css" rel="stylesheet" type="text/css">
<div id="lg">
<div id="lgtitle">
會員專區
</div>

<?php
echo '<div id="a">';
include("mysql_connect.inc.php");
echo '<a href="logout.php">登出</a>  <br><br>';
echo '</div>';


if($_SESSION['id'] != null)
{
       
        
        $sql = "SELECT * FROM member";
        $result = mysql_query($sql);
		echo '<div id="b">';
        while($row = mysql_fetch_row($result))
        {if ($row[2]==$_SESSION['id'] )
                 echo "暱稱：$row[1], 信箱：$row[4]<br>";
        }
		echo '</div>';
		echo'<br>';
		echo '<div id="c">';
		 echo '<a href="img.php">圖片上傳</a>    ';
        echo '<a href="update.php">會員修改</a>    ';
        echo '<a href="delete.php">刪除</a>  <br><br>';
		echo '</div>';
		echo '<div id="reg">';
		echo '<a href="homepage.html">回首頁</a>';
		echo '</div>';
    
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=3;url=index.php>';
}
?>
</div>