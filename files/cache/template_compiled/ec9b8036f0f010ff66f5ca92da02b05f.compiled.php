<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/myboard/skins/default','_head.html') ?>
<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="act" value="procMyboardWrite" />
	<?php if(!$__Context->logged_info){ ?>
		<?php echo $__Context->lang->nick_name ?>: <input type="text" name="nick_name"><br>
	<?php } ?>
	<?php echo $__Context->lang->title ?>: <input type="text" name="title" /><br>
	<textarea name="content" cols="100" rows="20"></textarea><br>
	<button type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
</form>
