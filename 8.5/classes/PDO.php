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
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'PDO',
  'toString' => 'Class [ <internal:PDO> class PDO ] {

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
    Constant [ public int FETCH_GROUP ] { 32 }
    Constant [ public int FETCH_UNIQUE ] { 64 }
    Constant [ public int FETCH_KEY_PAIR ] { 12 }
    Constant [ public int FETCH_CLASSTYPE ] { 128 }
    Constant [ public int FETCH_SERIALIZE ] { 512 }
    Constant [ public int FETCH_PROPS_LATE ] { 256 }
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
    Constant [ public int MYSQL_ATTR_DIRECT_QUERY ] { 20 }
    Constant [ public int MYSQL_ATTR_FOUND_ROWS ] { 1004 }
    Constant [ public int MYSQL_ATTR_IGNORE_SPACE ] { 1005 }
    Constant [ public int MYSQL_ATTR_SSL_KEY ] { 1006 }
    Constant [ public int MYSQL_ATTR_SSL_CERT ] { 1007 }
    Constant [ public int MYSQL_ATTR_SSL_CA ] { 1008 }
    Constant [ public int MYSQL_ATTR_SSL_CAPATH ] { 1009 }
    Constant [ public int MYSQL_ATTR_SSL_CIPHER ] { 1010 }
    Constant [ public int MYSQL_ATTR_SERVER_PUBLIC_KEY ] { 1011 }
    Constant [ public int MYSQL_ATTR_MULTI_STATEMENTS ] { 1012 }
    Constant [ public int MYSQL_ATTR_SSL_VERIFY_SERVER_CERT ] { 1013 }
    Constant [ public int MYSQL_ATTR_LOCAL_INFILE_DIRECTORY ] { 1014 }
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
    Constant [ public int SQLITE_DETERMINISTIC ] { 2048 }
    Constant [ public int SQLITE_ATTR_OPEN_FLAGS ] { 1000 }
    Constant [ public int SQLITE_OPEN_READONLY ] { 1 }
    Constant [ public int SQLITE_OPEN_READWRITE ] { 2 }
    Constant [ public int SQLITE_OPEN_CREATE ] { 4 }
    Constant [ public int SQLITE_ATTR_READONLY_STATEMENT ] { 1001 }
    Constant [ public int SQLITE_ATTR_EXTENDED_RESULT_CODES ] { 1002 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:PDO> static public method connect ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $dsn ]
        Parameter #1 [ <optional> ?string $username = null ]
        Parameter #2 [ <optional> ?string $password = null ]
        Parameter #3 [ <optional> ?array $options = null ]
      }
      - Return [ static ]
    }

    Method [ <internal:PDO> static public method getAvailableDrivers ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }
  }

  - Properties [0] {
  }

  - Methods [14] {
    Method [ <internal:PDO, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $dsn ]
        Parameter #1 [ <optional> ?string $username = null ]
        Parameter #2 [ <optional> ?string $password = null ]
        Parameter #3 [ <optional> ?array $options = null ]
      }
    }

    Method [ <internal:PDO> public method beginTransaction ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method commit ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method errorCode ] {

      - Parameters [0] {
      }
      - Tentative return [ ?string ]
    }

    Method [ <internal:PDO> public method errorInfo ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:PDO> public method exec ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $statement ]
      }
      - Tentative return [ int|false ]
    }

    Method [ <internal:PDO> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $attribute ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:PDO> public method inTransaction ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method lastInsertId ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $name = null ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:PDO> public method prepare ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $query ]
        Parameter #1 [ <optional> array $options = [] ]
      }
      - Tentative return [ PDOStatement|false ]
    }

    Method [ <internal:PDO> public method query ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $query ]
        Parameter #1 [ <optional> ?int $fetchMode = null ]
        Parameter #2 [ <optional> mixed ...$fetchModeArgs ]
      }
      - Tentative return [ PDOStatement|false ]
    }

    Method [ <internal:PDO> public method quote ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <optional> int $type = PDO::PARAM_STR ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:PDO> public method rollBack ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method setAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $attribute ]
        Parameter #1 [ <required> mixed $value ]
      }
      - Tentative return [ bool ]
    }
  }
}
',
);
