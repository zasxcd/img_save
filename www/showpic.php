<?php
 $dbnum=mysql_connect("localhost","root","");
 //選取資料庫
 mysql_select_db("third");
 //組合查詢字串
 $SQLSTR="select ud_img,ud_tp from upload where ud_in='"
         . $_REQUEST["filename"] . "'";
 //
 $cur=mysql_query($SQLSTR);
 //取出資料
 $data=mysql_fetch_array( $cur );

//設定網頁資料格式
header("Content-Type: $data[1]");
// 輸出圖片資料
echo base64_decode($data[0]);

?>