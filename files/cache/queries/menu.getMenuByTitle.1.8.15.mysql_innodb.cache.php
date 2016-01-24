<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title148_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title148_argument'}->checkNotNull();
${'title148_argument'}->createConditionValue();
if(!${'title148_argument'}->isValid()) return ${'title148_argument'}->getErrorMessage();
if(${'title148_argument'} !== null) ${'title148_argument'}->setColumnType('varchar');

${'site_srl149_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl149_argument'}->ensureDefaultValue('0');
${'site_srl149_argument'}->createConditionValue();
if(!${'site_srl149_argument'}->isValid()) return ${'site_srl149_argument'}->getErrorMessage();
if(${'site_srl149_argument'} !== null) ${'site_srl149_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title148_argument,"in")
,new ConditionWithArgument('`site_srl`',$site_srl149_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>