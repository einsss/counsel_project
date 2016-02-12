<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = 'dispMyboardContent';
$info->setup_index_act='';
$info->simple_setup_index_act='getMyboardAdminSimpleSetup';
$info->admin_index_act = '';
$info->grant = new stdClass;
$info->grant->list = new stdClass;
$info->grant->list->title='목록 보기';
$info->grant->list->default='guest';
$info->grant->view = new stdClass;
$info->grant->view->title='내용 보기';
$info->grant->view->default='guest';
$info->grant->write_document = new stdClass;
$info->grant->write_document->title='글 쓰기';
$info->grant->write_document->default='guest';
$info->grant->write_comment = new stdClass;
$info->grant->write_comment->title='댓글 쓰기';
$info->grant->write_comment->default='guest';
$info->permission = new stdClass;
$info->permission->procMyboardAdminUpdateSimpleSetup = 'manager';
$info->permission->getMyboardAdminSimpleSetup = 'manager';
$info->action = new stdClass;
$info->action->procMyboardAdminUpdateSimpleSetup = new stdClass;
$info->action->procMyboardAdminUpdateSimpleSetup->type='controller';
$info->action->procMyboardAdminUpdateSimpleSetup->grant='guest';
$info->action->procMyboardAdminUpdateSimpleSetup->standalone='true';
$info->action->procMyboardAdminUpdateSimpleSetup->ruleset='';
$info->action->procMyboardAdminUpdateSimpleSetup->method='';
$info->action->getMyboardAdminSimpleSetup = new stdClass;
$info->action->getMyboardAdminSimpleSetup->type='model';
$info->action->getMyboardAdminSimpleSetup->grant='guest';
$info->action->getMyboardAdminSimpleSetup->standalone='true';
$info->action->getMyboardAdminSimpleSetup->ruleset='';
$info->action->getMyboardAdminSimpleSetup->method='';
$info->action->dispMyboardWrite = new stdClass;
$info->action->dispMyboardWrite->type='view';
$info->action->dispMyboardWrite->grant='guest';
$info->action->dispMyboardWrite->standalone='false';
$info->action->dispMyboardWrite->ruleset='';
$info->action->dispMyboardWrite->method='';
$info->action->dispMyboardContent = new stdClass;
$info->action->dispMyboardContent->type='view';
$info->action->dispMyboardContent->grant='guest';
$info->action->dispMyboardContent->standalone='false';
$info->action->dispMyboardContent->ruleset='';
$info->action->dispMyboardContent->method='';
$info->action->procMyboardWrite = new stdClass;
$info->action->procMyboardWrite->type='controller';
$info->action->procMyboardWrite->grant='guest';
$info->action->procMyboardWrite->standalone='false';
$info->action->procMyboardWrite->ruleset='';
$info->action->procMyboardWrite->method='';
$info->action->procMyboardInsertDocument = new stdClass;
$info->action->procMyboardInsertDocument->type='controller';
$info->action->procMyboardInsertDocument->grant='guest';
$info->action->procMyboardInsertDocument->standalone='false';
$info->action->procMyboardInsertDocument->ruleset='';
$info->action->procMyboardInsertDocument->method='';
return $info;