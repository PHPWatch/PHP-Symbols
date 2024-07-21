<?php

return array (
  'type' => 'class',
  'name' => 'ZendTestStringEnum',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZendTestStringEnum',
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
        'name' => 'ZendTestStringEnum class (php.net)',
        'url' => 'https://www.php.net/manual/class.zendteststringenum.php',
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
    \ZendTestStringEnum::Foo,
    'Bar' => 
    \ZendTestStringEnum::Bar,
    'Baz' => 
    \ZendTestStringEnum::Baz,
    'FortyTwo' => 
    \ZendTestStringEnum::FortyTwo,
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'ZendTestStringEnum',
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
      'class' => 'ZendTestStringEnum',
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
      'class' => 'ZendTestStringEnum',
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
      'class' => 'ZendTestStringEnum',
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
      'class' => 'ZendTestStringEnum',
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
  'toString' => 'Class [ <internal:zend_test> class ZendTestStringEnum implements BackedEnum, UnitEnum ] {

  - Constants [4] {
    Constant [ public ZendTestStringEnum Foo ] { Object }
    Constant [ public ZendTestStringEnum Bar ] { Object }
    Constant [ public ZendTestStringEnum Baz ] { Object }
    Constant [ public ZendTestStringEnum FortyTwo ] { Object }
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
    Property [ public readonly string $value ]
  }

  - Methods [0] {
  }
}
',
);
