<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="simple.css" rel="stylesheet" type="text/css">
<?php
if($_COOKIE["user"] != null)
{
echo '<meta http-equiv=REFRESH CONTENT=0;url=member.php>';

}
else
{
echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
}

?>