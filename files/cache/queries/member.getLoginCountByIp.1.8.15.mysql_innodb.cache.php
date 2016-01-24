<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress95_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress95_argument'}->createConditionValue();
if(!${'ipaddress95_argument'}->isValid()) return ${'ipaddress95_argument'}->getErrorMessage();
} else
${'ipaddress95_argument'} = NULL;if(${'ipaddress95_argument'} !== null) ${'ipaddress95_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress95_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>