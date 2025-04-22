<?php

return array (
  'type' => 'class',
  'name' => 'SoapVar',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SoapVar',
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
        'name' => 'SoapVar interface (php.net)',
        'url' => 'https://www.php.net/manual/class.soapvar.php',
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
      'class' => 'SoapVar',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'encoding' => 
        array (
          'position' => 1,
          'name' => 'encoding',
          'type' => '?int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'typeName' => 
        array (
          'position' => 2,
          'name' => 'typeName',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'typeNamespace' => 
        array (
          'position' => 3,
          'name' => 'typeNamespace',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nodeName' => 
        array (
          'position' => 4,
          'name' => 'nodeName',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nodeNamespace' => 
        array (
          'position' => 5,
          'name' => 'nodeNamespace',
          'type' => '?string',
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
  ),
  'extension' => 'soap',
  'toString' => 'Class [ <internal:soap> class SoapVar ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [1] {
    Method [ <internal:soap, ctor> public method __construct ] {

      - Parameters [6] {
        Parameter #0 [ <required> mixed $data ]
        Parameter #1 [ <required> ?int $encoding ]
        Parameter #2 [ <optional> ?string $typeName = null ]
        Parameter #3 [ <optional> ?string $typeNamespace = null ]
        Parameter #4 [ <optional> ?string $nodeName = null ]
        Parameter #5 [ <optional> ?string $nodeNamespace = null ]
      }
    }
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
