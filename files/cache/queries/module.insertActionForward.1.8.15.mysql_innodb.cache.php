<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act116_argument'} = new Argument('act', $args->{'act'});
${'act116_argument'}->checkNotNull();
if(!${'act116_argument'}->isValid()) return ${'act116_argument'}->getErrorMessage();
if(${'act116_argument'} !== null) ${'act116_argument'}->setColumnType('varchar');

${'module117_argument'} = new Argument('module', $args->{'module'});
${'module117_argument'}->checkNotNull();
if(!${'module117_argument'}->isValid()) return ${'module117_argument'}->getErrorMessage();
if(${'module117_argument'} !== null) ${'module117_argument'}->setColumnType('varchar');

${'type118_argument'} = new Argument('type', $args->{'type'});
${'type118_argument'}->checkNotNull();
if(!${'type118_argument'}->isValid()) return ${'type118_argument'}->getErrorMessage();
if(${'type118_argument'} !== null) ${'type118_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act116_argument'})
,new InsertExpression('`module`', ${'module117_argument'})
,new InsertExpression('`type`', ${'type118_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>