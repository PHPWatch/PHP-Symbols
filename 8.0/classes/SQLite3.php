<?php

return array (
  'type' => 'class',
  'name' => 'SQLite3',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SQLite3',
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
        'name' => 'SQLite3 class (php.net)',
        'url' => 'https://www.php.net/manual/class.sqlite3.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'OK' => 0,
    'DENY' => 1,
    'IGNORE' => 2,
    'CREATE_INDEX' => 1,
    'CREATE_TABLE' => 2,
    'CREATE_TEMP_INDEX' => 3,
    'CREATE_TEMP_TABLE' => 4,
    'CREATE_TEMP_TRIGGER' => 5,
    'CREATE_TEMP_VIEW' => 6,
    'CREATE_TRIGGER' => 7,
    'CREATE_VIEW' => 8,
    'DELETE' => 9,
    'DROP_INDEX' => 10,
    'DROP_TABLE' => 11,
    'DROP_TEMP_INDEX' => 12,
    'DROP_TEMP_TABLE' => 13,
    'DROP_TEMP_TRIGGER' => 14,
    'DROP_TEMP_VIEW' => 15,
    'DROP_TRIGGER' => 16,
    'DROP_VIEW' => 17,
    'INSERT' => 18,
    'PRAGMA' => 19,
    'READ' => 20,
    'SELECT' => 21,
    'TRANSACTION' => 22,
    'UPDATE' => 23,
    'ATTACH' => 24,
    'DETACH' => 25,
    'ALTER_TABLE' => 26,
    'REINDEX' => 27,
    'ANALYZE' => 28,
    'CREATE_VTABLE' => 29,
    'DROP_VTABLE' => 30,
    'FUNCTION' => 31,
    'SAVEPOINT' => 32,
    'COPY' => 0,
    'RECURSIVE' => 33,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 6,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encryptionKey' => 
        array (
          'position' => 2,
          'name' => 'encryptionKey',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
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
    'open' => 
    array (
      'name' => 'open',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 6,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encryptionKey' => 
        array (
          'position' => 2,
          'name' => 'encryptionKey',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'SQLite3',
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
    'version' => 
    array (
      'name' => 'version',
      'class' => 'SQLite3',
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
    'lastInsertRowID' => 
    array (
      'name' => 'lastInsertRowID',
      'class' => 'SQLite3',
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
    'lastErrorCode' => 
    array (
      'name' => 'lastErrorCode',
      'class' => 'SQLite3',
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
    'lastExtendedErrorCode' => 
    array (
      'name' => 'lastExtendedErrorCode',
      'class' => 'SQLite3',
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
    'lastErrorMsg' => 
    array (
      'name' => 'lastErrorMsg',
      'class' => 'SQLite3',
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
    'changes' => 
    array (
      'name' => 'changes',
      'class' => 'SQLite3',
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
    'busyTimeout' => 
    array (
      'name' => 'busyTimeout',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'milliseconds' => 
        array (
          'position' => 0,
          'name' => 'milliseconds',
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
    'loadExtension' => 
    array (
      'name' => 'loadExtension',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'backup' => 
    array (
      'name' => 'backup',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'destination' => 
        array (
          'position' => 0,
          'name' => 'destination',
          'type' => 'SQLite3',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'sourceDatabase' => 
        array (
          'position' => 1,
          'name' => 'sourceDatabase',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'main',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'destinationDatabase' => 
        array (
          'position' => 2,
          'name' => 'destinationDatabase',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'main',
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
    'escapeString' => 
    array (
      'name' => 'escapeString',
      'class' => 'SQLite3',
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
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'prepare' => 
    array (
      'name' => 'prepare',
      'class' => 'SQLite3',
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
      'class' => 'SQLite3',
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
      'class' => 'SQLite3',
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
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'querySingle' => 
    array (
      'name' => 'querySingle',
      'class' => 'SQLite3',
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
        'entireRow' => 
        array (
          'position' => 1,
          'name' => 'entireRow',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
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
    'createFunction' => 
    array (
      'name' => 'createFunction',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'callback' => 
        array (
          'position' => 1,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'argCount' => 
        array (
          'position' => 2,
          'name' => 'argCount',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -1,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
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
    'createAggregate' => 
    array (
      'name' => 'createAggregate',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'stepCallback' => 
        array (
          'position' => 1,
          'name' => 'stepCallback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'finalCallback' => 
        array (
          'position' => 2,
          'name' => 'finalCallback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'argCount' => 
        array (
          'position' => 3,
          'name' => 'argCount',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => -1,
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
    'createCollation' => 
    array (
      'name' => 'createCollation',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'callback' => 
        array (
          'position' => 1,
          'name' => 'callback',
          'type' => 'callable',
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
    'openBlob' => 
    array (
      'name' => 'openBlob',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'table' => 
        array (
          'position' => 0,
          'name' => 'table',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'column' => 
        array (
          'position' => 1,
          'name' => 'column',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rowid' => 
        array (
          'position' => 2,
          'name' => 'rowid',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'database' => 
        array (
          'position' => 3,
          'name' => 'database',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'main',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 4,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 1,
          'has_default_value_constant' => true,
          'default_value_constant' => 'SQLITE3_OPEN_READONLY',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'enableExceptions' => 
    array (
      'name' => 'enableExceptions',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'enable' => 
        array (
          'position' => 0,
          'name' => 'enable',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
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
    'enableExtendedResultCodes' => 
    array (
      'name' => 'enableExtendedResultCodes',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'enable' => 
        array (
          'position' => 0,
          'name' => 'enable',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
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
    'setAuthorizer' => 
    array (
      'name' => 'setAuthorizer',
      'class' => 'SQLite3',
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
  'toString' => 'Class [ <internal:sqlite3> class SQLite3 ] {

  - Constants [37] {
    Constant [ public int OK ] { 0 }
    Constant [ public int DENY ] { 1 }
    Constant [ public int IGNORE ] { 2 }
    Constant [ public int CREATE_INDEX ] { 1 }
    Constant [ public int CREATE_TABLE ] { 2 }
    Constant [ public int CREATE_TEMP_INDEX ] { 3 }
    Constant [ public int CREATE_TEMP_TABLE ] { 4 }
    Constant [ public int CREATE_TEMP_TRIGGER ] { 5 }
    Constant [ public int CREATE_TEMP_VIEW ] { 6 }
    Constant [ public int CREATE_TRIGGER ] { 7 }
    Constant [ public int CREATE_VIEW ] { 8 }
    Constant [ public int DELETE ] { 9 }
    Constant [ public int DROP_INDEX ] { 10 }
    Constant [ public int DROP_TABLE ] { 11 }
    Constant [ public int DROP_TEMP_INDEX ] { 12 }
    Constant [ public int DROP_TEMP_TABLE ] { 13 }
    Constant [ public int DROP_TEMP_TRIGGER ] { 14 }
    Constant [ public int DROP_TEMP_VIEW ] { 15 }
    Constant [ public int DROP_TRIGGER ] { 16 }
    Constant [ public int DROP_VIEW ] { 17 }
    Constant [ public int INSERT ] { 18 }
    Constant [ public int PRAGMA ] { 19 }
    Constant [ public int READ ] { 20 }
    Constant [ public int SELECT ] { 21 }
    Constant [ public int TRANSACTION ] { 22 }
    Constant [ public int UPDATE ] { 23 }
    Constant [ public int ATTACH ] { 24 }
    Constant [ public int DETACH ] { 25 }
    Constant [ public int ALTER_TABLE ] { 26 }
    Constant [ public int REINDEX ] { 27 }
    Constant [ public int ANALYZE ] { 28 }
    Constant [ public int CREATE_VTABLE ] { 29 }
    Constant [ public int DROP_VTABLE ] { 30 }
    Constant [ public int FUNCTION ] { 31 }
    Constant [ public int SAVEPOINT ] { 32 }
    Constant [ public int COPY ] { 0 }
    Constant [ public int RECURSIVE ] { 33 }
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:sqlite3> static public method version ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> static public method escapeString ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $string ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [22] {
    Method [ <internal:sqlite3, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE ]
        Parameter #2 [ <optional> string $encryptionKey = "" ]
      }
    }

    Method [ <internal:sqlite3> public method open ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $filename ]
        Parameter #1 [ <optional> int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE ]
        Parameter #2 [ <optional> string $encryptionKey = "" ]
      }
    }

    Method [ <internal:sqlite3> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method lastInsertRowID ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method lastErrorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method lastExtendedErrorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method lastErrorMsg ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method changes ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method busyTimeout ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $milliseconds ]
      }
    }

    Method [ <internal:sqlite3> public method loadExtension ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
    }

    Method [ <internal:sqlite3> public method backup ] {

      - Parameters [3] {
        Parameter #0 [ <required> SQLite3 $destination ]
        Parameter #1 [ <optional> string $sourceDatabase = "main" ]
        Parameter #2 [ <optional> string $destinationDatabase = "main" ]
      }
    }

    Method [ <internal:sqlite3> public method prepare ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $query ]
      }
    }

    Method [ <internal:sqlite3> public method exec ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $query ]
      }
    }

    Method [ <internal:sqlite3> public method query ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $query ]
      }
    }

    Method [ <internal:sqlite3> public method querySingle ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $query ]
        Parameter #1 [ <optional> bool $entireRow = false ]
      }
    }

    Method [ <internal:sqlite3> public method createFunction ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> callable $callback ]
        Parameter #2 [ <optional> int $argCount = -1 ]
        Parameter #3 [ <optional> int $flags = 0 ]
      }
    }

    Method [ <internal:sqlite3> public method createAggregate ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> callable $stepCallback ]
        Parameter #2 [ <required> callable $finalCallback ]
        Parameter #3 [ <optional> int $argCount = -1 ]
      }
    }

    Method [ <internal:sqlite3> public method createCollation ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <required> callable $callback ]
      }
    }

    Method [ <internal:sqlite3> public method openBlob ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $table ]
        Parameter #1 [ <required> string $column ]
        Parameter #2 [ <required> int $rowid ]
        Parameter #3 [ <optional> string $database = "main" ]
        Parameter #4 [ <optional> int $flags = SQLITE3_OPEN_READONLY ]
      }
    }

    Method [ <internal:sqlite3> public method enableExceptions ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $enable = false ]
      }
    }

    Method [ <internal:sqlite3> public method enableExtendedResultCodes ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $enable = true ]
      }
    }

    Method [ <internal:sqlite3> public method setAuthorizer ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?callable $callback ]
      }
    }
  }
}
',
);
