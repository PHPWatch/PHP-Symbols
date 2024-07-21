<?php

return array (
  'type' => 'class',
  'name' => 'ZendTestUnitEnum',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZendTestUnitEnum',
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
        'name' => 'ZendTestUnitEnum class (php.net)',
        'url' => 'https://www.php.net/manual/class.zendtestunitenum.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'UnitEnum',
  ),
  'constants' => 
  array (
    'Foo' => 
    \ZendTestUnitEnum::Foo,
    'Bar' => 
    \ZendTestUnitEnum::Bar,
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'ZendTestUnitEnum',
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
    'cases' => 
    array (
      'name' => 'cases',
      'class' => 'ZendTestUnitEnum',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => true,
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
  'toString' => 'Class [ <internal:zend_test> class ZendTestUnitEnum implements UnitEnum ] {

  - Constants [2] {
    Constant [ public ZendTestUnitEnum Foo ] { Object }
    Constant [ public ZendTestUnitEnum Bar ] { Object }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:zend_test, prototype UnitEnum> static public method cases ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }

  - Properties [1] {
    Property [ public readonly string $name ]
  }

  - Methods [0] {
  }
}
',
);
