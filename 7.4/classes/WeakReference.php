<?php

return array (
  'type' => 'class',
  'name' => 'WeakReference',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'WeakReference',
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
        'name' => 'WeakReference interface (php.net)',
        'url' => 'https://www.php.net/manual/class.weakreference.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'WeakReference',
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
    'create' => 
    array (
      'name' => 'create',
      'class' => 'WeakReference',
      'parameters' => 
      array (
        'referent' => 
        array (
          'position' => 0,
          'name' => 'referent',
          'type' => 'object',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'WeakReference',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'get' => 
    array (
      'name' => 'get',
      'class' => 'WeakReference',
      'parameters' => 
      array (
      ),
      'return_type' => 'object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'Core',
  'toString' => 'Class [ <internal:Core> final class WeakReference ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:Core> static public method create ] {

      - Parameters [1] {
        Parameter #0 [ <required> object $referent ]
      }
      - Return [ WeakReference ]
    }
  }

  - Properties [0] {
  }

  - Methods [2] {
    Method [ <internal:Core, ctor> public method __construct ] {
    }

    Method [ <internal:Core> public method get ] {

      - Parameters [0] {
      }
      - Return [ object or NULL ]
    }
  }
}
',
  'modifiers' => 32,
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
  'is_final' => true,
  'is_instantiable' => true,
  'is_read_only' => false,
);
