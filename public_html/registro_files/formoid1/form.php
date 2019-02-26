<?php

define('EMAIL_FOR_REPORTS', 'fortunatravel.net@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Gracias Por Registrarte');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-orange.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-orange.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-metro-orange" style="background-color:#FFFFFF;font-size:15px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Registro</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title">Nombre<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-email<?php frmd_add_class("email1"); ?>"><label class="title">Correo<span class="required">*</span></label><input class="large" type="email" name="email1" value="" required="required"/></div>
<div class="submit"><input type="submit" value="Registrarme"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-metro-orange.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>