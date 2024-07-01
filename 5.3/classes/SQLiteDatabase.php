<?php

return array (
  'type' => 'class',
  'name' => 'SQLiteDatabase',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SQLiteDatabase',
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
        'name' => 'SQLiteDatabase class (php.net)',
        'url' => 'https://www.php.net/manual/class.sqlitedatabase.php',
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
      'class' => 'SQLiteDatabase',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'error_message' => 
        array (
          'position' => 2,
          'name' => 'error_message',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'query' => 
    array (
      'name' => 'query',
      'class' => 'SQLiteDatabase',
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
        'result_type' => 
        array (
          'position' => 1,
          'name' => 'result_type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'error_message' => 
        array (
          'position' => 2,
          'name' => 'error_message',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'queryExec' => 
    array (
      'name' => 'queryExec',
      'class' => 'SQLiteDatabase',
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
        'error_message' => 
        array (
          'position' => 1,
          'name' => 'error_message',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'arrayQuery' => 
    array (
      'name' => 'arrayQuery',
      'class' => 'SQLiteDatabase',
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
        'result_type' => 
        array (
          'position' => 1,
          'name' => 'result_type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'decode_binary' => 
        array (
          'position' => 2,
          'name' => 'decode_binary',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'singleQuery' => 
    array (
      'name' => 'singleQuery',
      'class' => 'SQLiteDatabase',
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
        'first_row_only' => 
        array (
          'position' => 1,
          'name' => 'first_row_only',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'decode_binary' => 
        array (
          'position' => 2,
          'name' => 'decode_binary',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unbufferedQuery' => 
    array (
      'name' => 'unbufferedQuery',
      'class' => 'SQLiteDatabase',
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
        'result_type' => 
        array (
          'position' => 1,
          'name' => 'result_type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'error_message' => 
        array (
          'position' => 2,
          'name' => 'error_message',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lastInsertRowid' => 
    array (
      'name' => 'lastInsertRowid',
      'class' => 'SQLiteDatabase',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'changes' => 
    array (
      'name' => 'changes',
      'class' => 'SQLiteDatabase',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createAggregate' => 
    array (
      'name' => 'createAggregate',
      'class' => 'SQLiteDatabase',
      'parameters' => 
      array (
        'funcname' => 
        array (
          'position' => 0,
          'name' => 'funcname',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'step_func' => 
        array (
          'position' => 1,
          'name' => 'step_func',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'finalize_func' => 
        array (
          'position' => 2,
          'name' => 'finalize_func',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'num_args' => 
        array (
          'position' => 3,
          'name' => 'num_args',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'createFunction' => 
    array (
      'name' => 'createFunction',
      'class' => 'SQLiteDatabase',
      'parameters' => 
      array (
        'funcname' => 
        array (
          'position' => 0,
          'name' => 'funcname',
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'num_args' => 
        array (
          'position' => 2,
          'name' => 'num_args',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'busyTimeout' => 
    array (
      'name' => 'busyTimeout',
      'class' => 'SQLiteDatabase',
      'parameters' => 
      array (
        'ms' => 
        array (
          'position' => 0,
          'name' => 'ms',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lastError' => 
    array (
      'name' => 'lastError',
      'class' => 'SQLiteDatabase',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fetchColumnTypes' => 
    array (
      'name' => 'fetchColumnTypes',
      'class' => 'SQLiteDatabase',
      'parameters' => 
      array (
        'table_name' => 
        array (
          'position' => 0,
          'name' => 'table_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'result_type' => 
        array (
          'position' => 1,
          'name' => 'result_type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:SQLite> class SQLiteDatabase ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [13] {
    Method [ <internal:SQLite, ctor> final public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $mode ]
        Parameter #2 [ <optional> &$error_message ]
      }
    }

    Method [ <internal:SQLite> public method query ] {

      - Parameters [3] {
        Parameter #0 [ <required> $query ]
        Parameter #1 [ <optional> $result_type ]
        Parameter #2 [ <optional> &$error_message ]
      }
    }

    Method [ <internal:SQLite> public method queryExec ] {

      - Parameters [2] {
        Parameter #0 [ <required> $query ]
        Parameter #1 [ <optional> &$error_message ]
      }
    }

    Method [ <internal:SQLite> public method arrayQuery ] {

      - Parameters [3] {
        Parameter #0 [ <required> $query ]
        Parameter #1 [ <optional> $result_type ]
        Parameter #2 [ <optional> $decode_binary ]
      }
    }

    Method [ <internal:SQLite> public method singleQuery ] {

      - Parameters [3] {
        Parameter #0 [ <required> $query ]
        Parameter #1 [ <optional> $first_row_only ]
        Parameter #2 [ <optional> $decode_binary ]
      }
    }

    Method [ <internal:SQLite> public method unbufferedQuery ] {

      - Parameters [3] {
        Parameter #0 [ <required> $query ]
        Parameter #1 [ <optional> $result_type ]
        Parameter #2 [ <optional> &$error_message ]
      }
    }

    Method [ <internal:SQLite> public method lastInsertRowid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite> public method changes ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite> public method createAggregate ] {

      - Parameters [4] {
        Parameter #0 [ <required> $funcname ]
        Parameter #1 [ <required> $step_func ]
        Parameter #2 [ <required> $finalize_func ]
        Parameter #3 [ <optional> $num_args ]
      }
    }

    Method [ <internal:SQLite> public method createFunction ] {

      - Parameters [3] {
        Parameter #0 [ <required> $funcname ]
        Parameter #1 [ <required> $callback ]
        Parameter #2 [ <optional> $num_args ]
      }
    }

    Method [ <internal:SQLite> public method busyTimeout ] {

      - Parameters [1] {
        Parameter #0 [ <required> $ms ]
      }
    }

    Method [ <internal:SQLite> public method lastError ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite> public method fetchColumnTypes ] {

      - Parameters [2] {
        Parameter #0 [ <required> $table_name ]
        Parameter #1 [ <optional> $result_type ]
      }
    }
  }
}
',
);
