<?php

return [
    'class' => 'yii\db\Connection',
    // 'dsn' => 'mysql:host=127.0.0.1;dbname=solaris',
    'dsn' => 'mysql:host=localhost;port=8889;dbname=solaris;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'tablePrefix'=>'tbl_'
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
