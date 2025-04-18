<?php

return array (
  'type' => 'class',
  'name' => 'mysqli_stmt',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'mysqli_stmt',
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
        'name' => 'mysqli_stmt class (php.net)',
        'url' => 'https://www.php.net/manual/class.mysqli_stmt.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
    'affected_rows' => NULL,
    'insert_id' => NULL,
    'num_rows' => NULL,
    'param_count' => NULL,
    'field_count' => NULL,
    'errno' => NULL,
    'error' => NULL,
    'error_list' => NULL,
    'sqlstate' => NULL,
    'id' => NULL,
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
    'affected_rows' => 
    array (
      'name' => 'affected_rows',
      'class' => 'mysqli_stmt',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'insert_id' => 
    array (
      'name' => 'insert_id',
      'class' => 'mysqli_stmt',
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
      'class' => 'mysqli_stmt',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'param_count' => 
    array (
      'name' => 'param_count',
      'class' => 'mysqli_stmt',
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
      'class' => 'mysqli_stmt',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'errno' => 
    array (
      'name' => 'errno',
      'class' => 'mysqli_stmt',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'error' => 
    array (
      'name' => 'error',
      'class' => 'mysqli_stmt',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'error_list' => 
    array (
      'name' => 'error_list',
      'class' => 'mysqli_stmt',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'sqlstate' => 
    array (
      'name' => 'sqlstate',
      'class' => 'mysqli_stmt',
      'type' => NULL,
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'id' => 
    array (
      'name' => 'id',
      'class' => 'mysqli_stmt',
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
      'class' => 'mysqli_stmt',
      'parameters' => 
      array (
        'mysql' => 
        array (
          'position' => 0,
          'name' => 'mysql',
          'type' => 'mysqli',
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
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'attr_get' => 
    array (
      'name' => 'attr_get',
      'class' => 'mysqli_stmt',
      'parameters' => 
      array (
        'attribute' => 
        array (
          'position' => 0,
          'name' => 'attribute',
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
    'attr_set' => 
    array (
      'name' => 'attr_set',
      'class' => 'mysqli_stmt',
      'parameters' => 
      array (
        'attribute' => 
        array (
          'position' => 0,
          'name' => 'attribute',
          'type' => 'int',
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
    'bind_param' => 
    array (
      'name' => 'bind_param',
      'class' => 'mysqli_stmt',
      'parameters' => 
      array (
        'types' => 
        array (
          'position' => 0,
          'name' => 'types',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'vars' => 
        array (
          'position' => 1,
          'name' => 'vars',
          'type' => 'mixed',
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
    'bind_result' => 
    array (
      'name' => 'bind_result',
      'class' => 'mysqli_stmt',
      'parameters' => 
      array (
        'vars' => 
        array (
          'position' => 0,
          'name' => 'vars',
          'type' => 'mixed',
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
      'class' => 'mysqli_stmt',
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
      'class' => 'mysqli_stmt',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
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
    'execute' => 
    array (
      'name' => 'execute',
      'class' => 'mysqli_stmt',
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
    'fetch' => 
    array (
      'name' => 'fetch',
      'class' => 'mysqli_stmt',
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
    'get_warnings' => 
    array (
      'name' => 'get_warnings',
      'class' => 'mysqli_stmt',
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
    'result_metadata' => 
    array (
      'name' => 'result_metadata',
      'class' => 'mysqli_stmt',
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
    'more_results' => 
    array (
      'name' => 'more_results',
      'class' => 'mysqli_stmt',
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
    'next_result' => 
    array (
      'name' => 'next_result',
      'class' => 'mysqli_stmt',
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
    'num_rows' => 
    array (
      'name' => 'num_rows',
      'class' => 'mysqli_stmt',
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
    'send_long_data' => 
    array (
      'name' => 'send_long_data',
      'class' => 'mysqli_stmt',
      'parameters' => 
      array (
        'param_num' => 
        array (
          'position' => 0,
          'name' => 'param_num',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'data' => 
        array (
          'position' => 1,
          'name' => 'data',
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
    'free_result' => 
    array (
      'name' => 'free_result',
      'class' => 'mysqli_stmt',
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
      'class' => 'mysqli_stmt',
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
    'prepare' => 
    array (
      'name' => 'prepare',
      'class' => 'mysqli_stmt',
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
    'store_result' => 
    array (
      'name' => 'store_result',
      'class' => 'mysqli_stmt',
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
    'get_result' => 
    array (
      'name' => 'get_result',
      'class' => 'mysqli_stmt',
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
  'extension' => 'mysqli',
  'toString' => 'Class [ <internal:mysqli> class mysqli_stmt ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [10] {
    Property [ public $affected_rows = NULL ]
    Property [ public $insert_id = NULL ]
    Property [ public $num_rows = NULL ]
    Property [ public $param_count = NULL ]
    Property [ public $field_count = NULL ]
    Property [ public $errno = NULL ]
    Property [ public $error = NULL ]
    Property [ public $error_list = NULL ]
    Property [ public $sqlstate = NULL ]
    Property [ public $id = NULL ]
  }

  - Methods [20] {
    Method [ <internal:mysqli, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> mysqli $mysql ]
        Parameter #1 [ <optional> ?string $query = null ]
      }
    }

    Method [ <internal:mysqli> public method attr_get ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $attribute ]
      }
    }

    Method [ <internal:mysqli> public method attr_set ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $attribute ]
        Parameter #1 [ <required> int $value ]
      }
    }

    Method [ <internal:mysqli> public method bind_param ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $types ]
        Parameter #1 [ <optional> mixed &...$vars ]
      }
    }

    Method [ <internal:mysqli> public method bind_result ] {

      - Parameters [1] {
        Parameter #0 [ <optional> mixed &...$vars ]
      }
    }

    Method [ <internal:mysqli> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method data_seek ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $offset ]
      }
    }

    Method [ <internal:mysqli> public method execute ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method fetch ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method get_warnings ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method result_metadata ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method more_results ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method next_result ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method num_rows ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method send_long_data ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $param_num ]
        Parameter #1 [ <required> string $data ]
      }
    }

    Method [ <internal:mysqli> public method free_result ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method reset ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method prepare ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $query ]
      }
    }

    Method [ <internal:mysqli> public method store_result ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method get_result ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
