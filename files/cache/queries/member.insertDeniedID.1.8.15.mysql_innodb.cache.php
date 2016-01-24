<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id100_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id100_argument'}->checkNotNull();
if(!${'user_id100_argument'}->isValid()) return ${'user_id100_argument'}->getErrorMessage();
if(${'user_id100_argument'} !== null) ${'user_id100_argument'}->setColumnType('varchar');

${'regdate101_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate101_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate101_argument'}->isValid()) return ${'regdate101_argument'}->getErrorMessage();
if(${'regdate101_argument'} !== null) ${'regdate101_argument'}->setColumnType('date');

${'description102_argument'} = new Argument('description', $args->{'description'});
${'description102_argument'}->ensureDefaultValue('');
if(!${'description102_argument'}->isValid()) return ${'description102_argument'}->getErrorMessage();
if(${'description102_argument'} !== null) ${'description102_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order103_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order103_argument'}->isValid()) return ${'list_order103_argument'}->getErrorMessage();
} else
${'list_order103_argument'} = NULL;if(${'list_order103_argument'} !== null) ${'list_order103_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id100_argument'})
,new InsertExpression('`regdate`', ${'regdate101_argument'})
,new InsertExpression('`description`', ${'description102_argument'})
,new InsertExpression('`list_order`', ${'list_order103_argument'})
));
$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>