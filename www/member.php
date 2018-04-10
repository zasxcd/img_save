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

if($_COOKIE["user"] != null)
{
       
        

		$sql1 = "SELECT * FROM upload";
		

		$result1 = mysql_query($sql1);
		
		echo '<div id="b">';
		echo '你已上傳的圖片<br><br>';
		while($row1 = mysql_fetch_row($result1) )
		
        {if ($row1[1]==$_COOKIE["user"]){
            echo "<table border=" . "1" . ">";
			echo "<a target=\"_blank"."\" href=\"showpic.php?filename=". $row1[4] . "\">". $row1[4] . "</a><br>";
			echo "</tr>";}
				 
		}
		
		echo '</div>';
		echo'<br>';
		echo '<div id="c">';
		 echo '<a href="img.php">圖片上傳</a>    ';
        echo '<a href="update.php">會員修改</a>    ';
        echo '<a href="delete.php">圖片刪除</a>  <br><br>';
		echo '</div>';
		echo '<div id="reg">';
		echo '<a href="HP1.html">回首頁</a>';
		echo '</div>';
    
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=3;url=index.php>';
}
?>
</div>