<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl119_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl119_argument'}->ensureDefaultValue('0');
${'site_srl119_argument'}->checkNotNull();
${'site_srl119_argument'}->createConditionValue();
if(!${'site_srl119_argument'}->isValid()) return ${'site_srl119_argument'}->getErrorMessage();
if(${'site_srl119_argument'} !== null) ${'site_srl119_argument'}->setColumnType('number');

${'mid120_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid120_argument'}->checkNotNull();
${'mid120_argument'}->createConditionValue();
if(!${'mid120_argument'}->isValid()) return ${'mid120_argument'}->getErrorMessage();
if(${'mid120_argument'} !== null) ${'mid120_argument'}->setColumnType('varchar');

${'module_srl121_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl121_argument'}->ensureDefaultValue('0');
${'module_srl121_argument'}->checkNotNull();
${'module_srl121_argument'}->createConditionValue();
if(!${'module_srl121_argument'}->isValid()) return ${'module_srl121_argument'}->getErrorMessage();
if(${'module_srl121_argument'} !== null) ${'module_srl121_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl119_argument,"equal")
,new ConditionWithArgument('`mid`',$mid120_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl121_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>