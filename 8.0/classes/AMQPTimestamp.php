<?php

return array (
  'type' => 'class',
  'name' => 'AMQPTimestamp',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'AMQPTimestamp',
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
        'name' => 'AMQPTimestamp class (php.net)',
        'url' => 'https://www.php.net/manual/class.amqptimestamp.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Stringable',
    1 => 'AMQPValue',
  ),
  'constants' => 
  array (
    'MAX' => 1.8446744073709552E+19,
    'MIN' => 0.0,
  ),
  'properties' => 
  array (
    'timestamp' => 
    array (
      'name' => 'timestamp',
      'class' => 'AMQPTimestamp',
      'type' => 'float',
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
      'class' => 'AMQPTimestamp',
      'parameters' => 
      array (
        'timestamp' => 
        array (
          'position' => 0,
          'name' => 'timestamp',
          'type' => 'float',
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
    'getTimestamp' => 
    array (
      'name' => 'getTimestamp',
      'class' => 'AMQPTimestamp',
      'parameters' => 
      array (
      ),
      'return_type' => 'float',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'AMQPTimestamp',
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
    'toAmqpValue' => 
    array (
      'name' => 'toAmqpValue',
      'class' => 'AMQPTimestamp',
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
  'toString' => 'Class [ <internal:amqp> final class AMQPTimestamp implements Stringable, AMQPValue ] {

  - Constants [2] {
    Constant [ public float MAX ] { 1.844674407371E+19 }
    Constant [ public float MIN ] { 0 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ private float $timestamp ]
  }

  - Methods [4] {
    Method [ <internal:amqp, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> float $timestamp ]
      }
    }

    Method [ <internal:amqp> public method getTimestamp ] {

      - Parameters [0] {
      }
      - Return [ float ]
    }

    Method [ <internal:amqp, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:amqp, prototype AMQPValue> public method toAmqpValue ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
