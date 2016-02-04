<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xedition','_header.html') ?>
<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class="context_message"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment_srl ?>" />
	<h1><?php echo $__Context->lang->msg_input_password ?></h1>
	<input type="password" name="password" title="<?php echo $__Context->lang->password ?>" class="iText" />
	<input type="submit" class="btn" value="<?php echo $__Context->lang->cmd_input ?>" />
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xedition','_footer.html') ?>
