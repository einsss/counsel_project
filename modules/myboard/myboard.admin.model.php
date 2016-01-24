<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

/**
 * boardAdminModel class
 * Board the module's admin model class
 *
 * @author NAVER (developers@xpressengine.com)
 * @package /modules/board
 * @version 0.1
 */
class myboardAdminModel extends myboard
{
	/**
	 * Initialization
	 * @return void
	 */
	function init()
	{
	}

	/**
	 * Get the board module admin simple setting page
	 * @return void
	 */
	public function getMyboardAdminSimpleSetup($moduleSrl, $setupUrl)
	{
		if(!$moduleSrl)
		{
			return;
		}
		Context::set('module_srl', $moduleSrl);

		// default module info setting
		$oModuleModel = getModel('module');
		$moduleInfo = $oModuleModel->getModuleInfoByModuleSrl($moduleSrl);
		//$moduleInfo->use_status = explode('|@|', $moduleInfo->use_status);
		if($moduleInfo)
		{
			Context::set('module_info', $moduleInfo);
		}

		$config=$oModuleModel -> getModulePartConfig('myboard',$moduleSrl);
		Context::seet('config',$config);

		$oTemplate = &TemplateHandler::getInstance();
		$html = $oTemplate->compile($this->module_path.'tpl/', 'simple_setup');

		return $html;
	}

}
/* End of file board.admin.model.php */
/* Location: ./modules/board/board.admin.model.php */
