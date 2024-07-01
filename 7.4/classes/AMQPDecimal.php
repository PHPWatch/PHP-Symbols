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
    0 => 'AMQPValue',
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
      'type' => 'int',
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
      'type' => 'int',
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
          'type' => 'int',
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
          'type' => 'int',
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
      'return_type' => 'int',
      'has_return_type' => true,
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
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toAmqpValue' => 
    array (
      'name' => 'toAmqpValue',
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
  'toString' => 'Class [ <internal:amqp> final class AMQPDecimal implements AMQPValue ] {

  - Constants [4] {
    Constant [ public int EXPONENT_MIN ] { 0 }
    Constant [ public int EXPONENT_MAX ] { 255 }
    Constant [ public int SIGNIFICAND_MIN ] { 0 }
    Constant [ public int SIGNIFICAND_MAX ] { 4294967295 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ <default> private $exponent ]
    Property [ <default> private $significand ]
  }

  - Methods [4] {
    Method [ <internal:amqp, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $exponent ]
        Parameter #1 [ <required> int $significand ]
      }
    }

    Method [ <internal:amqp> public method getExponent ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method getSignificand ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp, prototype AMQPValue> public method toAmqpValue ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
