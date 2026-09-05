<?php

return array (
  'type' => 'class',
  'name' => 'Openssl\\Psk',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Openssl\\Psk',
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
        'name' => 'Openssl\\Psk interface (php.net)',
        'url' => 'https://www.php.net/manual/class.openssl-psk.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Openssl',
  'constants' => 
  array (
    'MAX_PSK_LEN' => 
    array (
      'value' => 256,
      'toString' => 'Constant [ public int MAX_PSK_LEN ] { 256 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'MAX_IDENTITY_LEN' => 
    array (
      'value' => 128,
      'toString' => 'Constant [ public int MAX_IDENTITY_LEN ] { 128 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Openssl\\Psk',
      'parameters' => 
      array (
        'psk' => 
        array (
          'position' => 0,
          'name' => 'psk',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'identity' => 
        array (
          'position' => 1,
          'name' => 'identity',
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
    'psk' => 
    array (
      'name' => 'psk',
      'class' => 'Openssl\\Psk',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'identity' => 
    array (
      'name' => 'identity',
      'class' => 'Openssl\\Psk',
      'type' => '?string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'openssl',
  'toString' => 'Class [ <internal:openssl> final class Openssl\\Psk ] {

  - Constants [2] {
    Constant [ public int MAX_PSK_LEN ] { 256 }
    Constant [ public int MAX_IDENTITY_LEN ] { 128 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ public protected(set) readonly string $psk ]
    Property [ public protected(set) readonly ?string $identity ]
  }

  - Methods [1] {
    Method [ <internal:openssl, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $psk ]
        Parameter #1 [ <optional> ?string $identity = null ]
      }
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
  'is_cloneable' => true,
  'is_final' => true,
  'is_instantiable' => true,
  'is_read_only' => false,
);
