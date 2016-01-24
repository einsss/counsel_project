<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

/**
 * @class  boardAdminController
 * @author NAVER (developers@xpressengine.com)
 * @brief  board module admin controller class
 **/

class MyboardAdminController extends myboard {

	/**
	 * @brief initialization
	 **/
	function init() {
		error_log('MyboardAdminController init',0);
	}

	public function procMyboardAdminUpdateSimpleSetup(){
		$moduleSrl = Context::get('module_srl');

		$oModuleModel =getModel('module');
		$moduleInfo =$oModuleModel -> getModuleInfoByModuleSrl($moduleSrl);

		if(!$moduleInfo || $moduleInfo -> module != 'myboard')
		{
			return new Object (-1,'invalid_request');
		}

		$args = new stdClass();
		$args-> title =Context::get('title');

		$oModuleController = getController('module');
		$oModuleController -> insertModulePartConfig('myboard',$moduleSrl,$args);
	}
}
