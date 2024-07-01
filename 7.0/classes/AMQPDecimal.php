<?php

return array (
  'type' => 'class',
  'name' => 'AMQPDecimal',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'AMQPDecimal',
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
        'name' => 'AMQPDecimal class (php.net)',
        'url' => 'https://www.php.net/manual/class.amqpdecimal.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'EXPONENT_MIN' => 0,
    'EXPONENT_MAX' => 255,
    'SIGNIFICAND_MIN' => 0,
    'SIGNIFICAND_MAX' => 4294967295,
  ),
  'properties' => 
  array (
    'exponent' => 
    array (
      'name' => 'exponent',
      'class' => 'AMQPDecimal',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'significand' => 
    array (
      'name' => 'significand',
      'class' => 'AMQPDecimal',
      'type' => NULL,
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
      'class' => 'AMQPDecimal',
      'parameters' => 
      array (
        'exponent' => 
        array (
          'position' => 0,
          'name' => 'exponent',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'significand' => 
        array (
          'position' => 1,
          'name' => 'significand',
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
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getExponent' => 
    array (
      'name' => 'getExponent',
      'class' => 'AMQPDecimal',
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
    'getSignificand' => 
    array (
      'name' => 'getSignificand',
      'class' => 'AMQPDecimal',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:amqp> final class AMQPDecimal ] {

  - Constants [4] {
    Constant [ integer EXPONENT_MIN ] { 0 }
    Constant [ integer EXPONENT_MAX ] { 255 }
    Constant [ integer SIGNIFICAND_MIN ] { 0 }
    Constant [ integer SIGNIFICAND_MAX ] { 4294967295 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ <default> private $exponent ]
    Property [ <default> private $significand ]
  }

  - Methods [3] {
    Method [ <internal:amqp, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> $exponent ]
        Parameter #1 [ <required> $significand ]
      }
    }

    Method [ <internal:amqp> public method getExponent ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getSignificand ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
