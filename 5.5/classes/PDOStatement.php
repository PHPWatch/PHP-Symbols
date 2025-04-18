<?php

return array (
  'type' => 'class',
  'name' => 'PDOStatement',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'PDOStatement',
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
        'name' => 'PDOStatement class (php.net)',
        'url' => 'https://www.php.net/manual/class.pdostatement.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
    'queryString' => NULL,
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
    0 => 'Traversable',
  ),
  'properties' => 
  array (
    'queryString' => 
    array (
      'name' => 'queryString',
      'class' => 'PDOStatement',
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
  'methods' => 
  array (
    'execute' => 
    array (
      'name' => 'execute',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'bound_input_params' => 
        array (
          'position' => 0,
          'name' => 'bound_input_params',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'fetch' => 
    array (
      'name' => 'fetch',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'how' => 
        array (
          'position' => 0,
          'name' => 'how',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'orientation' => 
        array (
          'position' => 1,
          'name' => 'orientation',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 2,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'bindParam' => 
    array (
      'name' => 'bindParam',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'paramno' => 
        array (
          'position' => 0,
          'name' => 'paramno',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'param' => 
        array (
          'position' => 1,
          'name' => 'param',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 2,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'maxlen' => 
        array (
          'position' => 3,
          'name' => 'maxlen',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'driverdata' => 
        array (
          'position' => 4,
          'name' => 'driverdata',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'bindColumn' => 
    array (
      'name' => 'bindColumn',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'column' => 
        array (
          'position' => 0,
          'name' => 'column',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'param' => 
        array (
          'position' => 1,
          'name' => 'param',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 2,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'maxlen' => 
        array (
          'position' => 3,
          'name' => 'maxlen',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'driverdata' => 
        array (
          'position' => 4,
          'name' => 'driverdata',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'bindValue' => 
    array (
      'name' => 'bindValue',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'paramno' => 
        array (
          'position' => 0,
          'name' => 'paramno',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'param' => 
        array (
          'position' => 1,
          'name' => 'param',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 2,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'rowCount' => 
    array (
      'name' => 'rowCount',
      'class' => 'PDOStatement',
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
    'fetchColumn' => 
    array (
      'name' => 'fetchColumn',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'column_number' => 
        array (
          'position' => 0,
          'name' => 'column_number',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'how' => 
        array (
          'position' => 0,
          'name' => 'how',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'class_name' => 
        array (
          'position' => 1,
          'name' => 'class_name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ctor_args' => 
        array (
          'position' => 2,
          'name' => 'ctor_args',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
      'class' => 'PDOStatement',
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
        'ctor_args' => 
        array (
          'position' => 1,
          'name' => 'ctor_args',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'errorCode' => 
    array (
      'name' => 'errorCode',
      'class' => 'PDOStatement',
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
    'errorInfo' => 
    array (
      'name' => 'errorInfo',
      'class' => 'PDOStatement',
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
    'setAttribute' => 
    array (
      'name' => 'setAttribute',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'attribute' => 
        array (
          'position' => 0,
          'name' => 'attribute',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'getAttribute' => 
    array (
      'name' => 'getAttribute',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'attribute' => 
        array (
          'position' => 0,
          'name' => 'attribute',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'columnCount' => 
    array (
      'name' => 'columnCount',
      'class' => 'PDOStatement',
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
    'getColumnMeta' => 
    array (
      'name' => 'getColumnMeta',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'column' => 
        array (
          'position' => 0,
          'name' => 'column',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'setFetchMode' => 
    array (
      'name' => 'setFetchMode',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'params' => 
        array (
          'position' => 1,
          'name' => 'params',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
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
    'nextRowset' => 
    array (
      'name' => 'nextRowset',
      'class' => 'PDOStatement',
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
    'closeCursor' => 
    array (
      'name' => 'closeCursor',
      'class' => 'PDOStatement',
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
    'debugDumpParams' => 
    array (
      'name' => 'debugDumpParams',
      'class' => 'PDOStatement',
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
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'PDOStatement',
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
    '__sleep' => 
    array (
      'name' => '__sleep',
      'class' => 'PDOStatement',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'PDO',
  'toString' => 'Class [ <internal:PDO> <iterateable> class PDOStatement implements Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ <default> public $queryString ]
  }

  - Methods [21] {
    Method [ <internal:PDO> public method execute ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $bound_input_params ]
      }
    }

    Method [ <internal:PDO> public method fetch ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $how ]
        Parameter #1 [ <optional> $orientation ]
        Parameter #2 [ <optional> $offset ]
      }
    }

    Method [ <internal:PDO> public method bindParam ] {

      - Parameters [5] {
        Parameter #0 [ <required> $paramno ]
        Parameter #1 [ <required> &$param ]
        Parameter #2 [ <optional> $type ]
        Parameter #3 [ <optional> $maxlen ]
        Parameter #4 [ <optional> $driverdata ]
      }
    }

    Method [ <internal:PDO> public method bindColumn ] {

      - Parameters [5] {
        Parameter #0 [ <required> $column ]
        Parameter #1 [ <required> &$param ]
        Parameter #2 [ <optional> $type ]
        Parameter #3 [ <optional> $maxlen ]
        Parameter #4 [ <optional> $driverdata ]
      }
    }

    Method [ <internal:PDO> public method bindValue ] {

      - Parameters [3] {
        Parameter #0 [ <required> $paramno ]
        Parameter #1 [ <required> $param ]
        Parameter #2 [ <optional> $type ]
      }
    }

    Method [ <internal:PDO> public method rowCount ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method fetchColumn ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $column_number ]
      }
    }

    Method [ <internal:PDO> public method fetchAll ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $how ]
        Parameter #1 [ <optional> $class_name ]
        Parameter #2 [ <optional> $ctor_args ]
      }
    }

    Method [ <internal:PDO> public method fetchObject ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $class_name ]
        Parameter #1 [ <optional> $ctor_args ]
      }
    }

    Method [ <internal:PDO> public method errorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method errorInfo ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method setAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> $attribute ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:PDO> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> $attribute ]
      }
    }

    Method [ <internal:PDO> public method columnCount ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method getColumnMeta ] {

      - Parameters [1] {
        Parameter #0 [ <required> $column ]
      }
    }

    Method [ <internal:PDO> public method setFetchMode ] {

      - Parameters [2] {
        Parameter #0 [ <required> $mode ]
        Parameter #1 [ <optional> $params ]
      }
    }

    Method [ <internal:PDO> public method nextRowset ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method closeCursor ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> public method debugDumpParams ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> final public method __wakeup ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:PDO> final public method __sleep ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
