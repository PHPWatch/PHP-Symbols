<?php

return array (
  'type' => 'class',
  'name' => 'Dom\\AdjacentPosition',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Dom\\AdjacentPosition',
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
        'name' => 'Dom\\AdjacentPosition class (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-adjacentposition.php',
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
    'BeforeBegin' => 
    \Dom\AdjacentPosition::BeforeBegin,
    'AfterBegin' => 
    \Dom\AdjacentPosition::AfterBegin,
    'BeforeEnd' => 
    \Dom\AdjacentPosition::BeforeEnd,
    'AfterEnd' => 
    \Dom\AdjacentPosition::AfterEnd,
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'Dom\\AdjacentPosition',
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
      'class' => 'Dom\\AdjacentPosition',
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
      'class' => 'Dom\\AdjacentPosition',
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
      'class' => 'Dom\\AdjacentPosition',
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
      'class' => 'Dom\\AdjacentPosition',
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
  'extension' => 'dom',
  'toString' => 'Class [ <internal:dom> class Dom\\AdjacentPosition implements BackedEnum, UnitEnum ] {

  - Constants [4] {
    Constant [ public Dom\\AdjacentPosition BeforeBegin ] { Object }
    Constant [ public Dom\\AdjacentPosition AfterBegin ] { Object }
    Constant [ public Dom\\AdjacentPosition BeforeEnd ] { Object }
    Constant [ public Dom\\AdjacentPosition AfterEnd ] { Object }
  }

  - Static properties [0] {
  }

  - Static methods [3] {
    Method [ <internal:dom, prototype UnitEnum> static public method cases ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:dom, prototype BackedEnum> static public method from ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $value ]
      }
      - Return [ static ]
    }

    Method [ <internal:dom, prototype BackedEnum> static public method tryFrom ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $value ]
      }
      - Return [ ?static ]
    }
  }

  - Properties [2] {
    Property [ public protected(set) readonly string $name ]
    Property [ public protected(set) readonly string $value ]
  }

  - Methods [0] {
  }
}
',
);
