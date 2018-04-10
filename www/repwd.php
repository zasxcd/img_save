<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
 $con=mysql_connect("localhost","root","");
 mysql_select_db("third");
 mysql_query("set names utf8");
 if($_GET["flag"]==1){
 echo $_GET["flag"];
 $em=$_REQUEST["em"];//電子郵件地址
 $sql="select * from member where Email='$em'";
 $renum=mysql_num_rows(mysql_query($sql,$con)); //記錄個數
 $re=mysql_fetch_row(mysql_query($sql,$con));
 if($re==0){
 echo '無此使用者';
 }else{
 mail($re[4],"查詢密碼","帳號：{$re[2]} 密碼：{$re[3]}");
 echo "信件已寄出";
 echo "<meta http-equiv=REFRESH CONTENT=10;url=index.php>";
 } 
  }
?>