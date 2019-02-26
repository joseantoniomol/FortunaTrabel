<?php

define('EMAIL_FOR_REPORTS', 'fortunatravel.net@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://fortunatravel.net/Consultas.php');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-yellow.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-yellow.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-metro-yellow" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Consultas</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title">Nombre<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title">Teléfono</label><input class="large" type="text" name="input1" /></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title">Correo<span class="required">*</span></label><input class="large" type="text" name="input2" required="required"/></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title">Interés</label><div class="large"><span><select name="select" >

		<option value=". . . .">. . . .</option>
		<option value="Hoteles playa o montaña">Hoteles playa o montaña</option>
		<option value="Visas Americana o Canadiense">Visas Americana o Canadiense</option>
		<option value="Tours Nacionales e Internacionales">Tours Nacionales e Internacionales</option>
		<option value="Siguiendo a la Sele">Siguiendo a la Sele</option>
		<option value="Seguros de Viajes">Seguros de Viajes</option>
		<option value="Promociones">Promociones</option>
		<option value="Rusia 2018">Rusia 2018</option>
		<option value="Paquetes">Paquetes</option></select><i></i></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title">Comentarios</label><textarea class="medium" name="textarea" cols="20" rows="5" ></textarea></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-metro-yellow.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>