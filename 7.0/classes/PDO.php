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
  'extension' => 'PDO',
  'toString' => 'Class [ <internal:PDO> class PDO ] {

  - Constants [102] {
    Constant [ integer PARAM_BOOL ] { 5 }
    Constant [ integer PARAM_NULL ] { 0 }
    Constant [ integer PARAM_INT ] { 1 }
    Constant [ integer PARAM_STR ] { 2 }
    Constant [ integer PARAM_LOB ] { 3 }
    Constant [ integer PARAM_STMT ] { 4 }
    Constant [ integer PARAM_INPUT_OUTPUT ] { 2147483648 }
    Constant [ integer PARAM_EVT_ALLOC ] { 0 }
    Constant [ integer PARAM_EVT_FREE ] { 1 }
    Constant [ integer PARAM_EVT_EXEC_PRE ] { 2 }
    Constant [ integer PARAM_EVT_EXEC_POST ] { 3 }
    Constant [ integer PARAM_EVT_FETCH_PRE ] { 4 }
    Constant [ integer PARAM_EVT_FETCH_POST ] { 5 }
    Constant [ integer PARAM_EVT_NORMALIZE ] { 6 }
    Constant [ integer FETCH_LAZY ] { 1 }
    Constant [ integer FETCH_ASSOC ] { 2 }
    Constant [ integer FETCH_NUM ] { 3 }
    Constant [ integer FETCH_BOTH ] { 4 }
    Constant [ integer FETCH_OBJ ] { 5 }
    Constant [ integer FETCH_BOUND ] { 6 }
    Constant [ integer FETCH_COLUMN ] { 7 }
    Constant [ integer FETCH_CLASS ] { 8 }
    Constant [ integer FETCH_INTO ] { 9 }
    Constant [ integer FETCH_FUNC ] { 10 }
    Constant [ integer FETCH_GROUP ] { 65536 }
    Constant [ integer FETCH_UNIQUE ] { 196608 }
    Constant [ integer FETCH_KEY_PAIR ] { 12 }
    Constant [ integer FETCH_CLASSTYPE ] { 262144 }
    Constant [ integer FETCH_SERIALIZE ] { 524288 }
    Constant [ integer FETCH_PROPS_LATE ] { 1048576 }
    Constant [ integer FETCH_NAMED ] { 11 }
    Constant [ integer ATTR_AUTOCOMMIT ] { 0 }
    Constant [ integer ATTR_PREFETCH ] { 1 }
    Constant [ integer ATTR_TIMEOUT ] { 2 }
    Constant [ integer ATTR_ERRMODE ] { 3 }
    Constant [ integer ATTR_SERVER_VERSION ] { 4 }
    Constant [ integer ATTR_CLIENT_VERSION ] { 5 }
    Constant [ integer ATTR_SERVER_INFO ] { 6 }
    Constant [ integer ATTR_CONNECTION_STATUS ] { 7 }
    Constant [ integer ATTR_CASE ] { 8 }
    Constant [ integer ATTR_CURSOR_NAME ] { 9 }
    Constant [ integer ATTR_CURSOR ] { 10 }
    Constant [ integer ATTR_ORACLE_NULLS ] { 11 }
    Constant [ integer ATTR_PERSISTENT ] { 12 }
    Constant [ integer ATTR_STATEMENT_CLASS ] { 13 }
    Constant [ integer ATTR_FETCH_TABLE_NAMES ] { 14 }
    Constant [ integer ATTR_FETCH_CATALOG_NAMES ] { 15 }
    Constant [ integer ATTR_DRIVER_NAME ] { 16 }
    Constant [ integer ATTR_STRINGIFY_FETCHES ] { 17 }
    Constant [ integer ATTR_MAX_COLUMN_LEN ] { 18 }
    Constant [ integer ATTR_EMULATE_PREPARES ] { 20 }
    Constant [ integer ATTR_DEFAULT_FETCH_MODE ] { 19 }
    Constant [ integer ERRMODE_SILENT ] { 0 }
    Constant [ integer ERRMODE_WARNING ] { 1 }
    Constant [ integer ERRMODE_EXCEPTION ] { 2 }
    Constant [ integer CASE_NATURAL ] { 0 }
    Constant [ integer CASE_LOWER ] { 2 }
    Constant [ integer CASE_UPPER ] { 1 }
    Constant [ integer NULL_NATURAL ] { 0 }
    Constant [ integer NULL_EMPTY_STRING ] { 1 }
    Constant [ integer NULL_TO_STRING ] { 2 }
    Constant [ string ERR_NONE ] { 00000 }
    Constant [ integer FETCH_ORI_NEXT ] { 0 }
    Constant [ integer FETCH_ORI_PRIOR ] { 1 }
    Constant [ integer FETCH_ORI_FIRST ] { 2 }
    Constant [ integer FETCH_ORI_LAST ] { 3 }
    Constant [ integer FETCH_ORI_ABS ] { 4 }
    Constant [ integer FETCH_ORI_REL ] { 5 }
    Constant [ integer CURSOR_FWDONLY ] { 0 }
    Constant [ integer CURSOR_SCROLL ] { 1 }
    Constant [ integer DBLIB_ATTR_CONNECTION_TIMEOUT ] { 1000 }
    Constant [ integer DBLIB_ATTR_QUERY_TIMEOUT ] { 1001 }
    Constant [ integer DBLIB_ATTR_STRINGIFY_UNIQUEIDENTIFIER ] { 1002 }
    Constant [ integer FB_ATTR_DATE_FORMAT ] { 1000 }
    Constant [ integer FB_ATTR_TIME_FORMAT ] { 1001 }
    Constant [ integer FB_ATTR_TIMESTAMP_FORMAT ] { 1002 }
    Constant [ integer MYSQL_ATTR_USE_BUFFERED_QUERY ] { 1000 }
    Constant [ integer MYSQL_ATTR_LOCAL_INFILE ] { 1001 }
    Constant [ integer MYSQL_ATTR_INIT_COMMAND ] { 1002 }
    Constant [ integer MYSQL_ATTR_COMPRESS ] { 1003 }
    Constant [ integer MYSQL_ATTR_DIRECT_QUERY ] { 1004 }
    Constant [ integer MYSQL_ATTR_FOUND_ROWS ] { 1005 }
    Constant [ integer MYSQL_ATTR_IGNORE_SPACE ] { 1006 }
    Constant [ integer MYSQL_ATTR_SSL_KEY ] { 1007 }
    Constant [ integer MYSQL_ATTR_SSL_CERT ] { 1008 }
    Constant [ integer MYSQL_ATTR_SSL_CA ] { 1009 }
    Constant [ integer MYSQL_ATTR_SSL_CAPATH ] { 1010 }
    Constant [ integer MYSQL_ATTR_SSL_CIPHER ] { 1011 }
    Constant [ integer MYSQL_ATTR_SERVER_PUBLIC_KEY ] { 1012 }
    Constant [ integer MYSQL_ATTR_MULTI_STATEMENTS ] { 1013 }
    Constant [ integer MYSQL_ATTR_SSL_VERIFY_SERVER_CERT ] { 1014 }
    Constant [ integer ODBC_ATTR_USE_CURSOR_LIBRARY ] { 1000 }
    Constant [ integer ODBC_ATTR_ASSUME_UTF8 ] { 1001 }
    Constant [ integer ODBC_SQL_USE_IF_NEEDED ] { 0 }
    Constant [ integer ODBC_SQL_USE_DRIVER ] { 2 }
    Constant [ integer ODBC_SQL_USE_ODBC ] { 1 }
    Constant [ integer PGSQL_ATTR_DISABLE_PREPARES ] { 1000 }
    Constant [ integer PGSQL_TRANSACTION_IDLE ] { 0 }
    Constant [ integer PGSQL_TRANSACTION_ACTIVE ] { 1 }
    Constant [ integer PGSQL_TRANSACTION_INTRANS ] { 2 }
    Constant [ integer PGSQL_TRANSACTION_INERROR ] { 3 }
    Constant [ integer PGSQL_TRANSACTION_UNKNOWN ] { 4 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:PDO> static public method getAvailableDrivers ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [0] {
  }

  - Methods [16] {
    Method [ <internal:PDO, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <required> $dsn ]
        Parameter #1 [ <optional> $username ]
        Parameter #2 [ <optional> $passwd ]
        Parameter #3 [ <optional> $options ]
      }
    }

    Method [ <internal:PDO> public method prepare ] {

      - Parameters [2] {
        Parameter #0 [ <required> $statement ]
        Parameter #1 [ <optional> $options ]
      }
    }

    Method [ <internal:PDO> public method beginTransaction ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method commit ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method rollBack ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method inTransaction ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method setAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> $attribute ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:PDO> public method exec ] {

      - Parameters [1] {
        Parameter #0 [ <required> $query ]
      }
    }

    Method [ <internal:PDO> public method query ] {
    }

    Method [ <internal:PDO> public method lastInsertId ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $seqname ]
      }
    }

    Method [ <internal:PDO> public method errorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method errorInfo ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> $attribute ]
      }
    }

    Method [ <internal:PDO> public method quote ] {

      - Parameters [2] {
        Parameter #0 [ <required> $string ]
        Parameter #1 [ <optional> $paramtype ]
      }
    }

    Method [ <internal:PDO> final public method __wakeup ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> final public method __sleep ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
