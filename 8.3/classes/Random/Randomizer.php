<?php

return array (
  'type' => 'class',
  'name' => 'Random\\Randomizer',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Random\\Randomizer',
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
        'name' => 'Random\\Randomizer interface (php.net)',
        'url' => 'https://www.php.net/manual/class.random-randomizer.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Random',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
        'engine' => 
        array (
          'position' => 0,
          'name' => 'engine',
          'type' => '?Random\\Engine',
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
    'nextInt' => 
    array (
      'name' => 'nextInt',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'nextFloat' => 
    array (
      'name' => 'nextFloat',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
      ),
      'return_type' => 'float',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFloat' => 
    array (
      'name' => 'getFloat',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
        'min' => 
        array (
          'position' => 0,
          'name' => 'min',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max' => 
        array (
          'position' => 1,
          'name' => 'max',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'boundary' => 
        array (
          'position' => 2,
          'name' => 'boundary',
          'type' => 'Random\\IntervalBoundary',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Random\\IntervalBoundary::ClosedOpen',
        ),
      ),
      'return_type' => 'float',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getInt' => 
    array (
      'name' => 'getInt',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
        'min' => 
        array (
          'position' => 0,
          'name' => 'min',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max' => 
        array (
          'position' => 1,
          'name' => 'max',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getBytes' => 
    array (
      'name' => 'getBytes',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
        'length' => 
        array (
          'position' => 0,
          'name' => 'length',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getBytesFromString' => 
    array (
      'name' => 'getBytesFromString',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 1,
          'name' => 'length',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shuffleArray' => 
    array (
      'name' => 'shuffleArray',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
        'array' => 
        array (
          'position' => 0,
          'name' => 'array',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'shuffleBytes' => 
    array (
      'name' => 'shuffleBytes',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
        'bytes' => 
        array (
          'position' => 0,
          'name' => 'bytes',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pickArrayKeys' => 
    array (
      'name' => 'pickArrayKeys',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
        'array' => 
        array (
          'position' => 0,
          'name' => 'array',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'num' => 
        array (
          'position' => 1,
          'name' => 'num',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__unserialize' => 
    array (
      'name' => '__unserialize',
      'class' => 'Random\\Randomizer',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
    'engine' => 
    array (
      'name' => 'engine',
      'class' => 'Random\\Randomizer',
      'type' => 'Random\\Engine',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'random',
  'toString' => 'Class [ <internal:random> final class Random\\Randomizer ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ public readonly Random\\Engine $engine ]
  }

  - Methods [12] {
    Method [ <internal:random, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?Random\\Engine $engine = null ]
      }
    }

    Method [ <internal:random> public method nextInt ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:random> public method nextFloat ] {

      - Parameters [0] {
      }
      - Return [ float ]
    }

    Method [ <internal:random> public method getFloat ] {

      - Parameters [3] {
        Parameter #0 [ <required> float $min ]
        Parameter #1 [ <required> float $max ]
        Parameter #2 [ <optional> Random\\IntervalBoundary $boundary = Random\\IntervalBoundary::ClosedOpen ]
      }
      - Return [ float ]
    }

    Method [ <internal:random> public method getInt ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $min ]
        Parameter #1 [ <required> int $max ]
      }
      - Return [ int ]
    }

    Method [ <internal:random> public method getBytes ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $length ]
      }
      - Return [ string ]
    }

    Method [ <internal:random> public method getBytesFromString ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $string ]
        Parameter #1 [ <required> int $length ]
      }
      - Return [ string ]
    }

    Method [ <internal:random> public method shuffleArray ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $array ]
      }
      - Return [ array ]
    }

    Method [ <internal:random> public method shuffleBytes ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $bytes ]
      }
      - Return [ string ]
    }

    Method [ <internal:random> public method pickArrayKeys ] {

      - Parameters [2] {
        Parameter #0 [ <required> array $array ]
        Parameter #1 [ <required> int $num ]
      }
      - Return [ array ]
    }

    Method [ <internal:random> public method __serialize ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:random> public method __unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
      - Return [ void ]
    }
  }
}
',
  'modifiers' => 32,
  'defaultProperties' => 
  array (
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
  'is_final' => true,
  'is_instantiable' => true,
  'is_read_only' => false,
);
