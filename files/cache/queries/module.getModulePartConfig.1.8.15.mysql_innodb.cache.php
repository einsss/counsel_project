<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module199_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module199_argument'}->checkNotNull();
${'module199_argument'}->createConditionValue();
if(!${'module199_argument'}->isValid()) return ${'module199_argument'}->getErrorMessage();
if(${'module199_argument'} !== null) ${'module199_argument'}->setColumnType('varchar');

${'module_srl200_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl200_argument'}->checkNotNull();
${'module_srl200_argument'}->createConditionValue();
if(!${'module_srl200_argument'}->isValid()) return ${'module_srl200_argument'}->getErrorMessage();
if(${'module_srl200_argument'} !== null) ${'module_srl200_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module199_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl200_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>