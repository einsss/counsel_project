<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSite");
$query->setAction("update");
$query->setPriority("");
if(isset($args->index_module_srl)) {
${'index_module_srl285_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
if(!${'index_module_srl285_argument'}->isValid()) return ${'index_module_srl285_argument'}->getErrorMessage();
} else
${'index_module_srl285_argument'} = NULL;if(${'index_module_srl285_argument'} !== null) ${'index_module_srl285_argument'}->setColumnType('number');
if(isset($args->domain)) {
${'domain286_argument'} = new Argument('domain', $args->{'domain'});
if(!${'domain286_argument'}->isValid()) return ${'domain286_argument'}->getErrorMessage();
} else
${'domain286_argument'} = NULL;if(${'domain286_argument'} !== null) ${'domain286_argument'}->setColumnType('varchar');
if(isset($args->default_language)) {
${'default_language287_argument'} = new Argument('default_language', $args->{'default_language'});
if(!${'default_language287_argument'}->isValid()) return ${'default_language287_argument'}->getErrorMessage();
} else
${'default_language287_argument'} = NULL;if(${'default_language287_argument'} !== null) ${'default_language287_argument'}->setColumnType('varchar');

${'site_srl288_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl288_argument'}->checkFilter('number');
${'site_srl288_argument'}->checkNotNull();
${'site_srl288_argument'}->createConditionValue();
if(!${'site_srl288_argument'}->isValid()) return ${'site_srl288_argument'}->getErrorMessage();
if(${'site_srl288_argument'} !== null) ${'site_srl288_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`index_module_srl`', ${'index_module_srl285_argument'})
,new UpdateExpression('`domain`', ${'domain286_argument'})
,new UpdateExpression('`default_language`', ${'default_language287_argument'})
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl288_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>