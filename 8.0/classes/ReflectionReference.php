<?php

return array (
  'type' => 'class',
  'name' => 'ReflectionReference',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ReflectionReference',
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
        'name' => 'ReflectionReference class (php.net)',
        'url' => 'https://www.php.net/manual/class.reflectionreference.php',
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
    'fromArrayElement' => 
    array (
      'name' => 'fromArrayElement',
      'class' => 'ReflectionReference',
      'parameters' => 
      array (
        'array' => 
        array (
          'position' => 0,
          'name' => 'array',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
          'name' => 'key',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?ReflectionReference',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getId' => 
    array (
      'name' => 'getId',
      'class' => 'ReflectionReference',
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
    '__clone' => 
    array (
      'name' => '__clone',
      'class' => 'ReflectionReference',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'ReflectionReference',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'extension' => 'Reflection',
  'toString' => 'Class [ <internal:Reflection> final class ReflectionReference ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:Reflection> static public method fromArrayElement ] {

      - Parameters [2] {
        Parameter #0 [ <required> array $array ]
        Parameter #1 [ <required> string|int $key ]
      }
      - Return [ ?ReflectionReference ]
    }
  }

  - Properties [0] {
  }

  - Methods [3] {
    Method [ <internal:Reflection> public method getId ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Reflection> private method __clone ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:Reflection, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
