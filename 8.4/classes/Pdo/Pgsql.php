<?php

return array (
  'type' => 'class',
  'name' => 'Pdo\\Pgsql',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Pdo\\Pgsql',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'Pdo\\Pgsql interface (php.net)',
        'url' => 'https://www.php.net/manual/class.pdo-pgsql.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Pdo',
  'constants' => 
  array (
    'PARAM_NULL' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int PARAM_NULL ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_BOOL' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int PARAM_BOOL ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_INT' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int PARAM_INT ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_STR' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int PARAM_STR ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_LOB' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int PARAM_LOB ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_STMT' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int PARAM_STMT ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_INPUT_OUTPUT' => 
    array (
      'value' => 2147483648,
      'toString' => 'Constant [ public int PARAM_INPUT_OUTPUT ] { 2147483648 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_STR_NATL' => 
    array (
      'value' => 1073741824,
      'toString' => 'Constant [ public int PARAM_STR_NATL ] { 1073741824 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_STR_CHAR' => 
    array (
      'value' => 536870912,
      'toString' => 'Constant [ public int PARAM_STR_CHAR ] { 536870912 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_EVT_ALLOC' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int PARAM_EVT_ALLOC ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_EVT_FREE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int PARAM_EVT_FREE ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_EVT_EXEC_PRE' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int PARAM_EVT_EXEC_PRE ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_EVT_EXEC_POST' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int PARAM_EVT_EXEC_POST ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_EVT_FETCH_PRE' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int PARAM_EVT_FETCH_PRE ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_EVT_FETCH_POST' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int PARAM_EVT_FETCH_POST ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'PARAM_EVT_NORMALIZE' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public int PARAM_EVT_NORMALIZE ] { 6 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_DEFAULT' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int FETCH_DEFAULT ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_LAZY' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int FETCH_LAZY ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_ASSOC' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int FETCH_ASSOC ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_NUM' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int FETCH_NUM ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_BOTH' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int FETCH_BOTH ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_OBJ' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int FETCH_OBJ ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_BOUND' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public int FETCH_BOUND ] { 6 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_COLUMN' => 
    array (
      'value' => 7,
      'toString' => 'Constant [ public int FETCH_COLUMN ] { 7 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_CLASS' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int FETCH_CLASS ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_INTO' => 
    array (
      'value' => 9,
      'toString' => 'Constant [ public int FETCH_INTO ] { 9 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_FUNC' => 
    array (
      'value' => 10,
      'toString' => 'Constant [ public int FETCH_FUNC ] { 10 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_GROUP' => 
    array (
      'value' => 65536,
      'toString' => 'Constant [ public int FETCH_GROUP ] { 65536 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_UNIQUE' => 
    array (
      'value' => 196608,
      'toString' => 'Constant [ public int FETCH_UNIQUE ] { 196608 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_KEY_PAIR' => 
    array (
      'value' => 12,
      'toString' => 'Constant [ public int FETCH_KEY_PAIR ] { 12 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_CLASSTYPE' => 
    array (
      'value' => 262144,
      'toString' => 'Constant [ public int FETCH_CLASSTYPE ] { 262144 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_SERIALIZE' => 
    array (
      'value' => 524288,
      'toString' => 'Constant [ public int FETCH_SERIALIZE ] { 524288 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_PROPS_LATE' => 
    array (
      'value' => 1048576,
      'toString' => 'Constant [ public int FETCH_PROPS_LATE ] { 1048576 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_NAMED' => 
    array (
      'value' => 11,
      'toString' => 'Constant [ public int FETCH_NAMED ] { 11 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_AUTOCOMMIT' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int ATTR_AUTOCOMMIT ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_PREFETCH' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int ATTR_PREFETCH ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_TIMEOUT' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int ATTR_TIMEOUT ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_ERRMODE' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int ATTR_ERRMODE ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_SERVER_VERSION' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int ATTR_SERVER_VERSION ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_CLIENT_VERSION' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int ATTR_CLIENT_VERSION ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_SERVER_INFO' => 
    array (
      'value' => 6,
      'toString' => 'Constant [ public int ATTR_SERVER_INFO ] { 6 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_CONNECTION_STATUS' => 
    array (
      'value' => 7,
      'toString' => 'Constant [ public int ATTR_CONNECTION_STATUS ] { 7 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_CASE' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int ATTR_CASE ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_CURSOR_NAME' => 
    array (
      'value' => 9,
      'toString' => 'Constant [ public int ATTR_CURSOR_NAME ] { 9 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_CURSOR' => 
    array (
      'value' => 10,
      'toString' => 'Constant [ public int ATTR_CURSOR ] { 10 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_ORACLE_NULLS' => 
    array (
      'value' => 11,
      'toString' => 'Constant [ public int ATTR_ORACLE_NULLS ] { 11 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_PERSISTENT' => 
    array (
      'value' => 12,
      'toString' => 'Constant [ public int ATTR_PERSISTENT ] { 12 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_STATEMENT_CLASS' => 
    array (
      'value' => 13,
      'toString' => 'Constant [ public int ATTR_STATEMENT_CLASS ] { 13 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_FETCH_TABLE_NAMES' => 
    array (
      'value' => 14,
      'toString' => 'Constant [ public int ATTR_FETCH_TABLE_NAMES ] { 14 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_FETCH_CATALOG_NAMES' => 
    array (
      'value' => 15,
      'toString' => 'Constant [ public int ATTR_FETCH_CATALOG_NAMES ] { 15 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_DRIVER_NAME' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int ATTR_DRIVER_NAME ] { 16 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_STRINGIFY_FETCHES' => 
    array (
      'value' => 17,
      'toString' => 'Constant [ public int ATTR_STRINGIFY_FETCHES ] { 17 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_MAX_COLUMN_LEN' => 
    array (
      'value' => 18,
      'toString' => 'Constant [ public int ATTR_MAX_COLUMN_LEN ] { 18 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_EMULATE_PREPARES' => 
    array (
      'value' => 20,
      'toString' => 'Constant [ public int ATTR_EMULATE_PREPARES ] { 20 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_DEFAULT_FETCH_MODE' => 
    array (
      'value' => 19,
      'toString' => 'Constant [ public int ATTR_DEFAULT_FETCH_MODE ] { 19 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_DEFAULT_STR_PARAM' => 
    array (
      'value' => 21,
      'toString' => 'Constant [ public int ATTR_DEFAULT_STR_PARAM ] { 21 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERRMODE_SILENT' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int ERRMODE_SILENT ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERRMODE_WARNING' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int ERRMODE_WARNING ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERRMODE_EXCEPTION' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int ERRMODE_EXCEPTION ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'CASE_NATURAL' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int CASE_NATURAL ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'CASE_LOWER' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int CASE_LOWER ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'CASE_UPPER' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int CASE_UPPER ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'NULL_NATURAL' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int NULL_NATURAL ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'NULL_EMPTY_STRING' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int NULL_EMPTY_STRING ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'NULL_TO_STRING' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int NULL_TO_STRING ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ERR_NONE' => 
    array (
      'value' => '00000',
      'toString' => 'Constant [ public string ERR_NONE ] { 00000 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'string',
    ),
    'FETCH_ORI_NEXT' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int FETCH_ORI_NEXT ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_ORI_PRIOR' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int FETCH_ORI_PRIOR ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_ORI_FIRST' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int FETCH_ORI_FIRST ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_ORI_LAST' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int FETCH_ORI_LAST ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_ORI_ABS' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int FETCH_ORI_ABS ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'FETCH_ORI_REL' => 
    array (
      'value' => 5,
      'toString' => 'Constant [ public int FETCH_ORI_REL ] { 5 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'CURSOR_FWDONLY' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int CURSOR_FWDONLY ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'CURSOR_SCROLL' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int CURSOR_SCROLL ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'DBLIB_ATTR_CONNECTION_TIMEOUT' => 
    array (
      'value' => 1000,
      'toString' => 'Constant [ public int DBLIB_ATTR_CONNECTION_TIMEOUT ] { 1000 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DBLIB_ATTR_QUERY_TIMEOUT' => 
    array (
      'value' => 1001,
      'toString' => 'Constant [ public int DBLIB_ATTR_QUERY_TIMEOUT ] { 1001 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DBLIB_ATTR_STRINGIFY_UNIQUEIDENTIFIER' => 
    array (
      'value' => 1002,
      'toString' => 'Constant [ public int DBLIB_ATTR_STRINGIFY_UNIQUEIDENTIFIER ] { 1002 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DBLIB_ATTR_VERSION' => 
    array (
      'value' => 1003,
      'toString' => 'Constant [ public int DBLIB_ATTR_VERSION ] { 1003 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DBLIB_ATTR_TDS_VERSION' => 
    array (
      'value' => 1004,
      'toString' => 'Constant [ public int DBLIB_ATTR_TDS_VERSION ] { 1004 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DBLIB_ATTR_SKIP_EMPTY_ROWSETS' => 
    array (
      'value' => 1005,
      'toString' => 'Constant [ public int DBLIB_ATTR_SKIP_EMPTY_ROWSETS ] { 1005 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'DBLIB_ATTR_DATETIME_CONVERT' => 
    array (
      'value' => 1006,
      'toString' => 'Constant [ public int DBLIB_ATTR_DATETIME_CONVERT ] { 1006 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_USE_BUFFERED_QUERY' => 
    array (
      'value' => 1000,
      'toString' => 'Constant [ public int MYSQL_ATTR_USE_BUFFERED_QUERY ] { 1000 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_LOCAL_INFILE' => 
    array (
      'value' => 1001,
      'toString' => 'Constant [ public int MYSQL_ATTR_LOCAL_INFILE ] { 1001 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_INIT_COMMAND' => 
    array (
      'value' => 1002,
      'toString' => 'Constant [ public int MYSQL_ATTR_INIT_COMMAND ] { 1002 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_COMPRESS' => 
    array (
      'value' => 1003,
      'toString' => 'Constant [ public int MYSQL_ATTR_COMPRESS ] { 1003 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_DIRECT_QUERY' => 
    array (
      'value' => 1004,
      'toString' => 'Constant [ public int MYSQL_ATTR_DIRECT_QUERY ] { 1004 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_FOUND_ROWS' => 
    array (
      'value' => 1005,
      'toString' => 'Constant [ public int MYSQL_ATTR_FOUND_ROWS ] { 1005 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_IGNORE_SPACE' => 
    array (
      'value' => 1006,
      'toString' => 'Constant [ public int MYSQL_ATTR_IGNORE_SPACE ] { 1006 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_SSL_KEY' => 
    array (
      'value' => 1007,
      'toString' => 'Constant [ public int MYSQL_ATTR_SSL_KEY ] { 1007 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_SSL_CERT' => 
    array (
      'value' => 1008,
      'toString' => 'Constant [ public int MYSQL_ATTR_SSL_CERT ] { 1008 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_SSL_CA' => 
    array (
      'value' => 1009,
      'toString' => 'Constant [ public int MYSQL_ATTR_SSL_CA ] { 1009 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_SSL_CAPATH' => 
    array (
      'value' => 1010,
      'toString' => 'Constant [ public int MYSQL_ATTR_SSL_CAPATH ] { 1010 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_SSL_CIPHER' => 
    array (
      'value' => 1011,
      'toString' => 'Constant [ public int MYSQL_ATTR_SSL_CIPHER ] { 1011 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_SERVER_PUBLIC_KEY' => 
    array (
      'value' => 1012,
      'toString' => 'Constant [ public int MYSQL_ATTR_SERVER_PUBLIC_KEY ] { 1012 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_MULTI_STATEMENTS' => 
    array (
      'value' => 1013,
      'toString' => 'Constant [ public int MYSQL_ATTR_MULTI_STATEMENTS ] { 1013 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_SSL_VERIFY_SERVER_CERT' => 
    array (
      'value' => 1014,
      'toString' => 'Constant [ public int MYSQL_ATTR_SSL_VERIFY_SERVER_CERT ] { 1014 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MYSQL_ATTR_LOCAL_INFILE_DIRECTORY' => 
    array (
      'value' => 1015,
      'toString' => 'Constant [ public int MYSQL_ATTR_LOCAL_INFILE_DIRECTORY ] { 1015 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ODBC_ATTR_USE_CURSOR_LIBRARY' => 
    array (
      'value' => 1000,
      'toString' => 'Constant [ public int ODBC_ATTR_USE_CURSOR_LIBRARY ] { 1000 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ODBC_ATTR_ASSUME_UTF8' => 
    array (
      'value' => 1001,
      'toString' => 'Constant [ public int ODBC_ATTR_ASSUME_UTF8 ] { 1001 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ODBC_SQL_USE_IF_NEEDED' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int ODBC_SQL_USE_IF_NEEDED ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ODBC_SQL_USE_DRIVER' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int ODBC_SQL_USE_DRIVER ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ODBC_SQL_USE_ODBC' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int ODBC_SQL_USE_ODBC ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'PGSQL_ATTR_DISABLE_PREPARES' => 
    array (
      'value' => 1000,
      'toString' => 'Constant [ public int PGSQL_ATTR_DISABLE_PREPARES ] { 1000 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'PGSQL_TRANSACTION_IDLE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int PGSQL_TRANSACTION_IDLE ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'PGSQL_TRANSACTION_ACTIVE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int PGSQL_TRANSACTION_ACTIVE ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'PGSQL_TRANSACTION_INTRANS' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int PGSQL_TRANSACTION_INTRANS ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'PGSQL_TRANSACTION_INERROR' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int PGSQL_TRANSACTION_INERROR ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'PGSQL_TRANSACTION_UNKNOWN' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int PGSQL_TRANSACTION_UNKNOWN ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ATTR_DISABLE_PREPARES' => 
    array (
      'value' => 1000,
      'toString' => 'Constant [ public int ATTR_DISABLE_PREPARES ] { 1000 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'ATTR_RESULT_MEMORY_SIZE' => 
    array (
      'value' => 1001,
      'toString' => 'Constant [ public int ATTR_RESULT_MEMORY_SIZE ] { 1001 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TRANSACTION_IDLE' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int TRANSACTION_IDLE ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TRANSACTION_ACTIVE' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int TRANSACTION_ACTIVE ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TRANSACTION_INTRANS' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int TRANSACTION_INTRANS ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TRANSACTION_INERROR' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int TRANSACTION_INERROR ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TRANSACTION_UNKNOWN' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int TRANSACTION_UNKNOWN ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
  ),
  'methods' => 
  array (
    'escapeIdentifier' => 
    array (
      'name' => 'escapeIdentifier',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
        'input' => 
        array (
          'position' => 0,
          'name' => 'input',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'copyFromArray' => 
    array (
      'name' => 'copyFromArray',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
        'tableName' => 
        array (
          'position' => 0,
          'name' => 'tableName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 1,
          'name' => 'rows',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'separator' => 
        array (
          'position' => 2,
          'name' => 'separator',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nullAs' => 
        array (
          'position' => 3,
          'name' => 'nullAs',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fields' => 
        array (
          'position' => 4,
          'name' => 'fields',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'copyFromFile' => 
    array (
      'name' => 'copyFromFile',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
        'tableName' => 
        array (
          'position' => 0,
          'name' => 'tableName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'filename' => 
        array (
          'position' => 1,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'separator' => 
        array (
          'position' => 2,
          'name' => 'separator',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nullAs' => 
        array (
          'position' => 3,
          'name' => 'nullAs',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fields' => 
        array (
          'position' => 4,
          'name' => 'fields',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'copyToArray' => 
    array (
      'name' => 'copyToArray',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
        'tableName' => 
        array (
          'position' => 0,
          'name' => 'tableName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'separator' => 
        array (
          'position' => 1,
          'name' => 'separator',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nullAs' => 
        array (
          'position' => 2,
          'name' => 'nullAs',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fields' => 
        array (
          'position' => 3,
          'name' => 'fields',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'copyToFile' => 
    array (
      'name' => 'copyToFile',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
        'tableName' => 
        array (
          'position' => 0,
          'name' => 'tableName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'filename' => 
        array (
          'position' => 1,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'separator' => 
        array (
          'position' => 2,
          'name' => 'separator',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nullAs' => 
        array (
          'position' => 3,
          'name' => 'nullAs',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fields' => 
        array (
          'position' => 4,
          'name' => 'fields',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lobCreate' => 
    array (
      'name' => 'lobCreate',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
      ),
      'return_type' => 'string|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lobOpen' => 
    array (
      'name' => 'lobOpen',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
        'oid' => 
        array (
          'position' => 0,
          'name' => 'oid',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mode' => 
        array (
          'position' => 1,
          'name' => 'mode',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lobUnlink' => 
    array (
      'name' => 'lobUnlink',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
        'oid' => 
        array (
          'position' => 0,
          'name' => 'oid',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getNotify' => 
    array (
      'name' => 'getNotify',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
        'fetchMode' => 
        array (
          'position' => 0,
          'name' => 'fetchMode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PDO::FETCH_DEFAULT',
        ),
        'timeoutMilliseconds' => 
        array (
          'position' => 1,
          'name' => 'timeoutMilliseconds',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|false',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPid' => 
    array (
      'name' => 'getPid',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setNoticeCallback' => 
    array (
      'name' => 'setNoticeCallback',
      'class' => 'Pdo\\Pgsql',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => '?callable',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'PDO',
      'parameters' => 
      array (
        'dsn' => 
        array (
          'position' => 0,
          'name' => 'dsn',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'username' => 
        array (
          'position' => 1,
          'name' => 'username',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'password' => 
        array (
          'position' => 2,
          'name' => 'password',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 3,
          'name' => 'options',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'connect' => 
    array (
      'name' => 'connect',
      'class' => 'PDO',
      'parameters' => 
      array (
        'dsn' => 
        array (
          'position' => 0,
          'name' => 'dsn',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'username' => 
        array (
          'position' => 1,
          'name' => 'username',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'password' => 
        array (
          'position' => 2,
          'name' => 'password',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 3,
          'name' => 'options',
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'beginTransaction' => 
    array (
      'name' => 'beginTransaction',
      'class' => 'PDO',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'commit' => 
    array (
      'name' => 'commit',
      'class' => 'PDO',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'errorCode' => 
    array (
      'name' => 'errorCode',
      'class' => 'PDO',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'errorInfo' => 
    array (
      'name' => 'errorInfo',
      'class' => 'PDO',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'exec' => 
    array (
      'name' => 'exec',
      'class' => 'PDO',
      'parameters' => 
      array (
        'statement' => 
        array (
          'position' => 0,
          'name' => 'statement',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAttribute' => 
    array (
      'name' => 'getAttribute',
      'class' => 'PDO',
      'parameters' => 
      array (
        'attribute' => 
        array (
          'position' => 0,
          'name' => 'attribute',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAvailableDrivers' => 
    array (
      'name' => 'getAvailableDrivers',
      'class' => 'PDO',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'inTransaction' => 
    array (
      'name' => 'inTransaction',
      'class' => 'PDO',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lastInsertId' => 
    array (
      'name' => 'lastInsertId',
      'class' => 'PDO',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'prepare' => 
    array (
      'name' => 'prepare',
      'class' => 'PDO',
      'parameters' => 
      array (
        'query' => 
        array (
          'position' => 0,
          'name' => 'query',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'query' => 
    array (
      'name' => 'query',
      'class' => 'PDO',
      'parameters' => 
      array (
        'query' => 
        array (
          'position' => 0,
          'name' => 'query',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fetchMode' => 
        array (
          'position' => 1,
          'name' => 'fetchMode',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'fetchModeArgs' => 
        array (
          'position' => 2,
          'name' => 'fetchModeArgs',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'quote' => 
    array (
      'name' => 'quote',
      'class' => 'PDO',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PDO::PARAM_STR',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rollBack' => 
    array (
      'name' => 'rollBack',
      'class' => 'PDO',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setAttribute' => 
    array (
      'name' => 'setAttribute',
      'class' => 'PDO',
      'parameters' => 
      array (
        'attribute' => 
        array (
          'position' => 0,
          'name' => 'attribute',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'pdo_pgsql',
  'toString' => 'Class [ <internal:pdo_pgsql> class Pdo\\Pgsql extends PDO ] {

  - Constants [115] {
    Constant [ public int PARAM_NULL ] { 0 }
    Constant [ public int PARAM_BOOL ] { 5 }
    Constant [ public int PARAM_INT ] { 1 }
    Constant [ public int PARAM_STR ] { 2 }
    Constant [ public int PARAM_LOB ] { 3 }
    Constant [ public int PARAM_STMT ] { 4 }
    Constant [ public int PARAM_INPUT_OUTPUT ] { 2147483648 }
    Constant [ public int PARAM_STR_NATL ] { 1073741824 }
    Constant [ public int PARAM_STR_CHAR ] { 536870912 }
    Constant [ public int PARAM_EVT_ALLOC ] { 0 }
    Constant [ public int PARAM_EVT_FREE ] { 1 }
    Constant [ public int PARAM_EVT_EXEC_PRE ] { 2 }
    Constant [ public int PARAM_EVT_EXEC_POST ] { 3 }
    Constant [ public int PARAM_EVT_FETCH_PRE ] { 4 }
    Constant [ public int PARAM_EVT_FETCH_POST ] { 5 }
    Constant [ public int PARAM_EVT_NORMALIZE ] { 6 }
    Constant [ public int FETCH_DEFAULT ] { 0 }
    Constant [ public int FETCH_LAZY ] { 1 }
    Constant [ public int FETCH_ASSOC ] { 2 }
    Constant [ public int FETCH_NUM ] { 3 }
    Constant [ public int FETCH_BOTH ] { 4 }
    Constant [ public int FETCH_OBJ ] { 5 }
    Constant [ public int FETCH_BOUND ] { 6 }
    Constant [ public int FETCH_COLUMN ] { 7 }
    Constant [ public int FETCH_CLASS ] { 8 }
    Constant [ public int FETCH_INTO ] { 9 }
    Constant [ public int FETCH_FUNC ] { 10 }
    Constant [ public int FETCH_GROUP ] { 65536 }
    Constant [ public int FETCH_UNIQUE ] { 196608 }
    Constant [ public int FETCH_KEY_PAIR ] { 12 }
    Constant [ public int FETCH_CLASSTYPE ] { 262144 }
    Constant [ public int FETCH_SERIALIZE ] { 524288 }
    Constant [ public int FETCH_PROPS_LATE ] { 1048576 }
    Constant [ public int FETCH_NAMED ] { 11 }
    Constant [ public int ATTR_AUTOCOMMIT ] { 0 }
    Constant [ public int ATTR_PREFETCH ] { 1 }
    Constant [ public int ATTR_TIMEOUT ] { 2 }
    Constant [ public int ATTR_ERRMODE ] { 3 }
    Constant [ public int ATTR_SERVER_VERSION ] { 4 }
    Constant [ public int ATTR_CLIENT_VERSION ] { 5 }
    Constant [ public int ATTR_SERVER_INFO ] { 6 }
    Constant [ public int ATTR_CONNECTION_STATUS ] { 7 }
    Constant [ public int ATTR_CASE ] { 8 }
    Constant [ public int ATTR_CURSOR_NAME ] { 9 }
    Constant [ public int ATTR_CURSOR ] { 10 }
    Constant [ public int ATTR_ORACLE_NULLS ] { 11 }
    Constant [ public int ATTR_PERSISTENT ] { 12 }
    Constant [ public int ATTR_STATEMENT_CLASS ] { 13 }
    Constant [ public int ATTR_FETCH_TABLE_NAMES ] { 14 }
    Constant [ public int ATTR_FETCH_CATALOG_NAMES ] { 15 }
    Constant [ public int ATTR_DRIVER_NAME ] { 16 }
    Constant [ public int ATTR_STRINGIFY_FETCHES ] { 17 }
    Constant [ public int ATTR_MAX_COLUMN_LEN ] { 18 }
    Constant [ public int ATTR_EMULATE_PREPARES ] { 20 }
    Constant [ public int ATTR_DEFAULT_FETCH_MODE ] { 19 }
    Constant [ public int ATTR_DEFAULT_STR_PARAM ] { 21 }
    Constant [ public int ERRMODE_SILENT ] { 0 }
    Constant [ public int ERRMODE_WARNING ] { 1 }
    Constant [ public int ERRMODE_EXCEPTION ] { 2 }
    Constant [ public int CASE_NATURAL ] { 0 }
    Constant [ public int CASE_LOWER ] { 2 }
    Constant [ public int CASE_UPPER ] { 1 }
    Constant [ public int NULL_NATURAL ] { 0 }
    Constant [ public int NULL_EMPTY_STRING ] { 1 }
    Constant [ public int NULL_TO_STRING ] { 2 }
    Constant [ public string ERR_NONE ] { 00000 }
    Constant [ public int FETCH_ORI_NEXT ] { 0 }
    Constant [ public int FETCH_ORI_PRIOR ] { 1 }
    Constant [ public int FETCH_ORI_FIRST ] { 2 }
    Constant [ public int FETCH_ORI_LAST ] { 3 }
    Constant [ public int FETCH_ORI_ABS ] { 4 }
    Constant [ public int FETCH_ORI_REL ] { 5 }
    Constant [ public int CURSOR_FWDONLY ] { 0 }
    Constant [ public int CURSOR_SCROLL ] { 1 }
    Constant [ public int DBLIB_ATTR_CONNECTION_TIMEOUT ] { 1000 }
    Constant [ public int DBLIB_ATTR_QUERY_TIMEOUT ] { 1001 }
    Constant [ public int DBLIB_ATTR_STRINGIFY_UNIQUEIDENTIFIER ] { 1002 }
    Constant [ public int DBLIB_ATTR_VERSION ] { 1003 }
    Constant [ public int DBLIB_ATTR_TDS_VERSION ] { 1004 }
    Constant [ public int DBLIB_ATTR_SKIP_EMPTY_ROWSETS ] { 1005 }
    Constant [ public int DBLIB_ATTR_DATETIME_CONVERT ] { 1006 }
    Constant [ public int MYSQL_ATTR_USE_BUFFERED_QUERY ] { 1000 }
    Constant [ public int MYSQL_ATTR_LOCAL_INFILE ] { 1001 }
    Constant [ public int MYSQL_ATTR_INIT_COMMAND ] { 1002 }
    Constant [ public int MYSQL_ATTR_COMPRESS ] { 1003 }
    Constant [ public int MYSQL_ATTR_DIRECT_QUERY ] { 1004 }
    Constant [ public int MYSQL_ATTR_FOUND_ROWS ] { 1005 }
    Constant [ public int MYSQL_ATTR_IGNORE_SPACE ] { 1006 }
    Constant [ public int MYSQL_ATTR_SSL_KEY ] { 1007 }
    Constant [ public int MYSQL_ATTR_SSL_CERT ] { 1008 }
    Constant [ public int MYSQL_ATTR_SSL_CA ] { 1009 }
    Constant [ public int MYSQL_ATTR_SSL_CAPATH ] { 1010 }
    Constant [ public int MYSQL_ATTR_SSL_CIPHER ] { 1011 }
    Constant [ public int MYSQL_ATTR_SERVER_PUBLIC_KEY ] { 1012 }
    Constant [ public int MYSQL_ATTR_MULTI_STATEMENTS ] { 1013 }
    Constant [ public int MYSQL_ATTR_SSL_VERIFY_SERVER_CERT ] { 1014 }
    Constant [ public int MYSQL_ATTR_LOCAL_INFILE_DIRECTORY ] { 1015 }
    Constant [ public int ODBC_ATTR_USE_CURSOR_LIBRARY ] { 1000 }
    Constant [ public int ODBC_ATTR_ASSUME_UTF8 ] { 1001 }
    Constant [ public int ODBC_SQL_USE_IF_NEEDED ] { 0 }
    Constant [ public int ODBC_SQL_USE_DRIVER ] { 2 }
    Constant [ public int ODBC_SQL_USE_ODBC ] { 1 }
    Constant [ public int PGSQL_ATTR_DISABLE_PREPARES ] { 1000 }
    Constant [ public int PGSQL_TRANSACTION_IDLE ] { 0 }
    Constant [ public int PGSQL_TRANSACTION_ACTIVE ] { 1 }
    Constant [ public int PGSQL_TRANSACTION_INTRANS ] { 2 }
    Constant [ public int PGSQL_TRANSACTION_INERROR ] { 3 }
    Constant [ public int PGSQL_TRANSACTION_UNKNOWN ] { 4 }
    Constant [ public int ATTR_DISABLE_PREPARES ] { 1000 }
    Constant [ public int ATTR_RESULT_MEMORY_SIZE ] { 1001 }
    Constant [ public int TRANSACTION_IDLE ] { 0 }
    Constant [ public int TRANSACTION_ACTIVE ] { 1 }
    Constant [ public int TRANSACTION_INTRANS ] { 2 }
    Constant [ public int TRANSACTION_INERROR ] { 3 }
    Constant [ public int TRANSACTION_UNKNOWN ] { 4 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:PDO, inherits PDO> static public method connect ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $dsn ]
        Parameter #1 [ <optional> ?string $username = null ]
        Parameter #2 [ <optional> ?string $password = null ]
        Parameter #3 [ <optional> ?array $options = null ]
      }
      - Return [ static ]
    }

    Method [ <internal:PDO, inherits PDO> static public method getAvailableDrivers ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }
  }

  - Properties [0] {
  }

  - Methods [25] {
    Method [ <internal:pdo_pgsql> public method escapeIdentifier ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $input ]
      }
      - Return [ string ]
    }

    Method [ <internal:pdo_pgsql> public method copyFromArray ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $tableName ]
        Parameter #1 [ <required> array $rows ]
        Parameter #2 [ <optional> string $separator = "\\t" ]
        Parameter #3 [ <optional> string $nullAs = "\\\\\\\\N" ]
        Parameter #4 [ <optional> ?string $fields = null ]
      }
      - Return [ bool ]
    }

    Method [ <internal:pdo_pgsql> public method copyFromFile ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $tableName ]
        Parameter #1 [ <required> string $filename ]
        Parameter #2 [ <optional> string $separator = "\\t" ]
        Parameter #3 [ <optional> string $nullAs = "\\\\\\\\N" ]
        Parameter #4 [ <optional> ?string $fields = null ]
      }
      - Return [ bool ]
    }

    Method [ <internal:pdo_pgsql> public method copyToArray ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $tableName ]
        Parameter #1 [ <optional> string $separator = "\\t" ]
        Parameter #2 [ <optional> string $nullAs = "\\\\\\\\N" ]
        Parameter #3 [ <optional> ?string $fields = null ]
      }
      - Return [ array|false ]
    }

    Method [ <internal:pdo_pgsql> public method copyToFile ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $tableName ]
        Parameter #1 [ <required> string $filename ]
        Parameter #2 [ <optional> string $separator = "\\t" ]
        Parameter #3 [ <optional> string $nullAs = "\\\\\\\\N" ]
        Parameter #4 [ <optional> ?string $fields = null ]
      }
      - Return [ bool ]
    }

    Method [ <internal:pdo_pgsql> public method lobCreate ] {

      - Parameters [0] {
      }
      - Return [ string|false ]
    }

    Method [ <internal:pdo_pgsql> public method lobOpen ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $oid ]
        Parameter #1 [ <optional> string $mode = "rb" ]
      }
    }

    Method [ <internal:pdo_pgsql> public method lobUnlink ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $oid ]
      }
      - Return [ bool ]
    }

    Method [ <internal:pdo_pgsql> public method getNotify ] {

      - Parameters [2] {
        Parameter #0 [ <optional> int $fetchMode = PDO::FETCH_DEFAULT ]
        Parameter #1 [ <optional> int $timeoutMilliseconds = 0 ]
      }
      - Return [ array|false ]
    }

    Method [ <internal:pdo_pgsql> public method getPid ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:pdo_pgsql> public method setNoticeCallback ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?callable $callback ]
      }
      - Return [ void ]
    }

    Method [ <internal:PDO, inherits PDO, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $dsn ]
        Parameter #1 [ <optional> ?string $username = null ]
        Parameter #2 [ <optional> ?string $password = null ]
        Parameter #3 [ <optional> ?array $options = null ]
      }
    }

    Method [ <internal:PDO, inherits PDO> public method beginTransaction ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO, inherits PDO> public method commit ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO, inherits PDO> public method errorCode ] {

      - Parameters [0] {
      }
      - Tentative return [ ?string ]
    }

    Method [ <internal:PDO, inherits PDO> public method errorInfo ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:PDO, inherits PDO> public method exec ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $statement ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:PDO, inherits PDO> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $attribute ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:PDO, inherits PDO> public method inTransaction ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO, inherits PDO> public method lastInsertId ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $name = null ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:PDO, inherits PDO> public method prepare ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $query ]
        Parameter #1 [ <optional> array $options = [] ]
      }
      - Tentative return [ PDOStatement|false ]
    }

    Method [ <internal:PDO, inherits PDO> public method query ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $query ]
        Parameter #1 [ <optional> ?int $fetchMode = null ]
        Parameter #2 [ <optional> mixed ...$fetchModeArgs ]
      }
      - Tentative return [ PDOStatement|false ]
    }

    Method [ <internal:PDO, inherits PDO> public method quote ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> int $type = PDO::PARAM_STR ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:PDO, inherits PDO> public method rollBack ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO, inherits PDO> public method setAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $attribute ]
        Parameter #1 [ <required> mixed $value ]
      }
      - Tentative return [ bool ]
    }
  }
}
',
  'modifiers' => 0,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
