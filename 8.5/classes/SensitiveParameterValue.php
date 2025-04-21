<?php

return array (
  'type' => 'class',
  'name' => 'SensitiveParameterValue',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SensitiveParameterValue',
    'description' => 'The SensitiveParameterValue class allows wrapping sensitive values to protect them against accidental exposure.',
    'keywords' => 
    array (
    ),
    'added' => '8.2',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'SensitiveParameterValue class (php.net)',
        'url' => 'https://www.php.net/manual/en/class.sensitiveparametervalue.php',
      ),
    ),
  ),
  'modifiers' => 32,
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
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
    'value' => 
    array (
      'name' => 'value',
      'class' => 'SensitiveParameterValue',
      'type' => 'mixed',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'SensitiveParameterValue',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
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
    'getValue' => 
    array (
      'name' => 'getValue',
      'class' => 'SensitiveParameterValue',
      'parameters' => 
      array (
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__debugInfo' => 
    array (
      'name' => '__debugInfo',
      'class' => 'SensitiveParameterValue',
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
  'is_instantiable' => true,
  'is_read_only' => false,
  'extension' => 'Core',
  'toString' => 'Class [ <internal:Core> final class SensitiveParameterValue ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ private readonly mixed $value ]
  }

  - Methods [3] {
    Method [ <internal:Core, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> mixed $value ]
      }
    }

    Method [ <internal:Core> public method getValue ] {

      - Parameters [0] {
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core> public method __debugInfo ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }
}
',
);
