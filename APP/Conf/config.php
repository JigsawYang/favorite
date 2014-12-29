<?php
return array(
    //分组配置
	'APP_GROUP_LIST' => 'Index,Admin',
    'DEFAULT_GROUP' => 'Index',
    'APP_GROUP_MODE' => 1,
    'APP_GROUP_PATH' => 'Modules',
    'LOAD_EXT_CONFIG' => 'verify',

    //数据库配置
    'DB_TYPE' => 'mysql',
    'DB_HOST' => '127.0.0.1',
    'DB_PORT' => '3306',
    'DB_NAME' => 'favorite',
    'DB_USER' => 'root',
    'DB_PWD' => '2103189',
    'DB_PREFIX' => 'fw_',

    'USER_AUTH_KEY' => 'uid',

//    'SHOW_PAGE_TRACE' => true,
    'TMPL_EXCEPTION_FILE' => './APP/Tpl/404.html',
    'TMPL_ACTION_ERROR' => './APP/Tpl/error.html',
    'TMPL_ACTION_SUCCESS' => './APP/Tpl/success.html',

//  路由配置
    'URL_MODEL' => 2,

    //memcache
    'DATA_CACHE_TYPE' => 'Memcache',
    'MEMCACHE_HOST' => '127.0.0.1',
    'MEMCACHE_PORT' => 11211



);
?>