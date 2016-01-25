<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLang");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkFilter('number');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name2_argument'} = new ConditionArgument('name', $args->name, 'equal');
${'name2_argument'}->createConditionValue();
if(!${'name2_argument'}->isValid()) return ${'name2_argument'}->getErrorMessage();
} else
${'name2_argument'} = NULL;if(${'name2_argument'} !== null) ${'name2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_lang`', '`lang`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal")
,new ConditionWithArgument('`name`',$name2_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>