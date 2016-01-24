<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl271_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl271_argument'}->isValid()) return ${'menu_srl271_argument'}->getErrorMessage();
} else
${'menu_srl271_argument'} = NULL;if(${'menu_srl271_argument'} !== null) ${'menu_srl271_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl272_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl272_argument'}->isValid()) return ${'parent_srl272_argument'}->getErrorMessage();
} else
${'parent_srl272_argument'} = NULL;if(${'parent_srl272_argument'} !== null) ${'parent_srl272_argument'}->setColumnType('number');

${'name273_argument'} = new Argument('name', $args->{'name'});
${'name273_argument'}->checkNotNull();
if(!${'name273_argument'}->isValid()) return ${'name273_argument'}->getErrorMessage();
if(${'name273_argument'} !== null) ${'name273_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc274_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc274_argument'}->isValid()) return ${'desc274_argument'}->getErrorMessage();
} else
${'desc274_argument'} = NULL;if(${'desc274_argument'} !== null) ${'desc274_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url275_argument'} = new Argument('url', $args->{'url'});
if(!${'url275_argument'}->isValid()) return ${'url275_argument'}->getErrorMessage();
} else
${'url275_argument'} = NULL;if(${'url275_argument'} !== null) ${'url275_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut276_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut276_argument'}->isValid()) return ${'is_shortcut276_argument'}->getErrorMessage();
} else
${'is_shortcut276_argument'} = NULL;if(${'is_shortcut276_argument'} !== null) ${'is_shortcut276_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window277_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window277_argument'}->isValid()) return ${'open_window277_argument'}->getErrorMessage();
} else
${'open_window277_argument'} = NULL;if(${'open_window277_argument'} !== null) ${'open_window277_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand278_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand278_argument'}->isValid()) return ${'expand278_argument'}->getErrorMessage();
} else
${'expand278_argument'} = NULL;if(${'expand278_argument'} !== null) ${'expand278_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn279_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn279_argument'}->isValid()) return ${'normal_btn279_argument'}->getErrorMessage();
} else
${'normal_btn279_argument'} = NULL;if(${'normal_btn279_argument'} !== null) ${'normal_btn279_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn280_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn280_argument'}->isValid()) return ${'hover_btn280_argument'}->getErrorMessage();
} else
${'hover_btn280_argument'} = NULL;if(${'hover_btn280_argument'} !== null) ${'hover_btn280_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn281_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn281_argument'}->isValid()) return ${'active_btn281_argument'}->getErrorMessage();
} else
${'active_btn281_argument'} = NULL;if(${'active_btn281_argument'} !== null) ${'active_btn281_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls282_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls282_argument'}->isValid()) return ${'group_srls282_argument'}->getErrorMessage();
} else
${'group_srls282_argument'} = NULL;if(${'group_srls282_argument'} !== null) ${'group_srls282_argument'}->setColumnType('text');

${'menu_item_srl283_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl283_argument'}->checkFilter('number');
${'menu_item_srl283_argument'}->checkNotNull();
${'menu_item_srl283_argument'}->createConditionValue();
if(!${'menu_item_srl283_argument'}->isValid()) return ${'menu_item_srl283_argument'}->getErrorMessage();
if(${'menu_item_srl283_argument'} !== null) ${'menu_item_srl283_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl271_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl272_argument'})
,new UpdateExpression('`name`', ${'name273_argument'})
,new UpdateExpression('`desc`', ${'desc274_argument'})
,new UpdateExpression('`url`', ${'url275_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut276_argument'})
,new UpdateExpression('`open_window`', ${'open_window277_argument'})
,new UpdateExpression('`expand`', ${'expand278_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn279_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn280_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn281_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls282_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl283_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>