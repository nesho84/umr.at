<?php 
session_start();
if(isset($_SESSION['name']))
{
if (!$_SESSION['name'])
{
echo '<p style=font-size:x-small align=center><img src=images/stop.png /><br />You are not authorised to access this page unless you are administrator of this website<br /><br /><a href=login.php>Try Again...</a></p>';
}
}
else
{
header ('Location: http://localhost/admin/login.php');
}
?>