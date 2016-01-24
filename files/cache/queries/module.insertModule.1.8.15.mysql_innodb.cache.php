<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl154_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl154_argument'}->ensureDefaultValue('0');
${'site_srl154_argument'}->checkNotNull();
if(!${'site_srl154_argument'}->isValid()) return ${'site_srl154_argument'}->getErrorMessage();
if(${'site_srl154_argument'} !== null) ${'site_srl154_argument'}->setColumnType('number');

${'module_srl155_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl155_argument'}->checkNotNull();
if(!${'module_srl155_argument'}->isValid()) return ${'module_srl155_argument'}->getErrorMessage();
if(${'module_srl155_argument'} !== null) ${'module_srl155_argument'}->setColumnType('number');

${'module_category_srl156_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl156_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl156_argument'}->isValid()) return ${'module_category_srl156_argument'}->getErrorMessage();
if(${'module_category_srl156_argument'} !== null) ${'module_category_srl156_argument'}->setColumnType('number');

${'mid157_argument'} = new Argument('mid', $args->{'mid'});
${'mid157_argument'}->checkNotNull();
if(!${'mid157_argument'}->isValid()) return ${'mid157_argument'}->getErrorMessage();
if(${'mid157_argument'} !== null) ${'mid157_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin158_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin158_argument'}->isValid()) return ${'skin158_argument'}->getErrorMessage();
} else
${'skin158_argument'} = NULL;if(${'skin158_argument'} !== null) ${'skin158_argument'}->setColumnType('varchar');

${'is_skin_fix159_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix159_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix159_argument'}->isValid()) return ${'is_skin_fix159_argument'}->getErrorMessage();
if(${'is_skin_fix159_argument'} !== null) ${'is_skin_fix159_argument'}->setColumnType('char');

${'is_mskin_fix160_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix160_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix160_argument'}->isValid()) return ${'is_mskin_fix160_argument'}->getErrorMessage();
if(${'is_mskin_fix160_argument'} !== null) ${'is_mskin_fix160_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin161_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin161_argument'}->isValid()) return ${'mskin161_argument'}->getErrorMessage();
} else
${'mskin161_argument'} = NULL;if(${'mskin161_argument'} !== null) ${'mskin161_argument'}->setColumnType('varchar');

${'browser_title162_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title162_argument'}->checkNotNull();
if(!${'browser_title162_argument'}->isValid()) return ${'browser_title162_argument'}->getErrorMessage();
if(${'browser_title162_argument'} !== null) ${'browser_title162_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl163_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl163_argument'}->isValid()) return ${'layout_srl163_argument'}->getErrorMessage();
} else
${'layout_srl163_argument'} = NULL;if(${'layout_srl163_argument'} !== null) ${'layout_srl163_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description164_argument'} = new Argument('description', $args->{'description'});
if(!${'description164_argument'}->isValid()) return ${'description164_argument'}->getErrorMessage();
} else
${'description164_argument'} = NULL;if(${'description164_argument'} !== null) ${'description164_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content165_argument'} = new Argument('content', $args->{'content'});
if(!${'content165_argument'}->isValid()) return ${'content165_argument'}->getErrorMessage();
} else
${'content165_argument'} = NULL;if(${'content165_argument'} !== null) ${'content165_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent166_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent166_argument'}->isValid()) return ${'mcontent166_argument'}->getErrorMessage();
} else
${'mcontent166_argument'} = NULL;if(${'mcontent166_argument'} !== null) ${'mcontent166_argument'}->setColumnType('bigtext');

${'module167_argument'} = new Argument('module', $args->{'module'});
${'module167_argument'}->checkNotNull();
if(!${'module167_argument'}->isValid()) return ${'module167_argument'}->getErrorMessage();
if(${'module167_argument'} !== null) ${'module167_argument'}->setColumnType('varchar');

${'is_default168_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default168_argument'}->ensureDefaultValue('N');
${'is_default168_argument'}->checkNotNull();
if(!${'is_default168_argument'}->isValid()) return ${'is_default168_argument'}->getErrorMessage();
if(${'is_default168_argument'} !== null) ${'is_default168_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl169_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl169_argument'}->checkFilter('number');
if(!${'menu_srl169_argument'}->isValid()) return ${'menu_srl169_argument'}->getErrorMessage();
} else
${'menu_srl169_argument'} = NULL;if(${'menu_srl169_argument'} !== null) ${'menu_srl169_argument'}->setColumnType('number');

${'open_rss170_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss170_argument'}->ensureDefaultValue('Y');
${'open_rss170_argument'}->checkNotNull();
if(!${'open_rss170_argument'}->isValid()) return ${'open_rss170_argument'}->getErrorMessage();
if(${'open_rss170_argument'} !== null) ${'open_rss170_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text171_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text171_argument'}->isValid()) return ${'header_text171_argument'}->getErrorMessage();
} else
${'header_text171_argument'} = NULL;if(${'header_text171_argument'} !== null) ${'header_text171_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text172_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text172_argument'}->isValid()) return ${'footer_text172_argument'}->getErrorMessage();
} else
${'footer_text172_argument'} = NULL;if(${'footer_text172_argument'} !== null) ${'footer_text172_argument'}->setColumnType('text');

${'regdate173_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate173_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate173_argument'}->isValid()) return ${'regdate173_argument'}->getErrorMessage();
if(${'regdate173_argument'} !== null) ${'regdate173_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl174_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl174_argument'}->isValid()) return ${'mlayout_srl174_argument'}->getErrorMessage();
} else
${'mlayout_srl174_argument'} = NULL;if(${'mlayout_srl174_argument'} !== null) ${'mlayout_srl174_argument'}->setColumnType('number');

${'use_mobile175_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile175_argument'}->ensureDefaultValue('N');
if(!${'use_mobile175_argument'}->isValid()) return ${'use_mobile175_argument'}->getErrorMessage();
if(${'use_mobile175_argument'} !== null) ${'use_mobile175_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl154_argument'})
,new InsertExpression('`module_srl`', ${'module_srl155_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl156_argument'})
,new InsertExpression('`mid`', ${'mid157_argument'})
,new InsertExpression('`skin`', ${'skin158_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix159_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix160_argument'})
,new InsertExpression('`mskin`', ${'mskin161_argument'})
,new InsertExpression('`browser_title`', ${'browser_title162_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl163_argument'})
,new InsertExpression('`description`', ${'description164_argument'})
,new InsertExpression('`content`', ${'content165_argument'})
,new InsertExpression('`mcontent`', ${'mcontent166_argument'})
,new InsertExpression('`module`', ${'module167_argument'})
,new InsertExpression('`is_default`', ${'is_default168_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl169_argument'})
,new InsertExpression('`open_rss`', ${'open_rss170_argument'})
,new InsertExpression('`header_text`', ${'header_text171_argument'})
,new InsertExpression('`footer_text`', ${'footer_text172_argument'})
,new InsertExpression('`regdate`', ${'regdate173_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl174_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile175_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>