<?php //function for all pages that are loaded in main content
$p = (isset($_GET['p']));

if ( $p == 'buroreinigung' ) {

include ('../template.php');

topheader('Buroreinigung');
do_header();
leftpart('Buroreinigung', 'Leistungen');
?>

<div id="main" class="boxed">

			<div class="title"><h2>B�roreinigung</h2></div>
			
	<div class="content">
	
		<div id="welcome">
<h1>B�roreinigung</h1>
<div id="dotted">&nbsp;</div>

<p align="center"><img src="<?php echo SITE_URL ?>leistungen/images/buroreinigung.jpg" width="440" height="179" alt=""></p>				

<p align="justify">
B�roreinigung ist Vertrauenssache. Wo Menschen zusammenkommen ist Sauberkeit eine unabdingliche Voraussetzung f�r eine angenehme, leistungsf�rdernde Atmosph�re. Sauberkeit garantiert Wohlbefinden, Sicherheit und Werterhalt.
</p>		
		</div>
	
			<?php 
				display_form('Fragen Sie uns unverbindlich an bez�glich B�roreinigung �ber dieses Formular.');
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