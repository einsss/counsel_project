<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl144_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl144_argument'}->checkFilter('number');
${'site_srl144_argument'}->ensureDefaultValue('0');
${'site_srl144_argument'}->checkNotNull();
${'site_srl144_argument'}->createConditionValue();
if(!${'site_srl144_argument'}->isValid()) return ${'site_srl144_argument'}->getErrorMessage();
if(${'site_srl144_argument'} !== null) ${'site_srl144_argument'}->setColumnType('number');

${'layout_type145_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type145_argument'}->ensureDefaultValue('P');
${'layout_type145_argument'}->createConditionValue();
if(!${'layout_type145_argument'}->isValid()) return ${'layout_type145_argument'}->getErrorMessage();
if(${'layout_type145_argument'} !== null) ${'layout_type145_argument'}->setColumnType('char');

${'layout146_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout146_argument'}->ensureDefaultValue('.');
${'layout146_argument'}->createConditionValue();
if(!${'layout146_argument'}->isValid()) return ${'layout146_argument'}->getErrorMessage();
if(${'layout146_argument'} !== null) ${'layout146_argument'}->setColumnType('varchar');

${'sort_index147_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index147_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index147_argument'}->isValid()) return ${'sort_index147_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl144_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type145_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout146_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index147_argument'}, "desc")
));
$query->setLimit();
return $query; ?>