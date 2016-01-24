<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl124_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl124_argument'}->checkFilter('number');
${'menu_srl124_argument'}->checkNotNull();
if(!${'menu_srl124_argument'}->isValid()) return ${'menu_srl124_argument'}->getErrorMessage();
if(${'menu_srl124_argument'} !== null) ${'menu_srl124_argument'}->setColumnType('number');

${'site_srl125_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl125_argument'}->checkFilter('number');
${'site_srl125_argument'}->ensureDefaultValue('0');
${'site_srl125_argument'}->checkNotNull();
if(!${'site_srl125_argument'}->isValid()) return ${'site_srl125_argument'}->getErrorMessage();
if(${'site_srl125_argument'} !== null) ${'site_srl125_argument'}->setColumnType('number');

${'title126_argument'} = new Argument('title', $args->{'title'});
${'title126_argument'}->checkNotNull();
if(!${'title126_argument'}->isValid()) return ${'title126_argument'}->getErrorMessage();
if(${'title126_argument'} !== null) ${'title126_argument'}->setColumnType('varchar');

${'listorder127_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder127_argument'}->checkNotNull();
if(!${'listorder127_argument'}->isValid()) return ${'listorder127_argument'}->getErrorMessage();
if(${'listorder127_argument'} !== null) ${'listorder127_argument'}->setColumnType('number');

${'regdate128_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate128_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate128_argument'}->isValid()) return ${'regdate128_argument'}->getErrorMessage();
if(${'regdate128_argument'} !== null) ${'regdate128_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl124_argument'})
,new InsertExpression('`site_srl`', ${'site_srl125_argument'})
,new InsertExpression('`title`', ${'title126_argument'})
,new InsertExpression('`listorder`', ${'listorder127_argument'})
,new InsertExpression('`regdate`', ${'regdate128_argument'})
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>