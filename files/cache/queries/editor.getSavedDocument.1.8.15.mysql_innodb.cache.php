<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl239_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl239_argument'}->createConditionValue();
if(!${'module_srl239_argument'}->isValid()) return ${'module_srl239_argument'}->getErrorMessage();
} else
${'module_srl239_argument'} = NULL;if(${'module_srl239_argument'} !== null) ${'module_srl239_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl240_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl240_argument'}->createConditionValue();
if(!${'member_srl240_argument'}->isValid()) return ${'member_srl240_argument'}->getErrorMessage();
} else
${'member_srl240_argument'} = NULL;if(${'member_srl240_argument'} !== null) ${'member_srl240_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress241_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress241_argument'}->createConditionValue();
if(!${'ipaddress241_argument'}->isValid()) return ${'ipaddress241_argument'}->getErrorMessage();
} else
${'ipaddress241_argument'} = NULL;if(${'ipaddress241_argument'} !== null) ${'ipaddress241_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl239_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl240_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress241_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>