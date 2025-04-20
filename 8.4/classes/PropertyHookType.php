<?php

return array (
  'type' => 'class',
  'name' => 'PropertyHookType',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'PropertyHookType',
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
        'name' => 'PropertyHookType class (php.net)',
        'url' => 'https://www.php.net/manual/class.propertyhooktype.php',
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
    0 => 'BackedEnum',
    1 => 'UnitEnum',
  ),
  'constants' => 
  array (
    'Get' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public PropertyHookType Get ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
    'Set' => 
    array (
      'value' => NULL,
      'toString' => 'Constant [ public PropertyHookType Set ] { Object }
',
      'visibility' => 1,
      'isFinal' => false,
      'isEnumCase' => true,
    ),
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'PropertyHookType',
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
      'class' => 'PropertyHookType',
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
      'class' => 'PropertyHookType',
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
      'class' => 'PropertyHookType',
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
      'class' => 'PropertyHookType',
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'Reflection',
  'toString' => 'Class [ <internal:Reflection> class PropertyHookType implements BackedEnum, UnitEnum ] {

  - Constants [2] {
    Constant [ public PropertyHookType Get ] { Object }
    Constant [ public PropertyHookType Set ] { Object }
  }

  - Static properties [0] {
  }

  - Static methods [3] {
    Method [ <internal:Reflection, prototype UnitEnum> static public method cases ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:Reflection, prototype BackedEnum> static public method from ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $value ]
      }
      - Return [ static ]
    }

    Method [ <internal:Reflection, prototype BackedEnum> static public method tryFrom ] {

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
