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
    'numColumns' => 
    array (
      'name' => 'numColumns',
      'class' => 'SQLite3Result',
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
    'columnName' => 
    array (
      'name' => 'columnName',
      'class' => 'SQLite3Result',
      'parameters' => 
      array (
        'column_number' => 
        array (
          'position' => 0,
          'name' => 'column_number',
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
    'columnType' => 
    array (
      'name' => 'columnType',
      'class' => 'SQLite3Result',
      'parameters' => 
      array (
        'column_number' => 
        array (
          'position' => 0,
          'name' => 'column_number',
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
    'reset' => 
    array (
      'name' => 'reset',
      'class' => 'SQLite3Result',
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
    'finalize' => 
    array (
      'name' => 'finalize',
      'class' => 'SQLite3Result',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'SQLite3Result',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
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
    Method [ <internal:sqlite3> public method numColumns ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:sqlite3> public method columnName ] {

      - Parameters [1] {
        Parameter #0 [ <required> $column_number ]
      }
    }

    Method [ <internal:sqlite3> public method columnType ] {

      - Parameters [1] {
        Parameter #0 [ <required> $column_number ]
      }
    }

    Method [ <internal:sqlite3> public method fetchArray ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $mode ]
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

    Method [ <internal:sqlite3, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
