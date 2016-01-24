<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

/**
 * @class  boardModel
 * @author NAVER (developers@xpressengine.com)
 * @brief  board module  Model class
 **/
class myboardModel extends myboard
{

	

	/**
	 * @brief return module name in sitemap
	 **/
	public function triggerModuleListInSitemap(&$obj)
	{
		array_push($obj, 'myboard');
	}
}
