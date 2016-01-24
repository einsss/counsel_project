<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl64_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl64_argument'}->checkFilter('number');
${'member_srl64_argument'}->checkNotNull();
if(!${'member_srl64_argument'}->isValid()) return ${'member_srl64_argument'}->getErrorMessage();
if(${'member_srl64_argument'} !== null) ${'member_srl64_argument'}->setColumnType('number');

${'user_id65_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id65_argument'}->checkFilter('userid');
${'user_id65_argument'}->checkNotNull();
if(!${'user_id65_argument'}->isValid()) return ${'user_id65_argument'}->getErrorMessage();
if(${'user_id65_argument'} !== null) ${'user_id65_argument'}->setColumnType('varchar');

${'email_address66_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address66_argument'}->checkFilter('email');
${'email_address66_argument'}->checkNotNull();
if(!${'email_address66_argument'}->isValid()) return ${'email_address66_argument'}->getErrorMessage();
if(${'email_address66_argument'} !== null) ${'email_address66_argument'}->setColumnType('varchar');

${'password67_argument'} = new Argument('password', $args->{'password'});
${'password67_argument'}->checkNotNull();
if(!${'password67_argument'}->isValid()) return ${'password67_argument'}->getErrorMessage();
if(${'password67_argument'} !== null) ${'password67_argument'}->setColumnType('varchar');

${'email_id68_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id68_argument'}->checkNotNull();
if(!${'email_id68_argument'}->isValid()) return ${'email_id68_argument'}->getErrorMessage();
if(${'email_id68_argument'} !== null) ${'email_id68_argument'}->setColumnType('varchar');

${'email_host69_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host69_argument'}->checkNotNull();
if(!${'email_host69_argument'}->isValid()) return ${'email_host69_argument'}->getErrorMessage();
if(${'email_host69_argument'} !== null) ${'email_host69_argument'}->setColumnType('varchar');

${'user_name70_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name70_argument'}->checkNotNull();
if(!${'user_name70_argument'}->isValid()) return ${'user_name70_argument'}->getErrorMessage();
if(${'user_name70_argument'} !== null) ${'user_name70_argument'}->setColumnType('varchar');

${'nick_name71_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name71_argument'}->checkNotNull();
if(!${'nick_name71_argument'}->isValid()) return ${'nick_name71_argument'}->getErrorMessage();
if(${'nick_name71_argument'} !== null) ${'nick_name71_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question72_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question72_argument'}->isValid()) return ${'find_account_question72_argument'}->getErrorMessage();
} else
${'find_account_question72_argument'} = NULL;if(${'find_account_question72_argument'} !== null) ${'find_account_question72_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer73_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer73_argument'}->isValid()) return ${'find_account_answer73_argument'}->getErrorMessage();
} else
${'find_account_answer73_argument'} = NULL;if(${'find_account_answer73_argument'} !== null) ${'find_account_answer73_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage74_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage74_argument'}->isValid()) return ${'homepage74_argument'}->getErrorMessage();
} else
${'homepage74_argument'} = NULL;if(${'homepage74_argument'} !== null) ${'homepage74_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog75_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog75_argument'}->isValid()) return ${'blog75_argument'}->getErrorMessage();
} else
${'blog75_argument'} = NULL;if(${'blog75_argument'} !== null) ${'blog75_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday76_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday76_argument'}->isValid()) return ${'birthday76_argument'}->getErrorMessage();
} else
${'birthday76_argument'} = NULL;if(${'birthday76_argument'} !== null) ${'birthday76_argument'}->setColumnType('char');

${'allow_mailing77_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing77_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing77_argument'}->isValid()) return ${'allow_mailing77_argument'}->getErrorMessage();
if(${'allow_mailing77_argument'} !== null) ${'allow_mailing77_argument'}->setColumnType('char');

${'allow_message78_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message78_argument'}->ensureDefaultValue('Y');
if(!${'allow_message78_argument'}->isValid()) return ${'allow_message78_argument'}->getErrorMessage();
if(${'allow_message78_argument'} !== null) ${'allow_message78_argument'}->setColumnType('char');

${'denied79_argument'} = new Argument('denied', $args->{'denied'});
${'denied79_argument'}->ensureDefaultValue('N');
if(!${'denied79_argument'}->isValid()) return ${'denied79_argument'}->getErrorMessage();
if(${'denied79_argument'} !== null) ${'denied79_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date80_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date80_argument'}->isValid()) return ${'limit_date80_argument'}->getErrorMessage();
} else
${'limit_date80_argument'} = NULL;if(${'limit_date80_argument'} !== null) ${'limit_date80_argument'}->setColumnType('date');

${'regdate81_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate81_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate81_argument'}->isValid()) return ${'regdate81_argument'}->getErrorMessage();
if(${'regdate81_argument'} !== null) ${'regdate81_argument'}->setColumnType('date');

${'change_password_date82_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date82_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'change_password_date82_argument'}->isValid()) return ${'change_password_date82_argument'}->getErrorMessage();
if(${'change_password_date82_argument'} !== null) ${'change_password_date82_argument'}->setColumnType('date');

${'last_login83_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login83_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_login83_argument'}->isValid()) return ${'last_login83_argument'}->getErrorMessage();
if(${'last_login83_argument'} !== null) ${'last_login83_argument'}->setColumnType('date');

${'is_admin84_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin84_argument'}->ensureDefaultValue('N');
if(!${'is_admin84_argument'}->isValid()) return ${'is_admin84_argument'}->getErrorMessage();
if(${'is_admin84_argument'} !== null) ${'is_admin84_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description85_argument'} = new Argument('description', $args->{'description'});
if(!${'description85_argument'}->isValid()) return ${'description85_argument'}->getErrorMessage();
} else
${'description85_argument'} = NULL;if(${'description85_argument'} !== null) ${'description85_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars86_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars86_argument'}->isValid()) return ${'extra_vars86_argument'}->getErrorMessage();
} else
${'extra_vars86_argument'} = NULL;if(${'extra_vars86_argument'} !== null) ${'extra_vars86_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order87_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order87_argument'}->isValid()) return ${'list_order87_argument'}->getErrorMessage();
} else
${'list_order87_argument'} = NULL;if(${'list_order87_argument'} !== null) ${'list_order87_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl64_argument'})
,new InsertExpression('`user_id`', ${'user_id65_argument'})
,new InsertExpression('`email_address`', ${'email_address66_argument'})
,new InsertExpression('`password`', ${'password67_argument'})
,new InsertExpression('`email_id`', ${'email_id68_argument'})
,new InsertExpression('`email_host`', ${'email_host69_argument'})
,new InsertExpression('`user_name`', ${'user_name70_argument'})
,new InsertExpression('`nick_name`', ${'nick_name71_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question72_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer73_argument'})
,new InsertExpression('`homepage`', ${'homepage74_argument'})
,new InsertExpression('`blog`', ${'blog75_argument'})
,new InsertExpression('`birthday`', ${'birthday76_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing77_argument'})
,new InsertExpression('`allow_message`', ${'allow_message78_argument'})
,new InsertExpression('`denied`', ${'denied79_argument'})
,new InsertExpression('`limit_date`', ${'limit_date80_argument'})
,new InsertExpression('`regdate`', ${'regdate81_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date82_argument'})
,new InsertExpression('`last_login`', ${'last_login83_argument'})
,new InsertExpression('`is_admin`', ${'is_admin84_argument'})
,new InsertExpression('`description`', ${'description85_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars86_argument'})
,new InsertExpression('`list_order`', ${'list_order87_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>