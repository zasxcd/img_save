<?php session_start(); ?>
<link href="simple.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="lg">
<?php
setcookie("user", "", time()-3600);
echo '<div id="lgtitle">';
echo '登出中......';
echo '</div>';
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
?>
</div>