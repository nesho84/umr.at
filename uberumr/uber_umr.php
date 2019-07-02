<?php
include ('../template.php');

topheader('Umr');
do_header();
leftpart('','');
?>

<div id="main" class="boxed">
<div class="title"><h2>�ber uns</h2></div>
<div class="content">

<?php
//function for all pages that are loaded in main content
if ( isset($_GET['page']) ) {
   $page = $_GET['page'];
   
   /* 			main 			*/
require(''.$page.'.php');
/* 	in css name=sidebar 	*/
} 
else {
?>	
			<p align="center" style="margin-bottom:-10px;"><img src="<?php echo IMAGE_DIR ?>logo/logo-leer.png" width="170px" height="131px" /></p>
			<div id="welcome">
				<p style="font-size: 11px; text-align: justify;">
				Die Firma UMR wurde 2010 als Einzelunternehmen gegr�ndet. Trotz des wirtschaftlich schwierigen Umfeldes wurden durch die gelebte Kundenpartnerschaft und die angelegten Qualit�tsstandards stetig neue Auftr�ge lukriert. Dies hat dazu gef�hrt, dass das Einzelunternehmen im Jahr 2012 in die UMR GmbH umgewandelt wurde, um dem stetigen Wachstum gerecht zu werden.<br /><br />
Seit diesem Zeitpunkt betreut die UMR GmbH ihre Kunden mit einem schlagkr�ftigen und motivierten Team rund um die Uhr. Um unsere Mission � h�chste Kundenzufriedenheit � zu erf�llen bleiben wir unseren Prinzipien Service, Schnelligkeit, Sauberkeit, aber vor allem Handschlagqualit�t stets treu und sind stolz darauf dass namhafte �sterreichische Unternehmen bei der Reinigung ihrer Objekte auf unsere Erfahrung vertrauen.<br /><br />
				</p>
				<h2>Unsere Mission:</h2><br />
				<p style="font-size: 11px; text-align: justify;">
<strong>Kundenpartnerschaft:</strong><br /> Zuh�ren, Lernen, Umsetzen. Finden ma�geschneiderter L�sungen mit und f�r den Kunden. Durch Individuelle Reinigungsl�sungen schaffen wir einen sp�rbaren Mehrwert. Innerhalb von 48 Stunden k�nnen wir flexibel � je nach Kundenbedarf � pro Auftrag rund 50 Mitarbeiter � speziell ausgew�hlt � Zeit und Ort gerecht ohne laufende Fixkosten f�r den Kunden in Einsatz bringen. <br />Gerne stehen wir Ihnen f�r ein kostenloses und unverbindliches Angebot zu Verf�gung � kontaktieren Sie uns. 
<br /><br /><strong>Mitarbeiterpartnerschaft:</strong>  <br />Der Mensch steht im Mittelpunkt � unsere Mitarbeiter sind unser Kapital. Der ganzheitliche Managementansatz <a href="http://de.wikipedia.org/wiki/Corporate_Social_Responsibility">CSR</a>, der die Verantwortung von Unternehmen gegen�ber der Umwelt und der Gesellschaft � weit �ber den rechtlich vorgeschriebenen Rahmen hinaus � beschreibt, ist unsere Leitlinie. Wir haben uns zum Ziel gesetzt beliebtester Arbeitgeber im Reinigungsbereich zu sein.<br /><br /><br />
				</p>
			</div>
						


<?php
} //END! function for all pages that are loaded in main content
?>
</div><!-- end .content -->
</div><!-- end #main -->
<?php
rightpart();
footer();
?>