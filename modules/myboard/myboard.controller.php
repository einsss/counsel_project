<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

/**
 * @class  boardController
 * @author NAVER (developers@xpressengine.com)
 * @brief  board module Controller class
 **/

class myboardController extends myboard
{

	/**
	 * @brief initialization
	 **/
	function init()
	{
	}

	/**
	 * @brief insert document
	 **/
	function procMyboardWrite()
	{
		error_log ("writestart",0);
		// check grant
		if($this->module_info->module != "myboard")
		{
			return new Object(-1, "msg_invalid_request");
		}
		if(!$this->grant->write_document)
		{
			return new Object(-1, 'msg_not_permitted');
		}
		$logged_info = Context::get('logged_info');

		// setup variables
		$args=new stdClass();
		$args-> module_srl = $this->module_srl;
		$args-> nick_name = Context::get('nick_name');
		$args-> title = Context::get('title');
		$args-> content = Context::get('content');

		$oDocumentController =getController('document');
		$output = $oDocumentController->insertDocument($args);
		if(!$output -> toBool())
		{
			return $output;
		}
		$returnUrl =getNotEncodedUrl('','mid',$this=>mid,'document_srl',$output->get('document_srl'));
		$this->setRedirectUrl($returnUrl);

	}

	/**
	 * @brief delete the document
	 **/
	function procMyBoardDeleteDocument()
	{
		// get the document_srl
		$document_srl = Context::get('document_srl');

		// if the document is not existed
		if(!$document_srl)
		{
			return $this->doError('msg_invalid_document');
		}

		$oDocumentModel = &getModel('document');
		$oDocument = $oDocumentModel->getDocument($document_srl);
		// check protect content
		if($this->module_info->protect_content=="Y" && $oDocument->get('comment_count')>0 && $this->grant->manager==false)
		{
			return new Object(-1, 'msg_protect_content');
		}

		// generate document module controller object
		$oDocumentController = getController('document');

		// delete the document
		$output = $oDocumentController->deleteDocument($document_srl, $this->grant->manager);
		if(!$output->toBool())
		{
			return $output;
		}

		// alert an message
		$this->setRedirectUrl(getNotEncodedUrl('', 'mid', Context::get('mid'), 'act', '', 'page', Context::get('page'), 'document_srl', ''));
		$this->add('mid', Context::get('mid'));
		$this->add('page', Context::get('page'));
		$this->setMessage('success_deleted');
	}

	/**
	 * @brief vote
	 **/
	function procMyBoardVoteDocument()
	{
		// generate document module controller object
		$oDocumentController = getController('document');

		$document_srl = Context::get('document_srl');
		return $oDocumentController->updateVotedCount($document_srl);
	}

	/**
	 * @brief insert comments
	 **/
	function procMyBoardInsertComment()
	{
		// check grant
		if(!$this->grant->write_comment)
		{
			return new Object(-1, 'msg_not_permitted');
		}
		$logged_info = Context::get('logged_info');

		// get the relevant data for inserting comment
		$obj = Context::getRequestVars();
		$obj->module_srl = $this->module_srl;

		if(!$this->module_info->use_status) $this->module_info->use_status = 'PUBLIC';
		if(!is_array($this->module_info->use_status))
		{
			$this->module_info->use_status = explode('|@|', $this->module_info->use_status);
		}

		if(in_array('SECRET', $this->module_info->use_status))
		{
			$this->module_info->secret = 'Y';
		}
		else
		{
			unset($obj->is_secret);
			$this->module_info->secret = 'N';
		}

		// check if the doument is existed
		$oDocumentModel = getModel('document');
		$oDocument = $oDocumentModel->getDocument($obj->document_srl);
		if(!$oDocument->isExists())
		{
			return new Object(-1,'msg_not_founded');
		}

		// For anonymous use, remove writer's information and notifying information
		if($this->module_info->use_anonymous == 'Y')
		{
			$this->module_info->admin_mail = '';
			$obj->notify_message = 'N';
			$obj->member_srl = -1*$logged_info->member_srl;
			$obj->email_address = $obj->homepage = $obj->user_id = '';
			$obj->user_name = $obj->nick_name = 'anonymous';
			$bAnonymous = true;
		}
		else
		{
			$bAnonymous = false;
		}

		// generate comment  module model object
		$oCommentModel = getModel('comment');

		// generate comment module controller object
		$oCommentController = getController('comment');

		// check the comment is existed
		// if the comment is not existed, then generate a new sequence
		if(!$obj->comment_srl)
		{
			$obj->comment_srl = getNextSequence();
		} else {
			$comment = $oCommentModel->getComment($obj->comment_srl, $this->grant->manager);
		}

		// if comment_srl is not existed, then insert the comment
		if($comment->comment_srl != $obj->comment_srl)
		{

			// parent_srl is existed
			if($obj->parent_srl)
			{
				$parent_comment = $oCommentModel->getComment($obj->parent_srl);
				if(!$parent_comment->comment_srl)
				{
					return new Object(-1, 'msg_invalid_request');
				}

				$output = $oCommentController->insertComment($obj, $bAnonymous);

			// parent_srl is not existed
			} else {
				$output = $oCommentController->insertComment($obj, $bAnonymous);
			}
		// update the comment if it is not existed
		} else {
			// check the grant
			if(!$comment->isGranted())
			{
				return new Object(-1,'msg_not_permitted');
			}

			$obj->parent_srl = $comment->parent_srl;
			$output = $oCommentController->updateComment($obj, $this->grant->manager);
			$comment_srl = $obj->comment_srl;
		}

		if(!$output->toBool())
		{
			return $output;
		}

		$this->setMessage('success_registed');
		$this->add('mid', Context::get('mid'));
		$this->add('document_srl', $obj->document_srl);
		$this->add('comment_srl', $obj->comment_srl);
	}

	/**
	 * @brief delete the comment
	 **/
	function procMyBoardDeleteComment()
	{
		// get the comment_srl
		$comment_srl = Context::get('comment_srl');
		if(!$comment_srl)
		{
			return $this->doError('msg_invalid_request');
		}

		// generate comment  controller object
		$oCommentController = getController('comment');

		$output = $oCommentController->deleteComment($comment_srl, $this->grant->manager);
		if(!$output->toBool())
		{
			return $output;
		}

		$this->add('mid', Context::get('mid'));
		$this->add('page', Context::get('page'));
		$this->add('document_srl', $output->get('document_srl'));
		$this->setMessage('success_deleted');
	}

	/**
	 * @brief delete the tracjback
	 **/
	function procMyBoardDeleteTrackback()
	{
		$trackback_srl = Context::get('trackback_srl');

		// generate trackback module controller object
		$oTrackbackController = getController('trackback');

		if(!$oTrackbackController) return;

		$output = $oTrackbackController->deleteTrackback($trackback_srl, $this->grant->manager);
		if(!$output->toBool())
		{
			return $output;
		}

		$this->add('mid', Context::get('mid'));
		$this->add('page', Context::get('page'));
		$this->add('document_srl', $output->get('document_srl'));
		$this->setMessage('success_deleted');
	}

	/**
	 * @brief check the password for document and comment
	 **/
	function procMyBoardVerificationPassword()
	{
		// get the id number of the document and the comment
		$password = Context::get('password');
		$document_srl = Context::get('document_srl');
		$comment_srl = Context::get('comment_srl');

		$oMemberModel = getModel('member');

		// if the comment exists
		if($comment_srl)
		{
			// get the comment information
			$oCommentModel = getModel('comment');
			$oComment = $oCommentModel->getComment($comment_srl);
			if(!$oComment->isExists())
			{
				return new Object(-1, 'msg_invalid_request');
			}

			// compare the comment password and the user input password
			if(!$oMemberModel->isValidPassword($oComment->get('password'),$password))
			{
				return new Object(-1, 'msg_invalid_password');
			}

			$oComment->setGrant();
		} else {
			 // get the document information
			$oDocumentModel = getModel('document');
			$oDocument = $oDocumentModel->getDocument($document_srl);
			if(!$oDocument->isExists())
			{
				return new Object(-1, 'msg_invalid_request');
			}

			// compare the document password and the user input password
			if(!$oMemberModel->isValidPassword($oDocument->get('password'),$password))
			{
				return new Object(-1, 'msg_invalid_password');
			}

			$oDocument->setGrant();
		}
	}

	/**
	 * @brief the trigger for displaying 'view document' link when click the user ID
	 **/
	function triggerMemberMenu(&$obj)
	{
		$member_srl = Context::get('target_srl');
		$mid = Context::get('cur_mid');

		if(!$member_srl || !$mid)
		{
			return new Object();
		}

		$logged_info = Context::get('logged_info');

		// get the module information
		$oModuleModel = getModel('module');
		$columnList = array('module');
		$cur_module_info = $oModuleModel->getModuleInfoByMid($mid, 0, $columnList);

		if($cur_module_info->module != 'board')
		{
			return new Object();
		}

		// get the member information
		if($member_srl == $logged_info->member_srl)
		{
			$member_info = $logged_info;
		} else {
			$oMemberModel = getModel('member');
			$member_info = $oMemberModel->getMemberInfoByMemberSrl($member_srl);
		}

		if(!$member_info->user_id)
		{
			return new Object();
		}

		//search
		$url = getUrl('','mid',$mid,'search_target','nick_name','search_keyword',$member_info->nick_name);
		$oMemberController = getController('member');
		$oMemberController->addMemberPopupMenu($url, 'cmd_view_own_document', '');

		return new Object();
	}
}
