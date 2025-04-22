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
        'name' => 'mysqli_result interface (php.net)',
        'url' => 'https://www.php.net/manual/class.mysqli_result.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
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
          'type' => NULL,
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
        'field_nr' => 
        array (
          'position' => 0,
          'name' => 'field_nr',
          'type' => NULL,
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
        'result_type' => 
        array (
          'position' => 0,
          'name' => 'result_type',
          'type' => NULL,
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
    'fetch_array' => 
    array (
      'name' => 'fetch_array',
      'class' => 'mysqli_result',
      'parameters' => 
      array (
        'result_type' => 
        array (
          'position' => 0,
          'name' => 'result_type',
          'type' => NULL,
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
        'class_name' => 
        array (
          'position' => 0,
          'name' => 'class_name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'params' => 
        array (
          'position' => 1,
          'name' => 'params',
          'type' => 'array',
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
        'field_nr' => 
        array (
          'position' => 0,
          'name' => 'field_nr',
          'type' => NULL,
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
  ),
  'interfaces' => 
  array (
    0 => 'Traversable',
  ),
  'properties' => 
  array (
    'current_field' => 
    array (
      'name' => 'current_field',
      'class' => 'mysqli_result',
      'type' => NULL,
      'has_default_value' => false,
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
      'has_default_value' => false,
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
      'has_default_value' => false,
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
      'has_default_value' => false,
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
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'mysqli',
  'toString' => 'Class [ <internal:mysqli> <iterateable> class mysqli_result implements Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [5] {
    Property [ <default> public $current_field ]
    Property [ <default> public $field_count ]
    Property [ <default> public $lengths ]
    Property [ <default> public $num_rows ]
    Property [ <default> public $type ]
  }

  - Methods [14] {
    Method [ <internal:mysqli, ctor> public method __construct ] {
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
        Parameter #0 [ <required> $offset ]
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
        Parameter #0 [ <required> $field_nr ]
      }
    }

    Method [ <internal:mysqli> public method fetch_all ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $result_type ]
      }
    }

    Method [ <internal:mysqli> public method fetch_array ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $result_type ]
      }
    }

    Method [ <internal:mysqli> public method fetch_assoc ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method fetch_object ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $class_name ]
        Parameter #1 [ <optional> array $params ]
      }
    }

    Method [ <internal:mysqli> public method fetch_row ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method field_seek ] {

      - Parameters [1] {
        Parameter #0 [ <required> $field_nr ]
      }
    }

    Method [ <internal:mysqli> public method free_result ] {

      - Parameters [0] {
      }
    }
  }
}
',
  'modifiers' => 0,
  'defaultProperties' => 
  array (
    'current_field' => NULL,
    'field_count' => NULL,
    'lengths' => NULL,
    'num_rows' => NULL,
    'type' => NULL,
  ),
  'staticProperties' => 
  array (
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
);
