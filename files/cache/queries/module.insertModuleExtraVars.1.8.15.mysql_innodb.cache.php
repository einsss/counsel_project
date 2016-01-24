<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl177_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl177_argument'}->checkFilter('number');
${'module_srl177_argument'}->checkNotNull();
if(!${'module_srl177_argument'}->isValid()) return ${'module_srl177_argument'}->getErrorMessage();
if(${'module_srl177_argument'} !== null) ${'module_srl177_argument'}->setColumnType('number');

${'name178_argument'} = new Argument('name', $args->{'name'});
${'name178_argument'}->checkNotNull();
if(!${'name178_argument'}->isValid()) return ${'name178_argument'}->getErrorMessage();
if(${'name178_argument'} !== null) ${'name178_argument'}->setColumnType('varchar');

${'value179_argument'} = new Argument('value', $args->{'value'});
${'value179_argument'}->checkNotNull();
if(!${'value179_argument'}->isValid()) return ${'value179_argument'}->getErrorMessage();
if(${'value179_argument'} !== null) ${'value179_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl177_argument'})
,new InsertExpression('`name`', ${'name178_argument'})
,new InsertExpression('`value`', ${'value179_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>