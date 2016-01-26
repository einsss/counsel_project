<?php
class myboard extends ModuleObject
{
	// 모듈 트리거 목록
	private $triggers = array(
		array(
			'name' => 'menu.getModuleListInSitemap',
			'module' => 'myboard',
			'type' => 'model',
			'func' => 'triggerModuleListInSitemap',
			'position' => 'after'
		),
	);
	// 모듈 설치 시 호출된다.
	// 모듈이 modules 폴더에 있는 상태로 XE 설치 시
	// 쉬운 설치 설치 시
	public function moduleInstall()
	{
		$oModuleController = getController('module');

		// 트리거 추가
		foreach($this->triggers as $trigger)
		{
			$oModuleController->insertTrigger(
				$trigger['name'],
				$trigger['module'],
				$trigger['type'],
				$trigger['func'],
				$trigger['position']
			);
		}

		return new Object();
	}

	// 업데이트 체크를 위해 호출된다.
	// true를 반환하면 업데이트가 필요한 것으로 표시된다.
	public function checkUpdate()
	{
		$oModuleModel = getModel('module');

		// 트리거 확인
		foreach($this->triggers as $trigger)
		{
			$res = $oModuleModel->getTrigger(
				$trigger['name'],
				$trigger['module'],
				$trigger['type'],
				$trigger['func'],
				$trigger['position']
			);

			if (!$res)
			{
				return true;
			}
		}

		return false;
	}

	// 모듈 업데이트 시 호출된다.
	public function moduleUpdate()
	{
		$oModuleModel = getModel('module');
		$oModuleController = getController('module');

		// 트리거 확인 및 추가
		foreach($this->triggers as $trigger)
		{
			$res = $oModuleModel->getTrigger(
				$trigger['name'],
				$trigger['module'],
				$trigger['type'],
				$trigger['func'],
				$trigger['position']
			);

			if (!$res)
			{
				$oModuleController->insertTrigger(
					$trigger['name'],
					$trigger['module'],
					$trigger['type'],
					$trigger['func'],
					$trigger['position']
				);
			}
		}

		return new Object();
	}

	// 쉬운 설치를 통한 모듈 삭제 시 호출된다.
	public function moduleUninstall()
	{
		$oModuleController = getController('module');

		// 트리거 제거
		foreach($this->triggers as $trigger)
		{
			$res = $oModuleModel->deleteTrigger(
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
/* End of file: myboard.class.php */
