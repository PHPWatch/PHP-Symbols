<?php

return array (
  'type' => 'class',
  'name' => 'SQLite3Result',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SQLite3Result',
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
        'name' => 'SQLite3Result class (php.net)',
        'url' => 'https://www.php.net/manual/class.sqlite3result.php',
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
      'class' => 'SQLite3Result',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'numColumns' => 
    array (
      'name' => 'numColumns',
      'class' => 'SQLite3Result',
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
    'columnName' => 
    array (
      'name' => 'columnName',
      'class' => 'SQLite3Result',
      'parameters' => 
      array (
        'column' => 
        array (
          'position' => 0,
          'name' => 'column',
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
    'columnType' => 
    array (
      'name' => 'columnType',
      'class' => 'SQLite3Result',
      'parameters' => 
      array (
        'column' => 
        array (
          'position' => 0,
          'name' => 'column',
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
    'fetchArray' => 
    array (
      'name' => 'fetchArray',
      'class' => 'SQLite3Result',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 3,
          'has_default_value_constant' => true,
          'default_value_constant' => 'SQLITE3_BOTH',
        ),
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
      'class' => 'SQLite3Result',
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
    'finalize' => 
    array (
      'name' => 'finalize',
      'class' => 'SQLite3Result',
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
  'toString' => 'Class [ <internal:sqlite3> class SQLite3Result ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [7] {
    Method [ <internal:sqlite3, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method numColumns ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method columnName ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $column ]
      }
    }

    Method [ <internal:sqlite3> public method columnType ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $column ]
      }
    }

    Method [ <internal:sqlite3> public method fetchArray ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $mode = SQLITE3_BOTH ]
      }
    }

    Method [ <internal:sqlite3> public method reset ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method finalize ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
