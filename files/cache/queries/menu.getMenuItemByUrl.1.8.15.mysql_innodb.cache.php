<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url268_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url268_argument'}->checkNotNull();
${'url268_argument'}->createConditionValue();
if(!${'url268_argument'}->isValid()) return ${'url268_argument'}->getErrorMessage();
if(${'url268_argument'} !== null) ${'url268_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut269_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut269_argument'}->createConditionValue();
if(!${'is_shortcut269_argument'}->isValid()) return ${'is_shortcut269_argument'}->getErrorMessage();
} else
${'is_shortcut269_argument'} = NULL;if(${'is_shortcut269_argument'} !== null) ${'is_shortcut269_argument'}->setColumnType('char');

${'site_srl270_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl270_argument'}->checkNotNull();
${'site_srl270_argument'}->createConditionValue();
if(!${'site_srl270_argument'}->isValid()) return ${'site_srl270_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url268_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut269_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`xe_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl270_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>