<?php 
include '../../output.php';

do_html_header('Edit Links Category');
?>





<?php
if(isset($_POST['edit']))
{
$cat_id=$_POST['cat_id'];
$cat_name=$_POST['cat_name'];
$description=$_POST['description'];
$maincategory_name=$_POST['maincategory_name'];

$qry=mysql_query("UPDATE subcategory SET cat_id='$cat_id', cat_name='$cat_name', description='$description', maincategory_name='$maincategory_name' WHERE cat_id='$cat_id' ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?>
<p><img src="<?php echo ADM_URL ?>images/sucess.png" width="40" height="25" />Category <?php echo "<b>".$cat_name."</b>"; ?> updated Successfully</p>
<br />
<?php
}
}
?>





<h2>Edit Links Category</h2>
<hr width="80%" height="" color="#0F0F0F">

<div id="work_area">
<?php
if(isset($_GET['cat_id']))
{
$cat_id=$_GET['cat_id'];
$qry=mysql_query("SELECT * FROM subcategory WHERE cat_id='$cat_id' ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
/* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);
}
?>

<form method="post" enctype="multipart/form-data" name="form1" id="form1">
<table align="center" width="400px" border="0" cellpadding="5" cellspacing="1">
<input type="hidden" name="cat_id" id="cat_idd" value="<?php echo $row['cat_id']; ?>" />
<tr>
<td width="200" align="right">Links Category Name: </td>
<td align="left"><label for="cat"></label>
<input type="text" name="cat_name" id="cat_name" value="<?php echo $row['cat_name']; ?>" /></td>
</td>
</tr>
<tr>
<td width="200" align="right">Description: </td>
<td align="left"><label for="tit"></label>
<input type="text" name="description" id="description" value="<?php echo $row['description']; ?>" /></td>
</tr>
<tr>
<td>Select MainCategory :</td>
<td align="left">
<select name="maincategory_name" id="maincategory_name">
<?php
$qry=mysql_query("SELECT * FROM maincategory", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
while($row=mysql_fetch_array($qry))
{
echo "<option value='".$row['cat_name']."'>".$row['cat_name']."</option>";
}
?>
</select>
</td>
<tr>
<td>&nbsp;</td> 
<td colspan="2" align="left"><input type="submit" name="edit" id="edit" value="Update" /></td>
</tr>
</form>





<br />
<p align="center" style="color: #FFFFFF;"><?php echo '<a href="javascript:history.go(-1)"><< Back</a>'; ?> </p>
</div>





<?php
do_html_footer();
?>