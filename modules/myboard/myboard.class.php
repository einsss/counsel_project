<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

/**
 * @class  myboard
 * @author 
 * @brief  myboard module high class
 **/

class myboard extends ModuleObject
{
	private $triggers = array(
			array(		
					'name' => 'menu.getModuleListInSitemap',
					'module' => 'myboard',
					'type' => 'model',
					'func' => 'triggerModuleListInSitemap',
					'position' => 'after'
			),
	);
	//모듈 설치 시 호출 된다.
	//모듈이 modules 폴더에 있는 상태로 xe설치시
	//쉬운 설치 설치시
	
	public function moduleInstall()
	{
		$oModuleController = getController('module');
		foreach ($this->triggers as $tirgger)
		{
			$oModuleController -> insertTrigger(
				$trigger['name'],
				$trigger['module'],
				$trigger['type'],
				$trigger['func'],
				$trigger['position']
			);
		}
		return new Object();
	}

	//업데이트 체크를 위해 호출된다.
	// true를 반환하면 업데이트가 필요한 것으로 표시된다.
	public function checkUpdate()
	{
		$oModuleModel = getModel('module');
		/*foreach ($this->triggers as $tirgger)
		{
			$res=$oModuleModel->getTrigger(
				$trigger['name'],
				$trigger['module'],
				$trigger['type'],
				$trigger['func'],
				$trigger['position']
			);
			if(!res)
			{
				return true;
			}
		}*/
		if(!$oModuleModel->getTrigger('menu.getModuleListInSitemap', 'myboard', 'model', 'triggerModuleListInSitemap', 'after')) return true;
		
		return false;
	}
	//모듈 업데이트 시 호출 된다.
	public function moduleUpdate()
	{
		$oModuleModel = getModel('module');
		$oModuleController = getController('module');
		/*foreach ($this->triggers as $tirgger)
		{
			$res=$oModuleModel -> getTrigger(
				$trigger['name'],
				$trigger['module'],
				$trigger['type'],
				$trigger['func'],
				$trigger['position']
			);
			if(!$res)
			{
				$oModuleController->insertTrigger(
					$trigger['name'],
					$trigger['module'],
					$trigger['type'],
					$trigger['func'],
					$trigger['position']
				);
			}
		}*/
		if(!$oModuleModel->getTrigger('menu.getModuleListInSitemap', 'myboard', 'model', 'triggerModuleListInSitemap', 'after'))
		{
			$oModuleController->insertTrigger('menu.getModuleListInSitemap', 'myboard', 'model', 'triggerModuleListInSitemap', 'after');
		}
		
		return new Object();
	}
	//쉬운 설치를 통한 모듈 설치 삭제 시 호출 된다. 
	public function moduleUninstall()
	{
		$oModuleController = getController('module');
		foreach ($this->triggers as $tirgger)
		{
			$res=$oModuleController -> deleteTrigger(
				$trigger['name'],
				$trigger['module'],
				$trigger['type'],
				$trigger['func'],
				$trigger['position']
			);
		}
		return new Object();
	}

}
