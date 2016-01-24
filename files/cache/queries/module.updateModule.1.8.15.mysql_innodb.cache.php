<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module247_argument'} = new Argument('module', $args->{'module'});
${'module247_argument'}->checkNotNull();
if(!${'module247_argument'}->isValid()) return ${'module247_argument'}->getErrorMessage();
if(${'module247_argument'} !== null) ${'module247_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl248_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl248_argument'}->isValid()) return ${'module_category_srl248_argument'}->getErrorMessage();
} else
${'module_category_srl248_argument'} = NULL;if(${'module_category_srl248_argument'} !== null) ${'module_category_srl248_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl249_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl249_argument'}->isValid()) return ${'layout_srl249_argument'}->getErrorMessage();
} else
${'layout_srl249_argument'} = NULL;if(${'layout_srl249_argument'} !== null) ${'layout_srl249_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin250_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin250_argument'}->isValid()) return ${'skin250_argument'}->getErrorMessage();
} else
${'skin250_argument'} = NULL;if(${'skin250_argument'} !== null) ${'skin250_argument'}->setColumnType('varchar');

${'is_skin_fix251_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix251_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix251_argument'}->isValid()) return ${'is_skin_fix251_argument'}->getErrorMessage();
if(${'is_skin_fix251_argument'} !== null) ${'is_skin_fix251_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin252_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin252_argument'}->isValid()) return ${'mskin252_argument'}->getErrorMessage();
} else
${'mskin252_argument'} = NULL;if(${'mskin252_argument'} !== null) ${'mskin252_argument'}->setColumnType('varchar');

${'is_mskin_fix253_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix253_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix253_argument'}->isValid()) return ${'is_mskin_fix253_argument'}->getErrorMessage();
if(${'is_mskin_fix253_argument'} !== null) ${'is_mskin_fix253_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl254_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl254_argument'}->checkFilter('number');
if(!${'menu_srl254_argument'}->isValid()) return ${'menu_srl254_argument'}->getErrorMessage();
} else
${'menu_srl254_argument'} = NULL;if(${'menu_srl254_argument'} !== null) ${'menu_srl254_argument'}->setColumnType('number');

${'mid255_argument'} = new Argument('mid', $args->{'mid'});
${'mid255_argument'}->checkNotNull();
if(!${'mid255_argument'}->isValid()) return ${'mid255_argument'}->getErrorMessage();
if(${'mid255_argument'} !== null) ${'mid255_argument'}->setColumnType('varchar');

${'browser_title256_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title256_argument'}->checkNotNull();
if(!${'browser_title256_argument'}->isValid()) return ${'browser_title256_argument'}->getErrorMessage();
if(${'browser_title256_argument'} !== null) ${'browser_title256_argument'}->setColumnType('varchar');

${'description257_argument'} = new Argument('description', $args->{'description'});
${'description257_argument'}->ensureDefaultValue('');
if(!${'description257_argument'}->isValid()) return ${'description257_argument'}->getErrorMessage();
if(${'description257_argument'} !== null) ${'description257_argument'}->setColumnType('text');

${'is_default258_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default258_argument'}->ensureDefaultValue('N');
${'is_default258_argument'}->checkNotNull();
if(!${'is_default258_argument'}->isValid()) return ${'is_default258_argument'}->getErrorMessage();
if(${'is_default258_argument'} !== null) ${'is_default258_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content259_argument'} = new Argument('content', $args->{'content'});
if(!${'content259_argument'}->isValid()) return ${'content259_argument'}->getErrorMessage();
} else
${'content259_argument'} = NULL;if(${'content259_argument'} !== null) ${'content259_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent260_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent260_argument'}->isValid()) return ${'mcontent260_argument'}->getErrorMessage();
} else
${'mcontent260_argument'} = NULL;if(${'mcontent260_argument'} !== null) ${'mcontent260_argument'}->setColumnType('bigtext');

${'open_rss261_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss261_argument'}->ensureDefaultValue('Y');
${'open_rss261_argument'}->checkNotNull();
if(!${'open_rss261_argument'}->isValid()) return ${'open_rss261_argument'}->getErrorMessage();
if(${'open_rss261_argument'} !== null) ${'open_rss261_argument'}->setColumnType('char');

${'header_text262_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text262_argument'}->ensureDefaultValue('');
if(!${'header_text262_argument'}->isValid()) return ${'header_text262_argument'}->getErrorMessage();
if(${'header_text262_argument'} !== null) ${'header_text262_argument'}->setColumnType('text');

${'footer_text263_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text263_argument'}->ensureDefaultValue('');
if(!${'footer_text263_argument'}->isValid()) return ${'footer_text263_argument'}->getErrorMessage();
if(${'footer_text263_argument'} !== null) ${'footer_text263_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl264_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl264_argument'}->isValid()) return ${'mlayout_srl264_argument'}->getErrorMessage();
} else
${'mlayout_srl264_argument'} = NULL;if(${'mlayout_srl264_argument'} !== null) ${'mlayout_srl264_argument'}->setColumnType('number');

${'use_mobile265_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile265_argument'}->ensureDefaultValue('N');
if(!${'use_mobile265_argument'}->isValid()) return ${'use_mobile265_argument'}->getErrorMessage();
if(${'use_mobile265_argument'} !== null) ${'use_mobile265_argument'}->setColumnType('char');

${'site_srl266_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl266_argument'}->checkFilter('number');
${'site_srl266_argument'}->ensureDefaultValue('0');
${'site_srl266_argument'}->checkNotNull();
${'site_srl266_argument'}->createConditionValue();
if(!${'site_srl266_argument'}->isValid()) return ${'site_srl266_argument'}->getErrorMessage();
if(${'site_srl266_argument'} !== null) ${'site_srl266_argument'}->setColumnType('number');

${'module_srl267_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl267_argument'}->checkFilter('number');
${'module_srl267_argument'}->checkNotNull();
${'module_srl267_argument'}->createConditionValue();
if(!${'module_srl267_argument'}->isValid()) return ${'module_srl267_argument'}->getErrorMessage();
if(${'module_srl267_argument'} !== null) ${'module_srl267_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module247_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl248_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl249_argument'})
,new UpdateExpression('`skin`', ${'skin250_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix251_argument'})
,new UpdateExpression('`mskin`', ${'mskin252_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix253_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl254_argument'})
,new UpdateExpression('`mid`', ${'mid255_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title256_argument'})
,new UpdateExpression('`description`', ${'description257_argument'})
,new UpdateExpression('`is_default`', ${'is_default258_argument'})
,new UpdateExpression('`content`', ${'content259_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent260_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss261_argument'})
,new UpdateExpression('`header_text`', ${'header_text262_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text263_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl264_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile265_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl266_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl267_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>