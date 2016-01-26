<?php if(!defined("__XE__"))exit;?><form class="x_form-vertical" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="act" value="procMyboardAdminUpdateSimpleSetup" />
	<div class="x_control-group">
		<label class="x_control-label" for="title"><?php echo $__Context->lang->myboard_title ?></label>
		<div class="x_controls">
			<input type="text" name="title" id="title" class="lang_code" value="<?php echo $__Context->config->title ?>" />
			<p class="x_help-block"><?php echo $__Context->lang->about_myboard_title ?></p>
		</div>
	</div>
</form>
