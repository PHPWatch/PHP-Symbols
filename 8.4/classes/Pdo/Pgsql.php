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
        'name' => 'Pdo\\Pgsql class (php.net)',
        'url' => 'https://www.php.net/manual/class.pdo-pgsql.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'PARAM_NULL' => 0,
    'PARAM_BOOL' => 5,
    'PARAM_INT' => 1,
    'PARAM_STR' => 2,
    'PARAM_LOB' => 3,
    'PARAM_STMT' => 4,
    'PARAM_INPUT_OUTPUT' => 2147483648,
    'PARAM_STR_NATL' => 1073741824,
    'PARAM_STR_CHAR' => 536870912,
    'PARAM_EVT_ALLOC' => 0,
    'PARAM_EVT_FREE' => 1,
    'PARAM_EVT_EXEC_PRE' => 2,
    'PARAM_EVT_EXEC_POST' => 3,
    'PARAM_EVT_FETCH_PRE' => 4,
    'PARAM_EVT_FETCH_POST' => 5,
    'PARAM_EVT_NORMALIZE' => 6,
    'FETCH_DEFAULT' => 0,
    'FETCH_LAZY' => 1,
    'FETCH_ASSOC' => 2,
    'FETCH_NUM' => 3,
    'FETCH_BOTH' => 4,
    'FETCH_OBJ' => 5,
    'FETCH_BOUND' => 6,
    'FETCH_COLUMN' => 7,
    'FETCH_CLASS' => 8,
    'FETCH_INTO' => 9,
    'FETCH_FUNC' => 10,
    'FETCH_GROUP' => 65536,
    'FETCH_UNIQUE' => 196608,
    'FETCH_KEY_PAIR' => 12,
    'FETCH_CLASSTYPE' => 262144,
    'FETCH_SERIALIZE' => 524288,
    'FETCH_PROPS_LATE' => 1048576,
    'FETCH_NAMED' => 11,
    'ATTR_AUTOCOMMIT' => 0,
    'ATTR_PREFETCH' => 1,
    'ATTR_TIMEOUT' => 2,
    'ATTR_ERRMODE' => 3,
    'ATTR_SERVER_VERSION' => 4,
    'ATTR_CLIENT_VERSION' => 5,
    'ATTR_SERVER_INFO' => 6,
    'ATTR_CONNECTION_STATUS' => 7,
    'ATTR_CASE' => 8,
    'ATTR_CURSOR_NAME' => 9,
    'ATTR_CURSOR' => 10,
    'ATTR_ORACLE_NULLS' => 11,
    'ATTR_PERSISTENT' => 12,
    'ATTR_STATEMENT_CLASS' => 13,
    'ATTR_FETCH_TABLE_NAMES' => 14,
    'ATTR_FETCH_CATALOG_NAMES' => 15,
    'ATTR_DRIVER_NAME' => 16,
    'ATTR_STRINGIFY_FETCHES' => 17,
    'ATTR_MAX_COLUMN_LEN' => 18,
    'ATTR_EMULATE_PREPARES' => 20,
    'ATTR_DEFAULT_FETCH_MODE' => 19,
    'ATTR_DEFAULT_STR_PARAM' => 21,
    'ERRMODE_SILENT' => 0,
    'ERRMODE_WARNING' => 1,
    'ERRMODE_EXCEPTION' => 2,
    'CASE_NATURAL' => 0,
    'CASE_LOWER' => 2,
    'CASE_UPPER' => 1,
    'NULL_NATURAL' => 0,
    'NULL_EMPTY_STRING' => 1,
    'NULL_TO_STRING' => 2,
    'ERR_NONE' => '00000',
    'FETCH_ORI_NEXT' => 0,
    'FETCH_ORI_PRIOR' => 1,
    'FETCH_ORI_FIRST' => 2,
    'FETCH_ORI_LAST' => 3,
    'FETCH_ORI_ABS' => 4,
    'FETCH_ORI_REL' => 5,
    'CURSOR_FWDONLY' => 0,
    'CURSOR_SCROLL' => 1,
    'DBLIB_ATTR_CONNECTION_TIMEOUT' => 1000,
    'DBLIB_ATTR_QUERY_TIMEOUT' => 1001,
    'DBLIB_ATTR_STRINGIFY_UNIQUEIDENTIFIER' => 1002,
    'DBLIB_ATTR_VERSION' => 1003,
    'DBLIB_ATTR_TDS_VERSION' => 1004,
    'DBLIB_ATTR_SKIP_EMPTY_ROWSETS' => 1005,
    'DBLIB_ATTR_DATETIME_CONVERT' => 1006,
    'FB_ATTR_DATE_FORMAT' => 1000,
    'FB_ATTR_TIME_FORMAT' => 1001,
    'FB_ATTR_TIMESTAMP_FORMAT' => 1002,
    'FB_TRANSACTION_ISOLATION_LEVEL' => 1003,
    'FB_READ_COMMITTED' => 1004,
    'FB_REPEATABLE_READ' => 1005,
    'FB_SERIALIZABLE' => 1006,
    'FB_WRITABLE_TRANSACTION' => 1007,
    'MYSQL_ATTR_USE_BUFFERED_QUERY' => 1000,
    'MYSQL_ATTR_LOCAL_INFILE' => 1001,
    'MYSQL_ATTR_INIT_COMMAND' => 1002,
    'MYSQL_ATTR_COMPRESS' => 1003,
    'MYSQL_ATTR_DIRECT_QUERY' => 1004,
    'MYSQL_ATTR_FOUND_ROWS' => 1005,
    'MYSQL_ATTR_IGNORE_SPACE' => 1006,
    'MYSQL_ATTR_SSL_KEY' => 1007,
    'MYSQL_ATTR_SSL_CERT' => 1008,
    'MYSQL_ATTR_SSL_CA' => 1009,
    'MYSQL_ATTR_SSL_CAPATH' => 1010,
    'MYSQL_ATTR_SSL_CIPHER' => 1011,
    'MYSQL_ATTR_SERVER_PUBLIC_KEY' => 1012,
    'MYSQL_ATTR_MULTI_STATEMENTS' => 1013,
    'MYSQL_ATTR_SSL_VERIFY_SERVER_CERT' => 1014,
    'MYSQL_ATTR_LOCAL_INFILE_DIRECTORY' => 1015,
    'ODBC_ATTR_USE_CURSOR_LIBRARY' => 1000,
    'ODBC_ATTR_ASSUME_UTF8' => 1001,
    'ODBC_SQL_USE_IF_NEEDED' => 0,
    'ODBC_SQL_USE_DRIVER' => 2,
    'ODBC_SQL_USE_ODBC' => 1,
    'PGSQL_ATTR_DISABLE_PREPARES' => 1000,
    'PGSQL_TRANSACTION_IDLE' => 0,
    'PGSQL_TRANSACTION_ACTIVE' => 1,
    'PGSQL_TRANSACTION_INTRANS' => 2,
    'PGSQL_TRANSACTION_INERROR' => 3,
    'PGSQL_TRANSACTION_UNKNOWN' => 4,
    'PGSQL_ATTR_RESULT_MEMORY_SIZE' => 1001,
    'ATTR_DISABLE_PREPARES' => 1000,
    'ATTR_RESULT_MEMORY_SIZE' => 1001,
    'TRANSACTION_IDLE' => 0,
    'TRANSACTION_ACTIVE' => 1,
    'TRANSACTION_INTRANS' => 2,
    'TRANSACTION_INERROR' => 3,
    'TRANSACTION_UNKNOWN' => 4,
  ),
  'properties' => 
  array (
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => '	',
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
          'default_value' => '\\\\N',
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => '	',
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
          'default_value' => '\\\\N',
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => '	',
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
          'default_value' => '\\\\N',
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => '	',
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
          'default_value' => '\\\\N',
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => 'rb',
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
          'default_value' => NULL,
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
          'default_value' => 0,
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
          'default_value' => 0,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => 
          array (
          ),
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
          'default_value' => 2,
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
          'default_value' => NULL,
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
          'default_value' => NULL,
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
);
