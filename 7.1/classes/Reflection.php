<?php

return array (
  'type' => 'class',
  'name' => 'Reflection',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Reflection',
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
        'name' => 'Reflection class (php.net)',
        'url' => 'https://www.php.net/manual/class.reflection.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'getModifierNames' => 
    array (
      'name' => 'getModifierNames',
      'class' => 'Reflection',
      'parameters' => 
      array (
        'modifiers' => 
        array (
          'position' => 0,
          'name' => 'modifiers',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'export' => 
    array (
      'name' => 'export',
      'class' => 'Reflection',
      'parameters' => 
      array (
        'reflector' => 
        array (
          'position' => 0,
          'name' => 'reflector',
          'type' => 'Reflector',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'return' => 
        array (
          'position' => 1,
          'name' => 'return',
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'Reflection',
  'toString' => 'Class [ <internal:Reflection> class Reflection ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:Reflection> static public method getModifierNames ] {

      - Parameters [1] {
        Parameter #0 [ <required> $modifiers ]
      }
    }

    Method [ <internal:Reflection> static public method export ] {

      - Parameters [2] {
        Parameter #0 [ <required> Reflector $reflector ]
        Parameter #1 [ <optional> $return ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [0] {
  }
}
',
);
