<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin18_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin18_argument'}->ensureDefaultValue('.');
${'skin18_argument'}->createConditionValue();
if(!${'skin18_argument'}->isValid()) return ${'skin18_argument'}->getErrorMessage();
if(${'skin18_argument'} !== null) ${'skin18_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin18_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>