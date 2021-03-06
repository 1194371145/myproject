<?php
return array(
    //模版常量
    'TMPL_PARSE_STRING' => array(
                        '__ADMIN__' => __ROOT__.'/Public/Admin'
                    ),


	//'配置项'=>'配置值'
	///* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'db_oa',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'sp_',    // 数据库表前缀
    //显示跟踪信息
    'SHOW_PAGE_TRACE'=> true,
    //RBAC权限数据信息
    'RBAC_ROLES'=>array(
        1=>'高层管理',
        2=>'中层管理',
        3=>'普通职工'
        ),
    'RBAC_ROLE_AUTHS'=>array(
        1=>'*/*',//拥有全部的权限
        2=>array('Index/*','Email/*','Doc/*','Knowledge/*'),
        3=>array('Index/*','Email/*','Knowledge/*')
        ),
);