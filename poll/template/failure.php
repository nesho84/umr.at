<?php

	/*
	 * You may customize this page with your own failure message. 
	 */

?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Rating Failed</title>
<link href="template/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>Ooops...</h1>

<p>Es gab ein Problem beim Speichern Ihrer Stimme.</p>

<p class="errorMessage">
<?php show_error(); ?>
</p>

<p><a href="<?php the_return_to_url(); ?>">zur�ck zur Startseite</a></p>


</body>
</html>