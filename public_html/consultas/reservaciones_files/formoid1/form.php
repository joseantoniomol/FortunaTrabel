<?php

define('EMAIL_FOR_REPORTS', 'fortunatravel.net@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://fortunatravel.net/Consultas/');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', '¡Consulta enviada!! Pronto te contestaremos. ');
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
<form class="formoid-metro-yellow" style="background-color:#FFFFFF;font-size:11px;font-family:Verdana,Geneva,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Consultas</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Nombre"><label class="title">Nombre</label><input class="large" type="text" name="input" /></div>
	<div class="element-phone<?php frmd_add_class("phone"); ?>" title="Teléfono"><label class="title">Teléfono</label><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone"  value=""/></div>
	<div class="element-email<?php frmd_add_class("email1"); ?>"><label class="title">Email</label><input class="large" type="email" name="email1" value="" /></div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Interés"><label class="title">Interés</label><div class="large"><span><select name="select" >

		<option value=" . . . ."> . . . .</option>
		<option value="Hoteles playa o monta�a">Hoteles playa o monta&ntilde;a</option>
		<option value="Visas Americana o Canadiense">Visas Americana o Canadiense</option>
		<option value="Tours Nacionales e Internacionales">Tours Nacionales e Internacionales</option>
                <option value="Siguiendo a la Sele">Siguiendo a la Sele</option>
                <option value="Seguros de Viajes">Seguros de Viajes</option>
                <option value="Promociones">Promociones</option>
                <option value="Rusia 2018">Rusia 2018</option>
                <option value="Paquetes">Paquetes</option>

</select><i></i></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>" title="Comentarios"><label class="title">Comentarios</label><textarea class="medium" name="textarea" cols="20" rows="5" ></textarea></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-metro-yellow.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>