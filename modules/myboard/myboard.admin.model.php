<?php
class myboardAdminModel extends myboard
{
	public function getMyboardAdminSimpleSetup($moduleSrl, $setupUrl)
	{
		if (!$moduleSrl)
		{
			return;
		}

		$oModuleModel = getModel('module');
		$moduleInfo = $oModuleModel->getModuleInfoByModuleSrl($moduleSrl);
		if (!$moduleInfo)
		{
			return;
		}

		Context::set('module_info', $moduleInfo);

		$config = $oModuleModel->getModulePartConfig('myboard', $moduleSrl);
		Context::set('config', $config);

		$oTemplate = TemplateHandler::getInstance();
		$html = $oTemplate->compile($this->module_path . 'tpl/', 'simple_setup');

		return $html;
	}
}
/* End of file: myboard.admin.model.php */
