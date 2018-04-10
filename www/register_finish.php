<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="simple.css" rel="stylesheet" type="text/css">
<div id="lg">
<div id="lgtitle">
<?php
include("mysql_connect.inc.php");

$na = $_POST['na'];
$id = $_POST['id'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];
$email = $_POST['email'];

$sql = "SELECT * FROM member where id = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);


if ($row[2]!=null && $row[2] == $id)
{
	echo '帳號重複';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';	
}
elseif(empty($na)){// 
echo " 您的暱稱未填寫! "; 
echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';	
}
else if(empty($id)){ 
echo " 您的帳號未填寫! "; 
echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';	
}
elseif(empty($pwd)){// 
echo " 您的密碼未填寫! "; 
echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';	
}
elseif(empty($pwd2)){// 
echo " 請再一次輸入密碼 "; 
echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';	
}

elseif(empty($email)){// 
echo " 您的信箱未填寫! "; 
echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';	
}
else if($id != null && $pwd != null && $pwd2 != null && $pwd == $pwd2)
{
        
        $sql = "insert into member (na, id, pwd, Email) values ('$na', '$id', '$pwd',  '$email')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=3;url=index.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=3;url=index.php>';
        }
}

else if($pwd != $pwd2)
{
        echo '密碼不一致!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
</div>
</div>