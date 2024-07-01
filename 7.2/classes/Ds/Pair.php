<?php

return array (
  'type' => 'class',
  'name' => 'Ds\\Pair',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Ds\\Pair',
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
        'name' => 'Ds\\Pair class (php.net)',
        'url' => 'https://www.php.net/manual/class.ds-pair.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'JsonSerializable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
    'key' => 
    array (
      'name' => 'key',
      'class' => 'Ds\\Pair',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'value' => 
    array (
      'name' => 'value',
      'class' => 'Ds\\Pair',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Ds\\Pair',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
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
    'copy' => 
    array (
      'name' => 'copy',
      'class' => 'Ds\\Pair',
      'parameters' => 
      array (
      ),
      'return_type' => 'Ds\\Pair',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'jsonSerialize' => 
    array (
      'name' => 'jsonSerialize',
      'class' => 'Ds\\Pair',
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
    'toArray' => 
    array (
      'name' => 'toArray',
      'class' => 'Ds\\Pair',
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
  'toString' => 'Class [ <internal:ds> final class Ds\\Pair implements JsonSerializable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ <default> public $key ]
    Property [ <default> public $value ]
  }

  - Methods [4] {
    Method [ <internal:ds, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $key ]
        Parameter #1 [ <optional> $value ]
      }
    }

    Method [ <internal:ds> public method copy ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Pair ]
    }

    Method [ <internal:ds, prototype JsonSerializable> public method jsonSerialize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds> public method toArray ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }
}
',
);
