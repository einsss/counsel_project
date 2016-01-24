<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title192_argument'} = new Argument('title', $args->{'title'});
if(!${'title192_argument'}->isValid()) return ${'title192_argument'}->getErrorMessage();
} else
${'title192_argument'} = NULL;if(${'title192_argument'} !== null) ${'title192_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars193_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars193_argument'}->isValid()) return ${'extra_vars193_argument'}->getErrorMessage();
} else
${'extra_vars193_argument'} = NULL;if(${'extra_vars193_argument'} !== null) ${'extra_vars193_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout194_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout194_argument'}->isValid()) return ${'layout194_argument'}->getErrorMessage();
} else
${'layout194_argument'} = NULL;if(${'layout194_argument'} !== null) ${'layout194_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path195_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path195_argument'}->isValid()) return ${'layout_path195_argument'}->getErrorMessage();
} else
${'layout_path195_argument'} = NULL;if(${'layout_path195_argument'} !== null) ${'layout_path195_argument'}->setColumnType('varchar');

${'layout_srl196_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl196_argument'}->checkFilter('number');
${'layout_srl196_argument'}->checkNotNull();
${'layout_srl196_argument'}->createConditionValue();
if(!${'layout_srl196_argument'}->isValid()) return ${'layout_srl196_argument'}->getErrorMessage();
if(${'layout_srl196_argument'} !== null) ${'layout_srl196_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title192_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars193_argument'})
,new UpdateExpression('`layout`', ${'layout194_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path195_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl196_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>