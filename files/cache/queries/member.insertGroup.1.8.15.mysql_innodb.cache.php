<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'site_srl28_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl28_argument'}->ensureDefaultValue('0');
${'site_srl28_argument'}->checkNotNull();
if(!${'site_srl28_argument'}->isValid()) return ${'site_srl28_argument'}->getErrorMessage();
if(${'site_srl28_argument'} !== null) ${'site_srl28_argument'}->setColumnType('number');

${'group_srl29_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl29_argument'}->checkNotNull();
if(!${'group_srl29_argument'}->isValid()) return ${'group_srl29_argument'}->getErrorMessage();
if(${'group_srl29_argument'} !== null) ${'group_srl29_argument'}->setColumnType('number');

${'list_order30_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order30_argument'}->checkNotNull();
if(!${'list_order30_argument'}->isValid()) return ${'list_order30_argument'}->getErrorMessage();
if(${'list_order30_argument'} !== null) ${'list_order30_argument'}->setColumnType('number');

${'title31_argument'} = new Argument('title', $args->{'title'});
${'title31_argument'}->checkNotNull();
if(!${'title31_argument'}->isValid()) return ${'title31_argument'}->getErrorMessage();
if(${'title31_argument'} !== null) ${'title31_argument'}->setColumnType('varchar');

${'is_default32_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default32_argument'}->ensureDefaultValue('N');
${'is_default32_argument'}->checkNotNull();
if(!${'is_default32_argument'}->isValid()) return ${'is_default32_argument'}->getErrorMessage();
if(${'is_default32_argument'} !== null) ${'is_default32_argument'}->setColumnType('char');

${'is_admin33_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin33_argument'}->ensureDefaultValue('N');
${'is_admin33_argument'}->checkNotNull();
if(!${'is_admin33_argument'}->isValid()) return ${'is_admin33_argument'}->getErrorMessage();
if(${'is_admin33_argument'} !== null) ${'is_admin33_argument'}->setColumnType('char');

${'regdate34_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate34_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate34_argument'}->isValid()) return ${'regdate34_argument'}->getErrorMessage();
if(${'regdate34_argument'} !== null) ${'regdate34_argument'}->setColumnType('date');

${'description35_argument'} = new Argument('description', $args->{'description'});
${'description35_argument'}->ensureDefaultValue('');
if(!${'description35_argument'}->isValid()) return ${'description35_argument'}->getErrorMessage();
if(${'description35_argument'} !== null) ${'description35_argument'}->setColumnType('text');

${'image_mark36_argument'} = new Argument('image_mark', $args->{'image_mark'});
${'image_mark36_argument'}->ensureDefaultValue('');
if(!${'image_mark36_argument'}->isValid()) return ${'image_mark36_argument'}->getErrorMessage();
if(${'image_mark36_argument'} !== null) ${'image_mark36_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl28_argument'})
,new InsertExpression('`group_srl`', ${'group_srl29_argument'})
,new InsertExpression('`list_order`', ${'list_order30_argument'})
,new InsertExpression('`title`', ${'title31_argument'})
,new InsertExpression('`is_default`', ${'is_default32_argument'})
,new InsertExpression('`is_admin`', ${'is_admin33_argument'})
,new InsertExpression('`regdate`', ${'regdate34_argument'})
,new InsertExpression('`description`', ${'description35_argument'})
,new InsertExpression('`image_mark`', ${'image_mark36_argument'})
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>