<?php

return array (
  'type' => 'class',
  'name' => 'mysqli_result',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'mysqli_result',
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
        'name' => 'mysqli_result class (php.net)',
        'url' => 'https://www.php.net/manual/class.mysqli_result.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
    'current_field' => NULL,
    'field_count' => NULL,
    'lengths' => NULL,
    'num_rows' => NULL,
    'type' => NULL,
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
    0 => 'IteratorAggregate',
    1 => 'Traversable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
    'current_field' => 
    array (
      'name' => 'current_field',
      'class' => 'mysqli_result',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'field_count' => 
    array (
      'name' => 'field_count',
      'class' => 'mysqli_result',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'lengths' => 
    array (
      'name' => 'lengths',
      'class' => 'mysqli_result',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'num_rows' => 
    array (
      'name' => 'num_rows',
      'class' => 'mysqli_result',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'class' => 'mysqli_result',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'mysqli_result',
      'parameters' => 
      array (
        'mysql' => 
        array (
          'position' => 0,
          'name' => 'mysql',
          'type' => 'mysqli',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'result_mode' => 
        array (
          'position' => 1,
          'name' => 'result_mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'MYSQLI_STORE_RESULT',
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
      'class' => 'mysqli_result',
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
    'free' => 
    array (
      'name' => 'free',
      'class' => 'mysqli_result',
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
    'data_seek' => 
    array (
      'name' => 'data_seek',
      'class' => 'mysqli_result',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
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
    'fetch_field' => 
    array (
      'name' => 'fetch_field',
      'class' => 'mysqli_result',
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
    'fetch_fields' => 
    array (
      'name' => 'fetch_fields',
      'class' => 'mysqli_result',
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
    'fetch_field_direct' => 
    array (
      'name' => 'fetch_field_direct',
      'class' => 'mysqli_result',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
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
    'fetch_all' => 
    array (
      'name' => 'fetch_all',
      'class' => 'mysqli_result',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'MYSQLI_NUM',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fetch_array' => 
    array (
      'name' => 'fetch_array',
      'class' => 'mysqli_result',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'MYSQLI_BOTH',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fetch_assoc' => 
    array (
      'name' => 'fetch_assoc',
      'class' => 'mysqli_result',
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
    'fetch_object' => 
    array (
      'name' => 'fetch_object',
      'class' => 'mysqli_result',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'constructor_args' => 
        array (
          'position' => 1,
          'name' => 'constructor_args',
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
    'fetch_row' => 
    array (
      'name' => 'fetch_row',
      'class' => 'mysqli_result',
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
    'field_seek' => 
    array (
      'name' => 'field_seek',
      'class' => 'mysqli_result',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
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
    'free_result' => 
    array (
      'name' => 'free_result',
      'class' => 'mysqli_result',
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
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'mysqli_result',
      'parameters' => 
      array (
      ),
      'return_type' => 'Iterator',
      'has_return_type' => true,
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
  'is_instantiable' => true,
  'is_read_only' => false,
  'extension' => 'mysqli',
  'toString' => 'Class [ <internal:mysqli> <iterateable> class mysqli_result implements IteratorAggregate, Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [5] {
    Property [ public $current_field = NULL ]
    Property [ public $field_count = NULL ]
    Property [ public $lengths = NULL ]
    Property [ public $num_rows = NULL ]
    Property [ public $type = NULL ]
  }

  - Methods [15] {
    Method [ <internal:mysqli, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> mysqli $mysql ]
        Parameter #1 [ <optional> int $result_mode = MYSQLI_STORE_RESULT ]
      }
    }

    Method [ <internal:mysqli> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method free ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method data_seek ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $offset ]
      }
    }

    Method [ <internal:mysqli> public method fetch_field ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method fetch_fields ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method fetch_field_direct ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
    }

    Method [ <internal:mysqli> public method fetch_all ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $mode = MYSQLI_NUM ]
      }
    }

    Method [ <internal:mysqli> public method fetch_array ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $mode = MYSQLI_BOTH ]
      }
    }

    Method [ <internal:mysqli> public method fetch_assoc ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method fetch_object ] {

      - Parameters [2] {
        Parameter #0 [ <optional> string $class = "stdClass" ]
        Parameter #1 [ <optional> array $constructor_args = [] ]
      }
    }

    Method [ <internal:mysqli> public method fetch_row ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method field_seek ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
    }

    Method [ <internal:mysqli> public method free_result ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Iterator ]
    }
  }
}
',
);
