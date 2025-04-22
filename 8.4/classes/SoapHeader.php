<?php

return array (
  'type' => 'class',
  'name' => 'SoapHeader',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SoapHeader',
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
        'name' => 'SoapHeader interface (php.net)',
        'url' => 'https://www.php.net/manual/class.soapheader.php',
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
      'class' => 'SoapHeader',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'data' => 
        array (
          'position' => 2,
          'name' => 'data',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mustUnderstand' => 
        array (
          'position' => 3,
          'name' => 'mustUnderstand',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'actor' => 
        array (
          'position' => 4,
          'name' => 'actor',
          'type' => 'string|int|null',
          'is_optional' => true,
          'has_default_value' => true,
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
  ),
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
    'namespace' => 
    array (
      'name' => 'namespace',
      'class' => 'SoapHeader',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'class' => 'SoapHeader',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'data' => 
    array (
      'name' => 'data',
      'class' => 'SoapHeader',
      'type' => 'mixed',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'mustUnderstand' => 
    array (
      'name' => 'mustUnderstand',
      'class' => 'SoapHeader',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'actor' => 
    array (
      'name' => 'actor',
      'class' => 'SoapHeader',
      'type' => 'string|int|null',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'soap',
  'toString' => 'Class [ <internal:soap> class SoapHeader ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [5] {
    Property [ public string $namespace ]
    Property [ public string $name ]
    Property [ public mixed $data = NULL ]
    Property [ public bool $mustUnderstand ]
    Property [ public string|int|null $actor ]
  }

  - Methods [1] {
    Method [ <internal:soap, ctor> public method __construct ] {

      - Parameters [5] {
        Parameter #0 [ <required> string $namespace ]
        Parameter #1 [ <required> string $name ]
        Parameter #2 [ <optional> mixed $data = <default> ]
        Parameter #3 [ <optional> bool $mustUnderstand = false ]
        Parameter #4 [ <optional> string|int|null $actor = null ]
      }
    }
  }
}
',
  'modifiers' => 0,
  'defaultProperties' => 
  array (
    'data' => NULL,
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
