<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl104_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl104_argument'}->checkNotNull();
if(!${'site_srl104_argument'}->isValid()) return ${'site_srl104_argument'}->getErrorMessage();
if(${'site_srl104_argument'} !== null) ${'site_srl104_argument'}->setColumnType('number');

${'addon105_argument'} = new Argument('addon', $args->{'addon'});
${'addon105_argument'}->checkNotNull();
if(!${'addon105_argument'}->isValid()) return ${'addon105_argument'}->getErrorMessage();
if(${'addon105_argument'} !== null) ${'addon105_argument'}->setColumnType('varchar');

${'is_used106_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used106_argument'}->ensureDefaultValue('N');
${'is_used106_argument'}->checkNotNull();
if(!${'is_used106_argument'}->isValid()) return ${'is_used106_argument'}->getErrorMessage();
if(${'is_used106_argument'} !== null) ${'is_used106_argument'}->setColumnType('char');

${'is_used_m107_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m107_argument'}->ensureDefaultValue('N');
if(!${'is_used_m107_argument'}->isValid()) return ${'is_used_m107_argument'}->getErrorMessage();
if(${'is_used_m107_argument'} !== null) ${'is_used_m107_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars108_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars108_argument'}->isValid()) return ${'extra_vars108_argument'}->getErrorMessage();
} else
${'extra_vars108_argument'} = NULL;if(${'extra_vars108_argument'} !== null) ${'extra_vars108_argument'}->setColumnType('text');

${'regdate109_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate109_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate109_argument'}->isValid()) return ${'regdate109_argument'}->getErrorMessage();
if(${'regdate109_argument'} !== null) ${'regdate109_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl104_argument'})
,new InsertExpression('`addon`', ${'addon105_argument'})
,new InsertExpression('`is_used`', ${'is_used106_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m107_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars108_argument'})
,new InsertExpression('`regdate`', ${'regdate109_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>