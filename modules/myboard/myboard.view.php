<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

/**
 * @class  boardView
 * @author NAVER (developers@xpressengine.com)
 * @brief  board module View class
 **/
class myboardView extends myboard
{

	/**
	 * @brief initialization
	 * board module can be used in either normal mode or admin mode.\n
	 **/
	function init()
	{
		$oModuleModel = getModel('module');
		$config = $oModuleModel -> getModulePartConfig('myboard', $this -> module_info ->module_srl);
		Context::set('config',$config);

		$templatePath = sprintf('%sskins/%s/',$this ->module_path,$this->module_info->skin);
		$this->setTemplatePath($tempaltePath);

		$templateFile = str_replace('dispMyboard','',$this->act);
		$this->setTemplateFile($templateFile);
	}

	/**
	 * @brief display board write
	 **/

	function dispMyboardWrite()
	{
		/*if(!$this ->grant->write_document)
		{
			return new Object(-1,'msg_not_permitted');
		}
		$oDocumentModel = getModel('document');
    debugPrint("1");
		debugPrint($this->module_info->use_category);
		/**
		 * check if the category option is enabled not not

		if($this->module_info->use_category=='Y')
		{
			// get the user group information
			if(Context::get('is_logged'))
			{
				$logged_info = Context::get('logged_info');
				$group_srls = array_keys($logged_info->group_list);
			}
			else
			{
				$group_srls = array();
			}
			$group_srls_count = count($group_srls);

			// check the grant after obtained the category list
			$normal_category_list = $oDocumentModel->getCategoryList($this->module_srl);
			if(count($normal_category_list))
			{
				foreach($normal_category_list as $category_srl => $category)
				{
					$is_granted = TRUE;
					if($category->group_srls)
					{
						$category_group_srls = explode(',',$category->group_srls);
						$is_granted = FALSE;
						if(count(array_intersect($group_srls, $category_group_srls))) $is_granted = TRUE;

					}
					if($is_granted) $category_list[$category_srl] = $category;
				}
			}
			Context::set('category_list', $category_list);
		}

		// GET parameter document_srl from request

		$document_srl = Context::get('document_srl');
		$oDocument = $oDocumentModel->getDocument(0, $this->grant->manager);
		$oDocument->setDocument($document_srl);
    if($oDocument->get('module_srl') == $oDocument->get('member_srl')) $savedDoc = TRUE;
		$oDocument->add('module_srl', $this->module_srl);
		debugPrint($document_srl);
		if($oDocument->isExists() && $this->module_info->protect_content=="Y" && $oDocument->get('comment_count')>0 && $this->grant->manager==false)
		{
			return new Object(-1, 'msg_protect_content');
		}

		// if the document is not granted, then back to the password input form
		$oModuleModel = getModel('module');
		if($oDocument->isExists()&&!$oDocument->isGranted())
		{
			return $this->setTemplateFile('input_password_form');
		}

		if(!$oDocument->isExists())
		{ debugPrint("oDocumentisnot exist");
			$point_config = $oModuleModel->getModulePartConfig('point',$this->module_srl);
			$logged_info = Context::get('logged_info');
			$oPointModel = getModel('point');
			$pointForInsert = $point_config["insert_document"];
			if($pointForInsert < 0)
			{
				if( !$logged_info )
				{
					return $this->dispBoardMessage('msg_not_permitted');
				}
				else if (($oPointModel->getPoint($logged_info->member_srl) + $pointForInsert )< 0 )
				{
					return $this->dispBoardMessage('msg_not_enough_point');
				}
			}
		}
		if(!$oDocument->get('status')) $oDocument->add('status', $oDocumentModel->getDefaultStatus());
		//error_log($oDocument->get('contents'),0);

		$statusList = $this->_getStatusNameList($oDocumentModel);
		if(count($statusList) > 0) Context::set('status_list', $statusList);
		// get Document status config value
		Context::set('document_srl',$document_srl);
		Context::set('oDocument', $oDocument);

		// apply xml_js_filter on header
		$oDocumentController = getController('document');
		$oDocumentController->addXmlJsFilter($this->module_info->module_srl);

		// if the document exists, then setup extra variabels on context
		if($oDocument->isExists() && !$savedDoc) Context::set('extra_keys', $oDocument->getExtraVars());

		/**
		 * add JS filters
		 *
		if(Context::get('logged_info')->is_admin=='Y') Context::addJsFilter($this->module_path.'tpl/filter', 'insert_admin.xml');
		else Context::addJsFilter($this->module_path.'tpl/filter', 'insert.xml');

		$oSecurity = new Security();
		$oSecurity->encodeHTML('category_list.text', 'category_list.title');
		debugPrint("100");
		$this->setTemplateFile('write2');
		*/
		// 권한 체크
		if (!$this->grant->write_document)
		{
			return new Object(-1, 'msg_not_permitted');
		}

		// 빈 document item 객체 받기
		$oDocumentModel = getModel('document');
		$oDocument = $oDocumentModel->getDocument(0);
		$oDocument->add('module_srl', $this->module_srl);

		Context::set('oDocument', $oDocument);
		//$this->setTemplateFile('write1');
	}

	function _getStatusNameList(&$oDocumentModel)
	{
		$resultList = array();
		if(!empty($this->module_info->use_status))
		{
			$statusNameList = $oDocumentModel->getStatusNameList();
			$statusList = explode('|@|', $this->module_info->use_status);

			if(is_array($statusList))
			{
				foreach($statusList as $key => $value)
				{
					$resultList[$value] = $statusNameList[$value];
				}
			}
		}
		return $resultList;
	}

	public function dispMyboardContent()
	{
		$documentSrl = Context::get('document_srl');

		// document_srl이 있으면 글 보기
		if ($documentSrl)
		{
			return $this->viewDocument();
		}

		// 없으면 목록 보기
		else
		{
			return $this->viewList();
		}
	}
	private function viewDocument()
	{
		$documentSrl = Context::get('document_srl');
		$oDocumentModel = getModel('document');

		// 권한 체크
		if (!$this->grant->view)
		{
			return new Object(-1, 'msg_not_permitted');
		}

		// document 얻기
		$oDocument = $oDocumentModel->getDocument($documentSrl);

		// 존재하는지 확인
		if (!$oDocument->isExists())
		{
			return new Object(-1, 'msg_not_founded');
		}

		// 모듈 관리자이면 권한 세팅
		if ($this->grant->manager)
		{
			$oDocument->setGrant();
		}

		// 조회수 증가
		$oDocument->updateReadedCount();

		// 브라우저 제목에 글 제목 추가
		Context::addBrowserTitle($oDocument->getTitleText());

		// 템플릿 변수 세팅
		Context::set('oDocument', $oDocument);

		// 글 보기, 목록 보기 모두 act가 동일하기 때문에 템플릿 파일을 직접 지정
		$this->setTemplateFile('View');
	}
	private function viewList()
	{
		$page = Context::get('page');
		$oDocumentModel = getModel('document');

		// 권한 체크
		if (!$this->grant->list)
		{
			return new Object(-1, 'msg_not_permitted');
		}

		// 목록 얻을 파라미터 세팅
		$args = new stdClass();
		$args->module_srl = $this->module_info->module_srl;
		$args->page = $page;
		$args->list_count = 10;
		$args->page_count = 10;
		$args->sort_index = 'list_order';
		$args->order_type = 'asc';

		// 목록 가져오기
		$output = $oDocumentModel->getDocumentList($args);

		// 템플릿 변수 세팅
		Context::set('document_list', $output->data);
		Context::set('total_count', $output->total_count);
		Context::set('total_page', $output->total_page);
		Context::set('page', $output->page);
		Context::set('page_navigation', $output->page_navigation);

		// 글 보기, 목록 보기 모두 act가 동일하기 때문에 템플릿 파일을 직접 지정
		$this->setTemplateFile('List');

	}
}
