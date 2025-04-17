<?php

return array (
  'type' => 'class',
  'name' => 'SQLite3Stmt',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SQLite3Stmt',
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
        'name' => 'SQLite3Stmt class (php.net)',
        'url' => 'https://www.php.net/manual/class.sqlite3stmt.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
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
      'class' => 'SQLite3Stmt',
      'parameters' => 
      array (
        'sqlite3' => 
        array (
          'position' => 0,
          'name' => 'sqlite3',
          'type' => 'SQLite3',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'query' => 
        array (
          'position' => 1,
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
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'bindParam' => 
    array (
      'name' => 'bindParam',
      'class' => 'SQLite3Stmt',
      'parameters' => 
      array (
        'param' => 
        array (
          'position' => 0,
          'name' => 'param',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'var' => 
        array (
          'position' => 1,
          'name' => 'var',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 2,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 3,
          'has_default_value_constant' => true,
          'default_value_constant' => 'SQLITE3_TEXT',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bindValue' => 
    array (
      'name' => 'bindValue',
      'class' => 'SQLite3Stmt',
      'parameters' => 
      array (
        'param' => 
        array (
          'position' => 0,
          'name' => 'param',
          'type' => 'string|int',
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
        'type' => 
        array (
          'position' => 2,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 3,
          'has_default_value_constant' => true,
          'default_value_constant' => 'SQLITE3_TEXT',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'SQLite3Stmt',
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'SQLite3Stmt',
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
    'execute' => 
    array (
      'name' => 'execute',
      'class' => 'SQLite3Stmt',
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
    'getSQL' => 
    array (
      'name' => 'getSQL',
      'class' => 'SQLite3Stmt',
      'parameters' => 
      array (
        'expand' => 
        array (
          'position' => 0,
          'name' => 'expand',
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
    'paramCount' => 
    array (
      'name' => 'paramCount',
      'class' => 'SQLite3Stmt',
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
    'readOnly' => 
    array (
      'name' => 'readOnly',
      'class' => 'SQLite3Stmt',
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
    'reset' => 
    array (
      'name' => 'reset',
      'class' => 'SQLite3Stmt',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'sqlite3',
  'toString' => 'Class [ <internal:sqlite3> class SQLite3Stmt ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [10] {
    Method [ <internal:sqlite3, ctor> private method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> SQLite3 $sqlite3 ]
        Parameter #1 [ <required> string $query ]
      }
    }

    Method [ <internal:sqlite3> public method bindParam ] {

      - Parameters [3] {
        Parameter #0 [ <required> string|int $param ]
        Parameter #1 [ <required> mixed &$var ]
        Parameter #2 [ <optional> int $type = SQLITE3_TEXT ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:sqlite3> public method bindValue ] {

      - Parameters [3] {
        Parameter #0 [ <required> string|int $param ]
        Parameter #1 [ <required> mixed $value ]
        Parameter #2 [ <optional> int $type = SQLITE3_TEXT ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:sqlite3> public method clear ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:sqlite3> public method close ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:sqlite3> public method execute ] {

      - Parameters [0] {
      }
      - Tentative return [ SQLite3Result|false ]
    }

    Method [ <internal:sqlite3> public method getSQL ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $expand = false ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:sqlite3> public method paramCount ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:sqlite3> public method readOnly ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:sqlite3> public method reset ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }
  }
}
',
);
