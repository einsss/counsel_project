<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleConfig");
$query->setAction("insert");
$query->setPriority("");

${'module14_argument'} = new Argument('module', $args->{'module'});
${'module14_argument'}->checkNotNull();
if(!${'module14_argument'}->isValid()) return ${'module14_argument'}->getErrorMessage();
if(${'module14_argument'} !== null) ${'module14_argument'}->setColumnType('varchar');
if(isset($args->config)) {
${'config15_argument'} = new Argument('config', $args->{'config'});
if(!${'config15_argument'}->isValid()) return ${'config15_argument'}->getErrorMessage();
} else
${'config15_argument'} = NULL;if(${'config15_argument'} !== null) ${'config15_argument'}->setColumnType('text');

${'site_srl16_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl16_argument'}->checkNotNull();
if(!${'site_srl16_argument'}->isValid()) return ${'site_srl16_argument'}->getErrorMessage();
if(${'site_srl16_argument'} !== null) ${'site_srl16_argument'}->setColumnType('number');

${'regdate17_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate17_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate17_argument'}->isValid()) return ${'regdate17_argument'}->getErrorMessage();
if(${'regdate17_argument'} !== null) ${'regdate17_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module14_argument'})
,new InsertExpression('`config`', ${'config15_argument'})
,new InsertExpression('`site_srl`', ${'site_srl16_argument'})
,new InsertExpression('`regdate`', ${'regdate17_argument'})
));
$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>