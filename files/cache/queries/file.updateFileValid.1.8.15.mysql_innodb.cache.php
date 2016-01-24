<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid242_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid242_argument'}->ensureDefaultValue('Y');
${'isvalid242_argument'}->checkNotNull();
if(!${'isvalid242_argument'}->isValid()) return ${'isvalid242_argument'}->getErrorMessage();
if(${'isvalid242_argument'} !== null) ${'isvalid242_argument'}->setColumnType('char');

${'upload_target_srl243_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl243_argument'}->checkFilter('number');
${'upload_target_srl243_argument'}->checkNotNull();
${'upload_target_srl243_argument'}->createConditionValue();
if(!${'upload_target_srl243_argument'}->isValid()) return ${'upload_target_srl243_argument'}->getErrorMessage();
if(${'upload_target_srl243_argument'} !== null) ${'upload_target_srl243_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid242_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl243_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>