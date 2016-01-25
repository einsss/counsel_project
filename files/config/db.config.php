<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysql_innodb',
    'db_port' => '3306',
    'db_hostname' => '127.0.0.1',
    'db_userid' => 'root',
    'db_password' => 'withred1023',
    'db_database' => 'counsel',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysql_innodb',
      'db_port' => '3306',
      'db_hostname' => '127.0.0.1',
      'db_userid' => 'root',
      'db_password' => 'withred1023',
      'db_database' => 'counsel',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'http://xe:8081/',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'N',
  'time_zone' => '-0800',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => '127.0.0.1',
  ),
);
