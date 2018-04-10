<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="simple.css" rel="stylesheet" type="text/css">
<HTML>
<head>
<title>圖片檔案上傳</title>
<script language="JavaScript">
function ShowTime(){
　document.getElementById('showbox').innerHTML = new Date();
　setTimeout('ShowTime()',1000);
}
</script>

</head>
<BODY>
<div id="lg">
<div id="lgtitle">
圖片檔案上傳
</div>

<Form Action="mygetfile_pic.php" Method="POST" 
Enctype="multipart/form-data">
<?php
include("mysql_connect.inc.php");

if($_SESSION['id'] != null)
{
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM member where id='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);       
        echo "帳號：<input type=\"hidden\" name=\"id\" value=\"$row[2]\" />$row[2] <br>";
		echo "物種名稱：<input type=\"text\" name=\"na\" /> <br>";
        echo "物種學名：<input type=\"text\" name=\"s\"  /> <br>";
        echo "物種俗名：<input type=\"text\" name=\"su\" /> <br>";
}
?>
<body onload="ShowTime()">
<div id="showbox"></div>
</body>
<div id="button">
<Input Type="File" Name="upfile" ><br>
<Input Type="Submit" value=" 開始上傳 ">
</div>
<div id="reg">
<a href="member.php">回上頁</a>
</div>
</div>
</Form>

</BODY></HTML>