<?php //function for all pages that are loaded in main content
$p = (isset($_GET['p']));

if ( $p == 'umzugsreinigung' ) {

include ('../template.php');

topheader('Umzugsreinigung');
do_header();
leftpart('Umzugsreinigung', 'Leistungen');
?>

<div id="main" class="boxed">

			<div class="title"><h2>Umzugsreinigung</h2></div>
			
	<div class="content">
	
	<div id="welcome">
<h1>Umzugsreinigung</h1>
<div id="dotted">&nbsp;</div>
<p align="justify">
Umzugsreinigung oder totalr�umung?
Bei einem bevorstehenden umzug, bleibt ihnen oft keine zeit ihre alte wohnung noch zu reinigen, da zus�tzliche arbeiten auf sie anfallen. �berlassen sie diese aufwendige umzugsreinigung unserer reinigungsfirma die mit langj�hrigen erfahrung, sauber, professionell und rationell ihre wohnung bis zum abgabetermin f�r sie reinigt.
</p>
 <p align="center"><img src="<?php echo SITE_URL ?>leistungen/images/umzugsreinigung.jpg" width="440" height="179" alt=""></p>				
	</div>
	
			<?php 
			display_form('Fragen Sie uns unverbindlich an bez�glich Umzugsreinigung �ber dieses Formular.');
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