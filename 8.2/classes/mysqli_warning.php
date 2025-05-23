<?php

return array (
  'type' => 'class',
  'name' => 'mysqli_warning',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'mysqli_warning',
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
        'name' => 'mysqli_warning interface (php.net)',
        'url' => 'https://www.php.net/manual/class.mysqli_warning.php',
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
      'class' => 'mysqli_warning',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'mysqli_warning',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
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
    'message' => 
    array (
      'name' => 'message',
      'class' => 'mysqli_warning',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'sqlstate' => 
    array (
      'name' => 'sqlstate',
      'class' => 'mysqli_warning',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'errno' => 
    array (
      'name' => 'errno',
      'class' => 'mysqli_warning',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'mysqli',
  'toString' => 'Class [ <internal:mysqli> final class mysqli_warning ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [3] {
    Property [ public string $message ]
    Property [ public string $sqlstate ]
    Property [ public int $errno ]
  }

  - Methods [2] {
    Method [ <internal:mysqli, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mysqli> public method next ] {

      - Parameters [0] {
      }
      - Return [ bool ]
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
  'is_instantiable' => false,
  'is_read_only' => false,
);
