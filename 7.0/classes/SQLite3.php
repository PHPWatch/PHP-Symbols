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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encryption_key' => 
        array (
          'position' => 2,
          'name' => 'encryption_key',
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
    'busyTimeout' => 
    array (
      'name' => 'busyTimeout',
      'class' => 'SQLite3',
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
        'shared_library' => 
        array (
          'position' => 0,
          'name' => 'shared_library',
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
    'escapeString' => 
    array (
      'name' => 'escapeString',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
      'class' => 'SQLite3',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'entire_row' => 
        array (
          'position' => 1,
          'name' => 'entire_row',
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
        'argument_count' => 
        array (
          'position' => 2,
          'name' => 'argument_count',
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'step_callback' => 
        array (
          'position' => 1,
          'name' => 'step_callback',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'final_callback' => 
        array (
          'position' => 2,
          'name' => 'final_callback',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'argument_count' => 
        array (
          'position' => 3,
          'name' => 'argument_count',
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
          'type' => NULL,
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dbname' => 
        array (
          'position' => 3,
          'name' => 'dbname',
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
    'enableExceptions' => 
    array (
      'name' => 'enableExceptions',
      'class' => 'SQLite3',
      'parameters' => 
      array (
        'enableExceptions' => 
        array (
          'position' => 0,
          'name' => 'enableExceptions',
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
          'type' => NULL,
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
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encryption_key' => 
        array (
          'position' => 2,
          'name' => 'encryption_key',
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
  'toString' => 'Class [ <internal:sqlite3> class SQLite3 ] {

  - Constants [0] {
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
        Parameter #0 [ <required> $value ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [18] {
    Method [ <internal:sqlite3> public method open ] {

      - Parameters [3] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $flags ]
        Parameter #2 [ <optional> $encryption_key ]
      }
    }

    Method [ <internal:sqlite3> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method exec ] {

      - Parameters [1] {
        Parameter #0 [ <required> $query ]
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

    Method [ <internal:sqlite3> public method lastErrorMsg ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method busyTimeout ] {

      - Parameters [1] {
        Parameter #0 [ <required> $ms ]
      }
    }

    Method [ <internal:sqlite3> public method loadExtension ] {

      - Parameters [1] {
        Parameter #0 [ <required> $shared_library ]
      }
    }

    Method [ <internal:sqlite3> public method changes ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method prepare ] {

      - Parameters [1] {
        Parameter #0 [ <required> $query ]
      }
    }

    Method [ <internal:sqlite3> public method query ] {

      - Parameters [1] {
        Parameter #0 [ <required> $query ]
      }
    }

    Method [ <internal:sqlite3> public method querySingle ] {

      - Parameters [2] {
        Parameter #0 [ <required> $query ]
        Parameter #1 [ <optional> $entire_row ]
      }
    }

    Method [ <internal:sqlite3> public method createFunction ] {

      - Parameters [3] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $callback ]
        Parameter #2 [ <optional> $argument_count ]
      }
    }

    Method [ <internal:sqlite3> public method createAggregate ] {

      - Parameters [4] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $step_callback ]
        Parameter #2 [ <required> $final_callback ]
        Parameter #3 [ <optional> $argument_count ]
      }
    }

    Method [ <internal:sqlite3> public method createCollation ] {

      - Parameters [2] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <required> $callback ]
      }
    }

    Method [ <internal:sqlite3> public method openBlob ] {

      - Parameters [4] {
        Parameter #0 [ <required> $table ]
        Parameter #1 [ <required> $column ]
        Parameter #2 [ <required> $rowid ]
        Parameter #3 [ <optional> $dbname ]
      }
    }

    Method [ <internal:sqlite3> public method enableExceptions ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $enableExceptions ]
      }
    }

    Method [ <internal:sqlite3, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> $filename ]
        Parameter #1 [ <optional> $flags ]
        Parameter #2 [ <optional> $encryption_key ]
      }
    }
  }
}
',
);
