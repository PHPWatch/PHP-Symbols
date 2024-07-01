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
  ),
  'constants' => 
  array (
    'MAX' => '18446744073709551616',
    'MIN' => '0',
  ),
  'properties' => 
  array (
    'timestamp' => 
    array (
      'name' => 'timestamp',
      'class' => 'AMQPTimestamp',
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
      'class' => 'AMQPTimestamp',
      'parameters' => 
      array (
        'timestamp' => 
        array (
          'position' => 0,
          'name' => 'timestamp',
          'type' => NULL,
          'is_optional' => true,
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
      'return_type' => NULL,
      'has_return_type' => false,
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
  'toString' => 'Class [ <internal:amqp> final class AMQPTimestamp ] {

  - Constants [2] {
    Constant [ public string MAX ] { 18446744073709551616 }
    Constant [ public string MIN ] { 0 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ <default> private $timestamp ]
  }

  - Methods [3] {
    Method [ <internal:amqp, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $timestamp ]
      }
    }

    Method [ <internal:amqp> public method getTimestamp ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method __toString ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
