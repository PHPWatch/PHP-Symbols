<?php

return array (
  'type' => 'class',
  'name' => 'ZendTestIntEnum',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZendTestIntEnum',
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
        'name' => 'ZendTestIntEnum class (php.net)',
        'url' => 'https://www.php.net/manual/class.zendtestintenum.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'BackedEnum',
    1 => 'UnitEnum',
  ),
  'constants' => 
  array (
    'Foo' => 
    \ZendTestIntEnum::Foo,
    'Bar' => 
    \ZendTestIntEnum::Bar,
    'Baz' => 
    \ZendTestIntEnum::Baz,
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'ZendTestIntEnum',
      'type' => 'string',
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
      'class' => 'ZendTestIntEnum',
      'type' => 'int',
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
      'class' => 'ZendTestIntEnum',
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
    'from' => 
    array (
      'name' => 'from',
      'class' => 'ZendTestIntEnum',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'static',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'tryFrom' => 
    array (
      'name' => 'tryFrom',
      'class' => 'ZendTestIntEnum',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?static',
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
  'toString' => 'Class [ <internal:zend_test> class ZendTestIntEnum implements BackedEnum, UnitEnum ] {

  - Constants [3] {
    Constant [ public ZendTestIntEnum Foo ] { Object }
    Constant [ public ZendTestIntEnum Bar ] { Object }
    Constant [ public ZendTestIntEnum Baz ] { Object }
  }

  - Static properties [0] {
  }

  - Static methods [3] {
    Method [ <internal:zend_test, prototype UnitEnum> static public method cases ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:zend_test, prototype BackedEnum> static public method from ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $value ]
      }
      - Return [ static ]
    }

    Method [ <internal:zend_test, prototype BackedEnum> static public method tryFrom ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $value ]
      }
      - Return [ ?static ]
    }
  }

  - Properties [2] {
    Property [ public readonly string $name ]
    Property [ public readonly int $value ]
  }

  - Methods [0] {
  }
}
',
);
