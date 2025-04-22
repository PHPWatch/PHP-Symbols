<?php

return array (
  'type' => 'enum',
  'name' => 'Dom\\AdjacentPosition',
  'meta' => 
  array (
    'type' => 'enum',
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
        'name' => 'Dom\\AdjacentPosition interface (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-adjacentposition.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Dom',
  'constants' => 
  array (
    'BeforeBegin' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Dom\\AdjacentPosition BeforeBegin ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'AfterBegin' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Dom\\AdjacentPosition AfterBegin ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'BeforeEnd' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Dom\\AdjacentPosition BeforeEnd ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'AfterEnd' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public Dom\\AdjacentPosition AfterEnd ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
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
  'interfaces' => 
  array (
    0 => 'BackedEnum',
    1 => 'UnitEnum',
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
  'extension' => 'dom',
  'toString' => 'Enum [ <internal:dom> enum Dom\\AdjacentPosition: string implements BackedEnum, UnitEnum ] {

  - Enum cases [4] {
    Case BeforeBegin = beforebegin
    Case AfterBegin = afterbegin
    Case BeforeEnd = beforeend
    Case AfterEnd = afterend
  }

  - Constants [0] {
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
  'modifiers' => 0,
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
  'is_final' => false,
  'is_instantiable' => false,
  'is_read_only' => false,
);
