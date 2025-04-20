<?php

return array (
  'type' => 'class',
  'name' => 'Random\\Engine\\Xoshiro256StarStar',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Random\\Engine\\Xoshiro256StarStar',
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
        'name' => 'Random\\Engine\\Xoshiro256StarStar class (php.net)',
        'url' => 'https://www.php.net/manual/class.random-engine-xoshiro256starstar.php',
      ),
    ),
  ),
  'modifiers' => 32,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => 'Random\\Engine',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
    0 => 'Random\\Engine',
  ),
  'constants' => 
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
      'class' => 'Random\\Engine\\Xoshiro256StarStar',
      'parameters' => 
      array (
        'seed' => 
        array (
          'position' => 0,
          'name' => 'seed',
          'type' => 'string|int|null',
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
    'generate' => 
    array (
      'name' => 'generate',
      'class' => 'Random\\Engine\\Xoshiro256StarStar',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'jump' => 
    array (
      'name' => 'jump',
      'class' => 'Random\\Engine\\Xoshiro256StarStar',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'jumpLong' => 
    array (
      'name' => 'jumpLong',
      'class' => 'Random\\Engine\\Xoshiro256StarStar',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'Random\\Engine\\Xoshiro256StarStar',
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
      'class' => 'Random\\Engine\\Xoshiro256StarStar',
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
    '__debugInfo' => 
    array (
      'name' => '__debugInfo',
      'class' => 'Random\\Engine\\Xoshiro256StarStar',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_read_only' => false,
  'extension' => 'random',
  'toString' => 'Class [ <internal:random> final class Random\\Engine\\Xoshiro256StarStar implements Random\\Engine ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [7] {
    Method [ <internal:random, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string|int|null $seed = null ]
      }
    }

    Method [ <internal:random, prototype Random\\Engine> public method generate ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:random> public method jump ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:random> public method jumpLong ] {

      - Parameters [0] {
      }
      - Return [ void ]
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

    Method [ <internal:random> public method __debugInfo ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }
}
',
);
