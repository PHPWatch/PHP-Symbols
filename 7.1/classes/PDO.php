<?php

return array (
  'type' => 'class',
  'name' => 'PDO',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'PDO',
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
        'name' => 'PDO class (php.net)',
        'url' => 'https://www.php.net/manual/class.pdo.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'PARAM_BOOL' => 5,
    'PARAM_NULL' => 0,
    'PARAM_INT' => 1,
    'PARAM_STR' => 2,
    'PARAM_LOB' => 3,
    'PARAM_STMT' => 4,
    'PARAM_INPUT_OUTPUT' => 2147483648,
    'PARAM_EVT_ALLOC' => 0,
    'PARAM_EVT_FREE' => 1,
    'PARAM_EVT_EXEC_PRE' => 2,
    'PARAM_EVT_EXEC_POST' => 3,
    'PARAM_EVT_FETCH_PRE' => 4,
    'PARAM_EVT_FETCH_POST' => 5,
    'PARAM_EVT_NORMALIZE' => 6,
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
    'FB_ATTR_DATE_FORMAT' => 1000,
    'FB_ATTR_TIME_FORMAT' => 1001,
    'FB_ATTR_TIMESTAMP_FORMAT' => 1002,
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
    'SQLITE_DETERMINISTIC' => 2048,
    'SQLSRV_ATTR_ENCODING' => 1000,
    'SQLSRV_ATTR_QUERY_TIMEOUT' => 1001,
    'SQLSRV_ATTR_DIRECT_QUERY' => 1002,
    'SQLSRV_ATTR_CURSOR_SCROLL_TYPE' => 1003,
    'SQLSRV_ATTR_CLIENT_BUFFER_MAX_KB_SIZE' => 1004,
    'SQLSRV_ATTR_FETCHES_NUMERIC_TYPE' => 1005,
    'SQLSRV_ATTR_FETCHES_DATETIME_TYPE' => 1006,
    'SQLSRV_ATTR_FORMAT_DECIMALS' => 1007,
    'SQLSRV_ATTR_DECIMAL_PLACES' => 1008,
    'SQLSRV_ATTR_DATA_CLASSIFICATION' => 1009,
    'SQLSRV_PARAM_OUT_DEFAULT_SIZE' => -1,
    'SQLSRV_ENCODING_DEFAULT' => 1,
    'SQLSRV_ENCODING_SYSTEM' => 3,
    'SQLSRV_ENCODING_BINARY' => 2,
    'SQLSRV_ENCODING_UTF8' => 65001,
    'SQLSRV_CURSOR_STATIC' => 3,
    'SQLSRV_CURSOR_DYNAMIC' => 2,
    'SQLSRV_CURSOR_KEYSET' => 1,
    'SQLSRV_CURSOR_BUFFERED' => 42,
    'SQLSRV_TXN_READ_UNCOMMITTED' => 'READ_UNCOMMITTED',
    'SQLSRV_TXN_READ_COMMITTED' => 'READ_COMMITTED',
    'SQLSRV_TXN_REPEATABLE_READ' => 'REPEATABLE_READ',
    'SQLSRV_TXN_SERIALIZABLE' => 'SERIALIZABLE',
    'SQLSRV_TXN_SNAPSHOT' => 'SNAPSHOT',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'passwd' => 
        array (
          'position' => 2,
          'name' => 'passwd',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 3,
          'name' => 'options',
          'type' => NULL,
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
    'prepare' => 
    array (
      'name' => 'prepare',
      'class' => 'PDO',
      'parameters' => 
      array (
        'statement' => 
        array (
          'position' => 0,
          'name' => 'statement',
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
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
    'exec' => 
    array (
      'name' => 'exec',
      'class' => 'PDO',
      'parameters' => 
      array (
        'query' => 
        array (
          'position' => 0,
          'name' => 'query',
          'type' => NULL,
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
    'query' => 
    array (
      'name' => 'query',
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
        'seqname' => 
        array (
          'position' => 0,
          'name' => 'seqname',
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'paramtype' => 
        array (
          'position' => 1,
          'name' => 'paramtype',
          'type' => NULL,
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
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
    '__sleep' => 
    array (
      'name' => '__sleep',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
