<?php //function for all pages that are loaded in main content
$p = (isset($_GET['p']));

if ( $p == 'teppichreinigung' ) {

include ('../template.php');

topheader('Teppichreinigung');
do_header();
leftpart('Teppichreinigung', 'Leistungen');
?>

<div id="main" class="boxed">

			<div class="title"><h2>Teppichreinigung</h2></div>
			
	<div class="content">
	
		<div id="welcome">
		
		<h1>Teppichreinigung</h1>
		
		<div id="dotted">&nbsp;</div>
		
<table width="440" border="0">
  <tr>
    <th align="left" valign="top">
<p>
Textile Bodenbel�ge m�ssen von Zeit zu Zeit gr�ndlich gereinigt werden. Durch eine gezielte Pflege erh�ht sich die Lebensdauer Ihrer Teppiche. Mit unseren Extraktionsger�ten erledigen wir dies fachm�nnisch in:
</p>
<p>
�	Privatwohnungen <br />
�	Treppenh�user <br />
�	B�ros<br />
�	Austellungsr�umen<br />
�	Ladenlokalit�ten  <br />
�	etc.
</p><br />
<p><img src="<?php echo SITE_URL ?>leistungen/images/tepichreinigung2.jpg" width="200" height="179" alt=""></p>				

	</th>
    <td><img src="<?php echo SITE_URL?>leistungen/images/tepichreinigung.jpg" width="200" height="478"></td>
  </tr>
</table>
	    </div>
	
			<?php 
				display_form('Fragen Sie uns unverbindlich an bez�glich Teppichreinigung �ber dieses Formular.');
				?>
				
	</div><!-- end .content -->
	
	</div><!-- end #main -->

<?php
rightpart();
footer();

}
else {
header("Location: http://localhost/UMR/_library/error404.php");
exit;
} //END! function for all pages that are loaded in main content
?>