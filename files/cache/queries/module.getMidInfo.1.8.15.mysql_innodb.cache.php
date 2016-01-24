<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid151_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid151_argument'}->createConditionValue();
if(!${'mid151_argument'}->isValid()) return ${'mid151_argument'}->getErrorMessage();
} else
${'mid151_argument'} = NULL;if(${'mid151_argument'} !== null) ${'mid151_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl152_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl152_argument'}->createConditionValue();
if(!${'module_srl152_argument'}->isValid()) return ${'module_srl152_argument'}->getErrorMessage();
} else
${'module_srl152_argument'} = NULL;if(${'module_srl152_argument'} !== null) ${'module_srl152_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl153_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl153_argument'}->createConditionValue();
if(!${'site_srl153_argument'}->isValid()) return ${'site_srl153_argument'}->getErrorMessage();
} else
${'site_srl153_argument'} = NULL;if(${'site_srl153_argument'} !== null) ${'site_srl153_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid151_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl152_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl153_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>