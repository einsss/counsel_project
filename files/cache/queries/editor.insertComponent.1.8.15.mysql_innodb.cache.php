<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComponent");
$query->setAction("insert");
$query->setPriority("");

${'component_name113_argument'} = new Argument('component_name', $args->{'component_name'});
${'component_name113_argument'}->checkNotNull();
if(!${'component_name113_argument'}->isValid()) return ${'component_name113_argument'}->getErrorMessage();
if(${'component_name113_argument'} !== null) ${'component_name113_argument'}->setColumnType('varchar');

${'enabled114_argument'} = new Argument('enabled', $args->{'enabled'});
${'enabled114_argument'}->ensureDefaultValue('N');
if(!${'enabled114_argument'}->isValid()) return ${'enabled114_argument'}->getErrorMessage();
if(${'enabled114_argument'} !== null) ${'enabled114_argument'}->setColumnType('char');

${'list_order115_argument'} = new Argument('list_order', $args->{'list_order'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'list_order115_argument'}->ensureDefaultValue($sequence);
if(!${'list_order115_argument'}->isValid()) return ${'list_order115_argument'}->getErrorMessage();
if(${'list_order115_argument'} !== null) ${'list_order115_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`component_name`', ${'component_name113_argument'})
,new InsertExpression('`enabled`', ${'enabled114_argument'})
,new InsertExpression('`list_order`', ${'list_order115_argument'})
));
$query->setTables(array(
new Table('`xe_editor_components`', '`editor_components`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>