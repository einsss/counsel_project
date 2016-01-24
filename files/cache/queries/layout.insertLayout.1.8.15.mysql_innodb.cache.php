<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl183_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl183_argument'}->checkFilter('number');
${'layout_srl183_argument'}->checkNotNull();
if(!${'layout_srl183_argument'}->isValid()) return ${'layout_srl183_argument'}->getErrorMessage();
if(${'layout_srl183_argument'} !== null) ${'layout_srl183_argument'}->setColumnType('number');

${'site_srl184_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl184_argument'}->checkFilter('number');
${'site_srl184_argument'}->ensureDefaultValue('0');
${'site_srl184_argument'}->checkNotNull();
if(!${'site_srl184_argument'}->isValid()) return ${'site_srl184_argument'}->getErrorMessage();
if(${'site_srl184_argument'} !== null) ${'site_srl184_argument'}->setColumnType('number');

${'layout185_argument'} = new Argument('layout', $args->{'layout'});
${'layout185_argument'}->checkNotNull();
if(!${'layout185_argument'}->isValid()) return ${'layout185_argument'}->getErrorMessage();
if(${'layout185_argument'} !== null) ${'layout185_argument'}->setColumnType('varchar');

${'title186_argument'} = new Argument('title', $args->{'title'});
${'title186_argument'}->checkNotNull();
if(!${'title186_argument'}->isValid()) return ${'title186_argument'}->getErrorMessage();
if(${'title186_argument'} !== null) ${'title186_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl187_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl187_argument'}->isValid()) return ${'module_srl187_argument'}->getErrorMessage();
} else
${'module_srl187_argument'} = NULL;if(${'module_srl187_argument'} !== null) ${'module_srl187_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars188_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars188_argument'}->isValid()) return ${'extra_vars188_argument'}->getErrorMessage();
} else
${'extra_vars188_argument'} = NULL;if(${'extra_vars188_argument'} !== null) ${'extra_vars188_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path189_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path189_argument'}->isValid()) return ${'layout_path189_argument'}->getErrorMessage();
} else
${'layout_path189_argument'} = NULL;if(${'layout_path189_argument'} !== null) ${'layout_path189_argument'}->setColumnType('varchar');

${'regdate190_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate190_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate190_argument'}->isValid()) return ${'regdate190_argument'}->getErrorMessage();
if(${'regdate190_argument'} !== null) ${'regdate190_argument'}->setColumnType('date');

${'layout_type191_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type191_argument'}->ensureDefaultValue('P');
if(!${'layout_type191_argument'}->isValid()) return ${'layout_type191_argument'}->getErrorMessage();
if(${'layout_type191_argument'} !== null) ${'layout_type191_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl183_argument'})
,new InsertExpression('`site_srl`', ${'site_srl184_argument'})
,new InsertExpression('`layout`', ${'layout185_argument'})
,new InsertExpression('`title`', ${'title186_argument'})
,new InsertExpression('`module_srl`', ${'module_srl187_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars188_argument'})
,new InsertExpression('`layout_path`', ${'layout_path189_argument'})
,new InsertExpression('`regdate`', ${'regdate190_argument'})
,new InsertExpression('`layout_type`', ${'layout_type191_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>