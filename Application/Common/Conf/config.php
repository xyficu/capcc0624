<?php
return array(
	 //'配置项'=>'配置值'
    'TMPL_L_DELIM'=>'<{',
    'TMPL_R_DELIM'=>'}>',
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'localhost',
    'DB_NAME'=>'capcc',
    'DB_USER'=>'sq_capcccomcn',
    'DB_PWD'=>'capcccomcn',
    'DB_PORT'=>'',
    'DB_PREFIX'=>'',
    'SHOW_PAGE_TRACE'=>TRUE,
    //'LAYOUT_ON'=>true,
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
    'DEFAULT_MODULE'       =>    'Home',  // 默认模块
    'URL_DENY_SUFFIX'       =>  'ico|png|gif|jpg', // URL禁止访问的后缀设置
   // 'ERROR_MESSAGE'         =>  '页面错误！请返回主页<a href="http://localhost/capcc0624">去主页</a>',//错误显示信息,非调试模式有效

    // 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.163.com',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'wx_yhzg@163.com',//你的邮箱名
    'MAIL_FROM' =>'wx_yhzg@163.com',//发件人地址
    'MAIL_FROMNAME'=>'中国运河网',//发件人姓名
    'MAIL_PASSWORD' =>'wvjbbnqonorzbclp',//邮箱密码 网易授权密码
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件


);