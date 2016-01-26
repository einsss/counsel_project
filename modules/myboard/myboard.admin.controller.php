<?php
class MyboardAdminController extends myboard
{
	public function procMyboardAdminUpdateSimpleSetup()
	{
		$moduleSrl = Context::get('module_srl');

		$oModuleModel = getModel('module');
		$moduleInfo = $oModuleModel->getModuleInfoByModuleSrl($moduleSrl);

		if (!$moduleInfo || $moduleInfo->module != 'myboard')
		{
			return new Object(-1, 'invalid_request');
		}

		$args = new stdClass();
		$args->title = Context::get('title');

		$oModuleController = getController('module');
		$oModuleController->insertModulePartConfig('myboard', $moduleSrl, $args);
	}
}
/* End of file: myboard.admin.controller.php */
