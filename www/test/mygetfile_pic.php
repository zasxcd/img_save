<?php session_start(); ?>
<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="simple.css" rel="stylesheet" type="text/css">
<title>圖片檔案上傳</title>
</head>
<BODY>
<div id="lg">
<div id="lgtitle">
圖檔存入相關資訊
</div>
<?php
include("mysql_connect.inc.php");
$na=$_POST['na'];
$id = $_POST['id'];
$s = $_POST['s'];
$su = $_POST['su'];
if($_SESSION['id'] != null && $na != null && $s != null && $su != null)
{

      echo "<BLOCKQUOTE>";
	  echo"物種名稱:" . $na . "<BR>";
	  echo"物種學名:" . $s . "<BR>";
	  echo"物種俗名:" . $su . "<BR>";
      echo "檔案名稱：" . $_FILES["upfile"]["name"] . "<BR>";
      echo "檔案大小：" . $_FILES["upfile"]["size"] . "<BR>";
      echo "檔案類型：" . $_FILES["upfile"]["type"] . "<BR>";
      echo "暫存檔名：" . $_FILES["upfile"]["tmp_name"] . "<BR>";
      if ( $_FILES["upfile"]["size"] > 0 ) 
        {
         //開啟圖片檔
         $file = fopen($_FILES["upfile"]["tmp_name"], "rb");
         // 讀入圖片檔資料
         $fileContents = fread($file, filesize($_FILES["upfile"]["tmp_name"])); 
         //關閉圖片檔
         fclose($file);

         // 圖片檔案資料編碼
         $fileContents = base64_encode($fileContents);

         //連結MySQL Server
         $dbnum=mysql_connect("localhost","root","");
         //選取資料庫
         mysql_select_db("third");
         //組合查詢字串
         $SQLSTR="Insert into upload (id,ud_name,ud_sci,ud_in,ud_tp,ud_img,ud_su) values('$id','$na','$s','"
                  . $_FILES["upfile"]["name"] . "','"
                  . $_FILES["upfile"]["type"] . "','"
                  . $fileContents . "','$su')";
         //將圖片檔案資料寫入資料庫
		 
         if(!mysql_query($SQLSTR)==0)
           {
            echo "您所上傳的檔案已儲存進入資料庫<a href=\"showpic.php?filename="
                 . $_FILES["upfile"]["name"] . "\">"
                 . $_FILES["upfile"]["name"] . "</a><br>";
			echo '<div id="reg">';
			echo '<a href="member.php">回會員頁</a>';
			echo '</div>';
           }
         else
           {
            echo "您所上傳的檔案無法儲存進入資料庫";
           } 
        }
      else
        {
         echo "圖片上傳失敗";
        }
	
      echo "</BLOCKQUOTE>";
}
elseif(empty($na)){// 
echo " 您的物種名稱未填寫! "; 
echo '<meta http-equiv=REFRESH CONTENT=2;url=img.php>';	
}
elseif(empty($s)){// 
echo " 您的物種學名未填寫! "; 
echo '<meta http-equiv=REFRESH CONTENT=2;url=img.php>';	
}
elseif(empty($su)){// 
echo " 您的物種俗名未填寫! "; 
echo '<meta http-equiv=REFRESH CONTENT=2;url=img.php>';	
}
?>

</div></BODY></HTML>