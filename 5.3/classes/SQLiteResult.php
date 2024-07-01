<?php

return array (
  'type' => 'class',
  'name' => 'SQLiteResult',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SQLiteResult',
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
        'name' => 'SQLiteResult class (php.net)',
        'url' => 'https://www.php.net/manual/class.sqliteresult.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
    2 => 'Countable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'fetch' => 
    array (
      'name' => 'fetch',
      'class' => 'SQLiteResult',
      'parameters' => 
      array (
        'result_type' => 
        array (
          'position' => 0,
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
          'position' => 1,
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
    'fetchObject' => 
    array (
      'name' => 'fetchObject',
      'class' => 'SQLiteResult',
      'parameters' => 
      array (
        'class_name' => 
        array (
          'position' => 0,
          'name' => 'class_name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ctor_params' => 
        array (
          'position' => 1,
          'name' => 'ctor_params',
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
    'fetchSingle' => 
    array (
      'name' => 'fetchSingle',
      'class' => 'SQLiteResult',
      'parameters' => 
      array (
        'decode_binary' => 
        array (
          'position' => 0,
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
    'fetchAll' => 
    array (
      'name' => 'fetchAll',
      'class' => 'SQLiteResult',
      'parameters' => 
      array (
        'result_type' => 
        array (
          'position' => 0,
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
          'position' => 1,
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
    'column' => 
    array (
      'name' => 'column',
      'class' => 'SQLiteResult',
      'parameters' => 
      array (
        'index_or_name' => 
        array (
          'position' => 0,
          'name' => 'index_or_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'decode_binary' => 
        array (
          'position' => 1,
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
    'numFields' => 
    array (
      'name' => 'numFields',
      'class' => 'SQLiteResult',
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
    'fieldName' => 
    array (
      'name' => 'fieldName',
      'class' => 'SQLiteResult',
      'parameters' => 
      array (
        'field_index' => 
        array (
          'position' => 0,
          'name' => 'field_index',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'SQLiteResult',
      'parameters' => 
      array (
        'result_type' => 
        array (
          'position' => 0,
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
          'position' => 1,
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'SQLiteResult',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'SQLiteResult',
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
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'SQLiteResult',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'SQLiteResult',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'SQLiteResult',
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
    'prev' => 
    array (
      'name' => 'prev',
      'class' => 'SQLiteResult',
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
    'hasPrev' => 
    array (
      'name' => 'hasPrev',
      'class' => 'SQLiteResult',
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
    'numRows' => 
    array (
      'name' => 'numRows',
      'class' => 'SQLiteResult',
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
    'seek' => 
    array (
      'name' => 'seek',
      'class' => 'SQLiteResult',
      'parameters' => 
      array (
        'row' => 
        array (
          'position' => 0,
          'name' => 'row',
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
  ),
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:SQLite> <iterateable> final class SQLiteResult implements Iterator, Traversable, Countable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [17] {
    Method [ <internal:SQLite> public method fetch ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $result_type ]
        Parameter #1 [ <optional> $decode_binary ]
      }
    }

    Method [ <internal:SQLite> public method fetchObject ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $class_name ]
        Parameter #1 [ <optional> $ctor_params ]
        Parameter #2 [ <optional> $decode_binary ]
      }
    }

    Method [ <internal:SQLite> public method fetchSingle ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $decode_binary ]
      }
    }

    Method [ <internal:SQLite> public method fetchAll ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $result_type ]
        Parameter #1 [ <optional> $decode_binary ]
      }
    }

    Method [ <internal:SQLite> public method column ] {

      - Parameters [2] {
        Parameter #0 [ <required> $index_or_name ]
        Parameter #1 [ <optional> $decode_binary ]
      }
    }

    Method [ <internal:SQLite> public method numFields ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite> public method fieldName ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field_index ]
      }
    }

    Method [ <internal:SQLite, prototype Iterator> public method current ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $result_type ]
        Parameter #1 [ <optional> $decode_binary ]
      }
    }

    Method [ <internal:SQLite, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite, prototype Countable> public method count ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite> public method prev ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite> public method hasPrev ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite> public method numRows ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SQLite> public method seek ] {

      - Parameters [1] {
        Parameter #0 [ <required> $row ]
      }
    }
  }
}
',
);
