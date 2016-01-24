<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin38_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin38_argument'}->createConditionValue();
if(!${'is_admin38_argument'}->isValid()) return ${'is_admin38_argument'}->getErrorMessage();
} else
${'is_admin38_argument'} = NULL;if(${'is_admin38_argument'} !== null) ${'is_admin38_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied39_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied39_argument'}->createConditionValue();
if(!${'is_denied39_argument'}->isValid()) return ${'is_denied39_argument'}->getErrorMessage();
} else
${'is_denied39_argument'} = NULL;if(${'is_denied39_argument'} !== null) ${'is_denied39_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls40_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls40_argument'}->createConditionValue();
if(!${'member_srls40_argument'}->isValid()) return ${'member_srls40_argument'}->getErrorMessage();
} else
${'member_srls40_argument'} = NULL;if(${'member_srls40_argument'} !== null) ${'member_srls40_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id41_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id41_argument'}->createConditionValue();
if(!${'s_user_id41_argument'}->isValid()) return ${'s_user_id41_argument'}->getErrorMessage();
} else
${'s_user_id41_argument'} = NULL;if(${'s_user_id41_argument'} !== null) ${'s_user_id41_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name42_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name42_argument'}->createConditionValue();
if(!${'s_user_name42_argument'}->isValid()) return ${'s_user_name42_argument'}->getErrorMessage();
} else
${'s_user_name42_argument'} = NULL;if(${'s_user_name42_argument'} !== null) ${'s_user_name42_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name43_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name43_argument'}->createConditionValue();
if(!${'s_nick_name43_argument'}->isValid()) return ${'s_nick_name43_argument'}->getErrorMessage();
} else
${'s_nick_name43_argument'} = NULL;if(${'s_nick_name43_argument'} !== null) ${'s_nick_name43_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name44_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name44_argument'}->createConditionValue();
if(!${'html_nick_name44_argument'}->isValid()) return ${'html_nick_name44_argument'}->getErrorMessage();
} else
${'html_nick_name44_argument'} = NULL;if(${'html_nick_name44_argument'} !== null) ${'html_nick_name44_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address45_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address45_argument'}->createConditionValue();
if(!${'s_email_address45_argument'}->isValid()) return ${'s_email_address45_argument'}->getErrorMessage();
} else
${'s_email_address45_argument'} = NULL;if(${'s_email_address45_argument'} !== null) ${'s_email_address45_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday46_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday46_argument'}->createConditionValue();
if(!${'s_birthday46_argument'}->isValid()) return ${'s_birthday46_argument'}->getErrorMessage();
} else
${'s_birthday46_argument'} = NULL;if(${'s_birthday46_argument'} !== null) ${'s_birthday46_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars47_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars47_argument'}->createConditionValue();
if(!${'s_extra_vars47_argument'}->isValid()) return ${'s_extra_vars47_argument'}->getErrorMessage();
} else
${'s_extra_vars47_argument'} = NULL;if(${'s_extra_vars47_argument'} !== null) ${'s_extra_vars47_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate48_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate48_argument'}->createConditionValue();
if(!${'s_regdate48_argument'}->isValid()) return ${'s_regdate48_argument'}->getErrorMessage();
} else
${'s_regdate48_argument'} = NULL;if(${'s_regdate48_argument'} !== null) ${'s_regdate48_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login49_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login49_argument'}->createConditionValue();
if(!${'s_last_login49_argument'}->isValid()) return ${'s_last_login49_argument'}->getErrorMessage();
} else
${'s_last_login49_argument'} = NULL;if(${'s_last_login49_argument'} !== null) ${'s_last_login49_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more50_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more50_argument'}->createConditionValue();
if(!${'s_regdate_more50_argument'}->isValid()) return ${'s_regdate_more50_argument'}->getErrorMessage();
} else
${'s_regdate_more50_argument'} = NULL;if(${'s_regdate_more50_argument'} !== null) ${'s_regdate_more50_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less51_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less51_argument'}->createConditionValue();
if(!${'s_regdate_less51_argument'}->isValid()) return ${'s_regdate_less51_argument'}->getErrorMessage();
} else
${'s_regdate_less51_argument'} = NULL;if(${'s_regdate_less51_argument'} !== null) ${'s_regdate_less51_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more52_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more52_argument'}->createConditionValue();
if(!${'s_last_login_more52_argument'}->isValid()) return ${'s_last_login_more52_argument'}->getErrorMessage();
} else
${'s_last_login_more52_argument'} = NULL;if(${'s_last_login_more52_argument'} !== null) ${'s_last_login_more52_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less53_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less53_argument'}->createConditionValue();
if(!${'s_last_login_less53_argument'}->isValid()) return ${'s_last_login_less53_argument'}->getErrorMessage();
} else
${'s_last_login_less53_argument'} = NULL;if(${'s_last_login_less53_argument'} !== null) ${'s_last_login_less53_argument'}->setColumnType('date');

${'page56_argument'} = new Argument('page', $args->{'page'});
${'page56_argument'}->ensureDefaultValue('1');
if(!${'page56_argument'}->isValid()) return ${'page56_argument'}->getErrorMessage();

${'page_count57_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count57_argument'}->ensureDefaultValue('10');
if(!${'page_count57_argument'}->isValid()) return ${'page_count57_argument'}->getErrorMessage();

${'list_count58_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count58_argument'}->ensureDefaultValue('20');
if(!${'list_count58_argument'}->isValid()) return ${'list_count58_argument'}->getErrorMessage();

${'sort_index54_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index54_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index54_argument'}->isValid()) return ${'sort_index54_argument'}->getErrorMessage();

${'sort_order55_argument'} = new SortArgument('sort_order55', $args->sort_order);
${'sort_order55_argument'}->ensureDefaultValue('asc');
if(!${'sort_order55_argument'}->isValid()) return ${'sort_order55_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin38_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied39_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls40_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id41_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name42_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name43_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name44_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address45_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday46_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars47_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate48_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login49_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more50_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less51_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more52_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less53_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index54_argument'}, $sort_order55_argument)
));
$query->setLimit(new Limit(${'list_count58_argument'}, ${'page56_argument'}, ${'page_count57_argument'}));
return $query; ?>