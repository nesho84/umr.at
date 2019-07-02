<?php //function for all pages that are loaded in main content
$p = (isset($_GET['p']));

if ( $p == 'baureinigung' ) {

include ('../template.php');

topheader('Baureinigung');
do_header();
leftpart('Baureinigung', 'Leistungen');
?>

<div id="main" class="boxed">

			<div class="title"><h2>Baureinigung</h2></div>
			
	<div class="content">
	
	<div id="content_header">
		<h1>
				<?php
$random_text = array("Perfektion in Qualit�t<br />",
                    "Flexibilit�t",
                    "Fairness",
					"Gerechtfertigte Preise",
                    "Schnelligkeit",
					"Verf�gbarkeit",
                    "Termingerecht");
srand(time());
$sizeof = count($random_text);
$random = (rand()%$sizeof);
print("$random_text[$random]");
?>
		</h1>
				</div>
	
		<div id="welcome">
		
		<h1>Baureinigung</h1>
		
		<div id="dotted">&nbsp;</div>
		
<table width="440" border="0">
  <tr>
    <th align="left" valign="top">
	<p><u>Definition</u><br>
Beureinigung ist  die Reinigung nach Fertigstellung von �Neubauten, Umbauten oder Renovierungsarbeiten.</p>
<p><u>Reinigungsaufgaben</u><br>
Fofgende  Reinigungsaufgaben k�nnen bei einer Baufein . bzw. Bauschlissreinigung je nach  Lestungsverzeuchnis zu tragen kommen:

<ul type="disc">
  <li>Fensterreinigung inklusive Stock und Rahmen</li>
  <li>Fassadenreinigung ( Glas , Metall, ..       )</li>
  <li>Deckenreinigung </li>
  <li>Mobiliarreinigung</li>
  <li>Sanit�rreaumreinigung </li>
  <li>Bodenreinigungsarbeiten </li>
  <li>Erstpflegenarbeiten</li>
  <li>etc.</li>
</ul></p>
	</th>
    <td><img src="<?php echo SITE_URL?>leistungen/images/baureinigung.jpg" width="200" height="478"></td>
  </tr>
</table>

	    </div>

<?php 
display_form('Fragen Sie uns unverbindlich an bez�glich Baureinigung �ber dieses Formular.');
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
}
?>