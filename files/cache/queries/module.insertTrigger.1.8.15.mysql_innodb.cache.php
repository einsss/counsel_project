<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTrigger");
$query->setAction("insert");
$query->setPriority("");

${'trigger_name19_argument'} = new Argument('trigger_name', $args->{'trigger_name'});
${'trigger_name19_argument'}->checkNotNull();
if(!${'trigger_name19_argument'}->isValid()) return ${'trigger_name19_argument'}->getErrorMessage();
if(${'trigger_name19_argument'} !== null) ${'trigger_name19_argument'}->setColumnType('varchar');

${'module20_argument'} = new Argument('module', $args->{'module'});
${'module20_argument'}->checkNotNull();
if(!${'module20_argument'}->isValid()) return ${'module20_argument'}->getErrorMessage();
if(${'module20_argument'} !== null) ${'module20_argument'}->setColumnType('varchar');

${'type21_argument'} = new Argument('type', $args->{'type'});
${'type21_argument'}->checkNotNull();
if(!${'type21_argument'}->isValid()) return ${'type21_argument'}->getErrorMessage();
if(${'type21_argument'} !== null) ${'type21_argument'}->setColumnType('varchar');

${'called_method22_argument'} = new Argument('called_method', $args->{'called_method'});
${'called_method22_argument'}->checkNotNull();
if(!${'called_method22_argument'}->isValid()) return ${'called_method22_argument'}->getErrorMessage();
if(${'called_method22_argument'} !== null) ${'called_method22_argument'}->setColumnType('varchar');

${'called_position23_argument'} = new Argument('called_position', $args->{'called_position'});
${'called_position23_argument'}->checkNotNull();
if(!${'called_position23_argument'}->isValid()) return ${'called_position23_argument'}->getErrorMessage();
if(${'called_position23_argument'} !== null) ${'called_position23_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`trigger_name`', ${'trigger_name19_argument'})
,new InsertExpression('`module`', ${'module20_argument'})
,new InsertExpression('`type`', ${'type21_argument'})
,new InsertExpression('`called_method`', ${'called_method22_argument'})
,new InsertExpression('`called_position`', ${'called_position23_argument'})
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>