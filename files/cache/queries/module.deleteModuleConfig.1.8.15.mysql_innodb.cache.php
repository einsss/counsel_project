<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleConfig");
$query->setAction("delete");
$query->setPriority("");

${'module12_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module12_argument'}->checkNotNull();
${'module12_argument'}->createConditionValue();
if(!${'module12_argument'}->isValid()) return ${'module12_argument'}->getErrorMessage();
if(${'module12_argument'} !== null) ${'module12_argument'}->setColumnType('varchar');

${'site_srl13_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl13_argument'}->checkNotNull();
${'site_srl13_argument'}->createConditionValue();
if(!${'site_srl13_argument'}->isValid()) return ${'site_srl13_argument'}->getErrorMessage();
if(${'site_srl13_argument'} !== null) ${'site_srl13_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module12_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl13_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>