<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl129_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl129_argument'}->checkFilter('number');
${'menu_item_srl129_argument'}->checkNotNull();
if(!${'menu_item_srl129_argument'}->isValid()) return ${'menu_item_srl129_argument'}->getErrorMessage();
if(${'menu_item_srl129_argument'} !== null) ${'menu_item_srl129_argument'}->setColumnType('number');

${'parent_srl130_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl130_argument'}->checkFilter('number');
${'parent_srl130_argument'}->ensureDefaultValue('0');
if(!${'parent_srl130_argument'}->isValid()) return ${'parent_srl130_argument'}->getErrorMessage();
if(${'parent_srl130_argument'} !== null) ${'parent_srl130_argument'}->setColumnType('number');

${'menu_srl131_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl131_argument'}->checkFilter('number');
${'menu_srl131_argument'}->checkNotNull();
if(!${'menu_srl131_argument'}->isValid()) return ${'menu_srl131_argument'}->getErrorMessage();
if(${'menu_srl131_argument'} !== null) ${'menu_srl131_argument'}->setColumnType('number');

${'name132_argument'} = new Argument('name', $args->{'name'});
${'name132_argument'}->checkNotNull();
if(!${'name132_argument'}->isValid()) return ${'name132_argument'}->getErrorMessage();
if(${'name132_argument'} !== null) ${'name132_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc133_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc133_argument'}->isValid()) return ${'desc133_argument'}->getErrorMessage();
} else
${'desc133_argument'} = NULL;if(${'desc133_argument'} !== null) ${'desc133_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url134_argument'} = new Argument('url', $args->{'url'});
if(!${'url134_argument'}->isValid()) return ${'url134_argument'}->getErrorMessage();
} else
${'url134_argument'} = NULL;if(${'url134_argument'} !== null) ${'url134_argument'}->setColumnType('varchar');

${'is_shortcut135_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut135_argument'}->ensureDefaultValue('N');
${'is_shortcut135_argument'}->checkNotNull();
if(!${'is_shortcut135_argument'}->isValid()) return ${'is_shortcut135_argument'}->getErrorMessage();
if(${'is_shortcut135_argument'} !== null) ${'is_shortcut135_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window136_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window136_argument'}->isValid()) return ${'open_window136_argument'}->getErrorMessage();
} else
${'open_window136_argument'} = NULL;if(${'open_window136_argument'} !== null) ${'open_window136_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand137_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand137_argument'}->isValid()) return ${'expand137_argument'}->getErrorMessage();
} else
${'expand137_argument'} = NULL;if(${'expand137_argument'} !== null) ${'expand137_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn138_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn138_argument'}->isValid()) return ${'normal_btn138_argument'}->getErrorMessage();
} else
${'normal_btn138_argument'} = NULL;if(${'normal_btn138_argument'} !== null) ${'normal_btn138_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn139_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn139_argument'}->isValid()) return ${'hover_btn139_argument'}->getErrorMessage();
} else
${'hover_btn139_argument'} = NULL;if(${'hover_btn139_argument'} !== null) ${'hover_btn139_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn140_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn140_argument'}->isValid()) return ${'active_btn140_argument'}->getErrorMessage();
} else
${'active_btn140_argument'} = NULL;if(${'active_btn140_argument'} !== null) ${'active_btn140_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls141_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls141_argument'}->isValid()) return ${'group_srls141_argument'}->getErrorMessage();
} else
${'group_srls141_argument'} = NULL;if(${'group_srls141_argument'} !== null) ${'group_srls141_argument'}->setColumnType('text');

${'listorder142_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder142_argument'}->checkNotNull();
if(!${'listorder142_argument'}->isValid()) return ${'listorder142_argument'}->getErrorMessage();
if(${'listorder142_argument'} !== null) ${'listorder142_argument'}->setColumnType('number');

${'regdate143_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate143_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate143_argument'}->isValid()) return ${'regdate143_argument'}->getErrorMessage();
if(${'regdate143_argument'} !== null) ${'regdate143_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl129_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl130_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl131_argument'})
,new InsertExpression('`name`', ${'name132_argument'})
,new InsertExpression('`desc`', ${'desc133_argument'})
,new InsertExpression('`url`', ${'url134_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut135_argument'})
,new InsertExpression('`open_window`', ${'open_window136_argument'})
,new InsertExpression('`expand`', ${'expand137_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn138_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn139_argument'})
,new InsertExpression('`active_btn`', ${'active_btn140_argument'})
,new InsertExpression('`group_srls`', ${'group_srls141_argument'})
,new InsertExpression('`listorder`', ${'listorder142_argument'})
,new InsertExpression('`regdate`', ${'regdate143_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>