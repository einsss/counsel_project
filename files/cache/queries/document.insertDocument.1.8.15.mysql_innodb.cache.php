<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocument");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl202_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl202_argument'}->checkFilter('number');
${'document_srl202_argument'}->checkNotNull();
if(!${'document_srl202_argument'}->isValid()) return ${'document_srl202_argument'}->getErrorMessage();
if(${'document_srl202_argument'} !== null) ${'document_srl202_argument'}->setColumnType('number');

${'module_srl203_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl203_argument'}->checkFilter('number');
${'module_srl203_argument'}->ensureDefaultValue('0');
if(!${'module_srl203_argument'}->isValid()) return ${'module_srl203_argument'}->getErrorMessage();
if(${'module_srl203_argument'} !== null) ${'module_srl203_argument'}->setColumnType('number');

${'category_srl204_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl204_argument'}->checkFilter('number');
${'category_srl204_argument'}->ensureDefaultValue('0');
if(!${'category_srl204_argument'}->isValid()) return ${'category_srl204_argument'}->getErrorMessage();
if(${'category_srl204_argument'} !== null) ${'category_srl204_argument'}->setColumnType('number');

${'lang_code205_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code205_argument'}->ensureDefaultValue('');
if(!${'lang_code205_argument'}->isValid()) return ${'lang_code205_argument'}->getErrorMessage();
if(${'lang_code205_argument'} !== null) ${'lang_code205_argument'}->setColumnType('varchar');

${'is_notice206_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice206_argument'}->ensureDefaultValue('N');
${'is_notice206_argument'}->checkNotNull();
if(!${'is_notice206_argument'}->isValid()) return ${'is_notice206_argument'}->getErrorMessage();
if(${'is_notice206_argument'} !== null) ${'is_notice206_argument'}->setColumnType('char');

${'title207_argument'} = new Argument('title', $args->{'title'});
${'title207_argument'}->checkNotNull();
if(!${'title207_argument'}->isValid()) return ${'title207_argument'}->getErrorMessage();
if(${'title207_argument'} !== null) ${'title207_argument'}->setColumnType('varchar');

${'title_bold208_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold208_argument'}->ensureDefaultValue('N');
if(!${'title_bold208_argument'}->isValid()) return ${'title_bold208_argument'}->getErrorMessage();
if(${'title_bold208_argument'} !== null) ${'title_bold208_argument'}->setColumnType('char');

${'title_color209_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color209_argument'}->ensureDefaultValue('N');
if(!${'title_color209_argument'}->isValid()) return ${'title_color209_argument'}->getErrorMessage();
if(${'title_color209_argument'} !== null) ${'title_color209_argument'}->setColumnType('varchar');

${'content210_argument'} = new Argument('content', $args->{'content'});
${'content210_argument'}->checkNotNull();
if(!${'content210_argument'}->isValid()) return ${'content210_argument'}->getErrorMessage();
if(${'content210_argument'} !== null) ${'content210_argument'}->setColumnType('bigtext');

${'readed_count211_argument'} = new Argument('readed_count', $args->{'readed_count'});
${'readed_count211_argument'}->ensureDefaultValue('0');
if(!${'readed_count211_argument'}->isValid()) return ${'readed_count211_argument'}->getErrorMessage();
if(${'readed_count211_argument'} !== null) ${'readed_count211_argument'}->setColumnType('number');

${'blamed_count212_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count212_argument'}->ensureDefaultValue('0');
if(!${'blamed_count212_argument'}->isValid()) return ${'blamed_count212_argument'}->getErrorMessage();
if(${'blamed_count212_argument'} !== null) ${'blamed_count212_argument'}->setColumnType('number');

${'voted_count213_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count213_argument'}->ensureDefaultValue('0');
if(!${'voted_count213_argument'}->isValid()) return ${'voted_count213_argument'}->getErrorMessage();
if(${'voted_count213_argument'} !== null) ${'voted_count213_argument'}->setColumnType('number');

${'comment_count214_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count214_argument'}->ensureDefaultValue('0');
if(!${'comment_count214_argument'}->isValid()) return ${'comment_count214_argument'}->getErrorMessage();
if(${'comment_count214_argument'} !== null) ${'comment_count214_argument'}->setColumnType('number');

${'trackback_count215_argument'} = new Argument('trackback_count', $args->{'trackback_count'});
${'trackback_count215_argument'}->ensureDefaultValue('0');
if(!${'trackback_count215_argument'}->isValid()) return ${'trackback_count215_argument'}->getErrorMessage();
if(${'trackback_count215_argument'} !== null) ${'trackback_count215_argument'}->setColumnType('number');

${'uploaded_count216_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count216_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count216_argument'}->isValid()) return ${'uploaded_count216_argument'}->getErrorMessage();
if(${'uploaded_count216_argument'} !== null) ${'uploaded_count216_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password217_argument'} = new Argument('password', $args->{'password'});
if(!${'password217_argument'}->isValid()) return ${'password217_argument'}->getErrorMessage();
} else
${'password217_argument'} = NULL;if(${'password217_argument'} !== null) ${'password217_argument'}->setColumnType('varchar');

${'nick_name218_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name218_argument'}->checkNotNull();
if(!${'nick_name218_argument'}->isValid()) return ${'nick_name218_argument'}->getErrorMessage();
if(${'nick_name218_argument'} !== null) ${'nick_name218_argument'}->setColumnType('varchar');

${'member_srl219_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl219_argument'}->checkFilter('number');
${'member_srl219_argument'}->ensureDefaultValue('0');
if(!${'member_srl219_argument'}->isValid()) return ${'member_srl219_argument'}->getErrorMessage();
if(${'member_srl219_argument'} !== null) ${'member_srl219_argument'}->setColumnType('number');

${'user_id220_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id220_argument'}->ensureDefaultValue('');
if(!${'user_id220_argument'}->isValid()) return ${'user_id220_argument'}->getErrorMessage();
if(${'user_id220_argument'} !== null) ${'user_id220_argument'}->setColumnType('varchar');

${'user_name221_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name221_argument'}->ensureDefaultValue('');
if(!${'user_name221_argument'}->isValid()) return ${'user_name221_argument'}->getErrorMessage();
if(${'user_name221_argument'} !== null) ${'user_name221_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address222_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address222_argument'}->checkFilter('email');
if(!${'email_address222_argument'}->isValid()) return ${'email_address222_argument'}->getErrorMessage();
} else
${'email_address222_argument'} = NULL;if(${'email_address222_argument'} !== null) ${'email_address222_argument'}->setColumnType('varchar');

${'homepage223_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage223_argument'}->checkFilter('homepage');
${'homepage223_argument'}->ensureDefaultValue('');
if(!${'homepage223_argument'}->isValid()) return ${'homepage223_argument'}->getErrorMessage();
if(${'homepage223_argument'} !== null) ${'homepage223_argument'}->setColumnType('varchar');
if(isset($args->tags)) {
${'tags224_argument'} = new Argument('tags', $args->{'tags'});
if(!${'tags224_argument'}->isValid()) return ${'tags224_argument'}->getErrorMessage();
} else
${'tags224_argument'} = NULL;if(${'tags224_argument'} !== null) ${'tags224_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars225_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars225_argument'}->isValid()) return ${'extra_vars225_argument'}->getErrorMessage();
} else
${'extra_vars225_argument'} = NULL;if(${'extra_vars225_argument'} !== null) ${'extra_vars225_argument'}->setColumnType('text');

${'regdate226_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate226_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate226_argument'}->isValid()) return ${'regdate226_argument'}->getErrorMessage();
if(${'regdate226_argument'} !== null) ${'regdate226_argument'}->setColumnType('date');

${'last_update227_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update227_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update227_argument'}->isValid()) return ${'last_update227_argument'}->getErrorMessage();
if(${'last_update227_argument'} !== null) ${'last_update227_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater228_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater228_argument'}->isValid()) return ${'last_updater228_argument'}->getErrorMessage();
} else
${'last_updater228_argument'} = NULL;if(${'last_updater228_argument'} !== null) ${'last_updater228_argument'}->setColumnType('varchar');

${'ipaddress229_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress229_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress229_argument'}->isValid()) return ${'ipaddress229_argument'}->getErrorMessage();
if(${'ipaddress229_argument'} !== null) ${'ipaddress229_argument'}->setColumnType('varchar');

${'list_order230_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order230_argument'}->ensureDefaultValue('0');
if(!${'list_order230_argument'}->isValid()) return ${'list_order230_argument'}->getErrorMessage();
if(${'list_order230_argument'} !== null) ${'list_order230_argument'}->setColumnType('number');

${'update_order231_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order231_argument'}->ensureDefaultValue('0');
if(!${'update_order231_argument'}->isValid()) return ${'update_order231_argument'}->getErrorMessage();
if(${'update_order231_argument'} !== null) ${'update_order231_argument'}->setColumnType('number');

${'allow_trackback232_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback232_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback232_argument'}->isValid()) return ${'allow_trackback232_argument'}->getErrorMessage();
if(${'allow_trackback232_argument'} !== null) ${'allow_trackback232_argument'}->setColumnType('char');

${'notify_message233_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message233_argument'}->ensureDefaultValue('N');
if(!${'notify_message233_argument'}->isValid()) return ${'notify_message233_argument'}->getErrorMessage();
if(${'notify_message233_argument'} !== null) ${'notify_message233_argument'}->setColumnType('char');

${'status234_argument'} = new Argument('status', $args->{'status'});
${'status234_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status234_argument'}->isValid()) return ${'status234_argument'}->getErrorMessage();
if(${'status234_argument'} !== null) ${'status234_argument'}->setColumnType('varchar');

${'commentStatus235_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus235_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus235_argument'}->isValid()) return ${'commentStatus235_argument'}->getErrorMessage();
if(${'commentStatus235_argument'} !== null) ${'commentStatus235_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl202_argument'})
,new InsertExpression('`module_srl`', ${'module_srl203_argument'})
,new InsertExpression('`category_srl`', ${'category_srl204_argument'})
,new InsertExpression('`lang_code`', ${'lang_code205_argument'})
,new InsertExpression('`is_notice`', ${'is_notice206_argument'})
,new InsertExpression('`title`', ${'title207_argument'})
,new InsertExpression('`title_bold`', ${'title_bold208_argument'})
,new InsertExpression('`title_color`', ${'title_color209_argument'})
,new InsertExpression('`content`', ${'content210_argument'})
,new InsertExpression('`readed_count`', ${'readed_count211_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count212_argument'})
,new InsertExpression('`voted_count`', ${'voted_count213_argument'})
,new InsertExpression('`comment_count`', ${'comment_count214_argument'})
,new InsertExpression('`trackback_count`', ${'trackback_count215_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count216_argument'})
,new InsertExpression('`password`', ${'password217_argument'})
,new InsertExpression('`nick_name`', ${'nick_name218_argument'})
,new InsertExpression('`member_srl`', ${'member_srl219_argument'})
,new InsertExpression('`user_id`', ${'user_id220_argument'})
,new InsertExpression('`user_name`', ${'user_name221_argument'})
,new InsertExpression('`email_address`', ${'email_address222_argument'})
,new InsertExpression('`homepage`', ${'homepage223_argument'})
,new InsertExpression('`tags`', ${'tags224_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars225_argument'})
,new InsertExpression('`regdate`', ${'regdate226_argument'})
,new InsertExpression('`last_update`', ${'last_update227_argument'})
,new InsertExpression('`last_updater`', ${'last_updater228_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress229_argument'})
,new InsertExpression('`list_order`', ${'list_order230_argument'})
,new InsertExpression('`update_order`', ${'update_order231_argument'})
,new InsertExpression('`allow_trackback`', ${'allow_trackback232_argument'})
,new InsertExpression('`notify_message`', ${'notify_message233_argument'})
,new InsertExpression('`status`', ${'status234_argument'})
,new InsertExpression('`comment_status`', ${'commentStatus235_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>