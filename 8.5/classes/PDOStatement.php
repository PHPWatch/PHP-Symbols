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
  'properties' => 
  array (
    'queryString' => 
    array (
      'name' => 'queryString',
      'class' => 'PDOStatement',
      'type' => 'string',
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
          'default_value' => 2,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PDO::PARAM_STR',
        ),
        'maxLength' => 
        array (
          'position' => 3,
          'name' => 'maxLength',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'driverOptions' => 
        array (
          'position' => 4,
          'name' => 'driverOptions',
          'type' => 'mixed',
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
    'bindParam' => 
    array (
      'name' => 'bindParam',
      'class' => 'PDOStatement',
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
          'default_value' => 2,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PDO::PARAM_STR',
        ),
        'maxLength' => 
        array (
          'position' => 3,
          'name' => 'maxLength',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'driverOptions' => 
        array (
          'position' => 4,
          'name' => 'driverOptions',
          'type' => 'mixed',
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
    'bindValue' => 
    array (
      'name' => 'bindValue',
      'class' => 'PDOStatement',
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
          'default_value' => 2,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PDO::PARAM_STR',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'execute' => 
    array (
      'name' => 'execute',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'params' => 
        array (
          'position' => 0,
          'name' => 'params',
          'type' => '?array',
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
    'fetch' => 
    array (
      'name' => 'fetch',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PDO::FETCH_DEFAULT',
        ),
        'cursorOrientation' => 
        array (
          'position' => 1,
          'name' => 'cursorOrientation',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PDO::FETCH_ORI_NEXT',
        ),
        'cursorOffset' => 
        array (
          'position' => 2,
          'name' => 'cursorOffset',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
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
    'fetchAll' => 
    array (
      'name' => 'fetchAll',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'PDO::FETCH_DEFAULT',
        ),
        'args' => 
        array (
          'position' => 1,
          'name' => 'args',
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
    'fetchColumn' => 
    array (
      'name' => 'fetchColumn',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'column' => 
        array (
          'position' => 0,
          'name' => 'column',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
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
    'fetchObject' => 
    array (
      'name' => 'fetchObject',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'class' => 
        array (
          'position' => 0,
          'name' => 'class',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'stdClass',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'constructorArgs' => 
        array (
          'position' => 1,
          'name' => 'constructorArgs',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 
          array (
          ),
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
    'getAttribute' => 
    array (
      'name' => 'getAttribute',
      'class' => 'PDOStatement',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'nextRowset' => 
    array (
      'name' => 'nextRowset',
      'class' => 'PDOStatement',
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
    'rowCount' => 
    array (
      'name' => 'rowCount',
      'class' => 'PDOStatement',
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
          'type' => 'mixed',
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
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'args' => 
        array (
          'position' => 1,
          'name' => 'args',
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
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'PDOStatement',
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
  'is_read_only' => false,
  'extension' => 'PDO',
  'toString' => 'Class [ <internal:PDO> <iterateable> class PDOStatement implements IteratorAggregate, Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ public string $queryString ]
  }

  - Methods [20] {
    Method [ <internal:PDO> public method bindColumn ] {

      - Parameters [5] {
        Parameter #0 [ <required> string|int $column ]
        Parameter #1 [ <required> mixed &$var ]
        Parameter #2 [ <optional> int $type = PDO::PARAM_STR ]
        Parameter #3 [ <optional> int $maxLength = 0 ]
        Parameter #4 [ <optional> mixed $driverOptions = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method bindParam ] {

      - Parameters [5] {
        Parameter #0 [ <required> string|int $param ]
        Parameter #1 [ <required> mixed &$var ]
        Parameter #2 [ <optional> int $type = PDO::PARAM_STR ]
        Parameter #3 [ <optional> int $maxLength = 0 ]
        Parameter #4 [ <optional> mixed $driverOptions = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method bindValue ] {

      - Parameters [3] {
        Parameter #0 [ <required> string|int $param ]
        Parameter #1 [ <required> mixed $value ]
        Parameter #2 [ <optional> int $type = PDO::PARAM_STR ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method closeCursor ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method columnCount ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:PDO> public method debugDumpParams ] {

      - Parameters [0] {
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:PDO> public method errorCode ] {

      - Parameters [0] {
      }
      - Tentative return [ ?string ]
    }

    Method [ <internal:PDO> public method errorInfo ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:PDO> public method execute ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?array $params = null ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method fetch ] {

      - Parameters [3] {
        Parameter #0 [ <optional> int $mode = PDO::FETCH_DEFAULT ]
        Parameter #1 [ <optional> int $cursorOrientation = PDO::FETCH_ORI_NEXT ]
        Parameter #2 [ <optional> int $cursorOffset = 0 ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:PDO> public method fetchAll ] {

      - Parameters [2] {
        Parameter #0 [ <optional> int $mode = PDO::FETCH_DEFAULT ]
        Parameter #1 [ <optional> mixed ...$args ]
      }
      - Tentative return [ array ]
    }

    Method [ <internal:PDO> public method fetchColumn ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $column = 0 ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:PDO> public method fetchObject ] {

      - Parameters [2] {
        Parameter #0 [ <optional> ?string $class = "stdClass" ]
        Parameter #1 [ <optional> array $constructorArgs = [] ]
      }
      - Tentative return [ object|false ]
    }

    Method [ <internal:PDO> public method getAttribute ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $name ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:PDO> public method getColumnMeta ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $column ]
      }
      - Tentative return [ array|false ]
    }

    Method [ <internal:PDO> public method nextRowset ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method rowCount ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:PDO> public method setAttribute ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $attribute ]
        Parameter #1 [ <required> mixed $value ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:PDO> public method setFetchMode ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $mode ]
        Parameter #1 [ <optional> mixed ...$args ]
      }
      - Tentative return [ true ]
    }

    Method [ <internal:PDO, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Iterator ]
    }
  }
}
',
);
