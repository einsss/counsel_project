<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsSiteDomain");
$query->setAction("select");
$query->setPriority("");

${'domain122_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain122_argument'}->checkNotNull();
${'domain122_argument'}->createConditionValue();
if(!${'domain122_argument'}->isValid()) return ${'domain122_argument'}->getErrorMessage();
if(${'domain122_argument'} !== null) ${'domain122_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`domain`',$domain122_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>