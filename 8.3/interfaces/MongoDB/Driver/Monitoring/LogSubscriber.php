<?php

return array (
  'type' => 'interface',
  'name' => 'MongoDB\\Driver\\Monitoring\\LogSubscriber',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'MongoDB\\Driver\\Monitoring\\LogSubscriber',
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
        'name' => 'MongoDB\\Driver\\Monitoring\\LogSubscriber interface (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-monitoring-logsubscriber.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'MongoDB\\Driver\\Monitoring\\Subscriber',
  ),
  'constants' => 
  array (
    'LEVEL_ERROR' => 0,
    'LEVEL_CRITICAL' => 1,
    'LEVEL_WARNING' => 2,
    'LEVEL_MESSAGE' => 3,
    'LEVEL_INFO' => 4,
    'LEVEL_DEBUG' => 5,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'log' => 
    array (
      'name' => 'log',
      'class' => 'MongoDB\\Driver\\Monitoring\\LogSubscriber',
      'parameters' => 
      array (
        'level' => 
        array (
          'position' => 0,
          'name' => 'level',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'domain' => 
        array (
          'position' => 1,
          'name' => 'domain',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'message' => 
        array (
          'position' => 2,
          'name' => 'message',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'toString' => 'Interface [ <internal:mongodb> interface MongoDB\\Driver\\Monitoring\\LogSubscriber extends MongoDB\\Driver\\Monitoring\\Subscriber ] {

  - Constants [6] {
    Constant [ public int LEVEL_ERROR ] { 0 }
    Constant [ public int LEVEL_CRITICAL ] { 1 }
    Constant [ public int LEVEL_WARNING ] { 2 }
    Constant [ public int LEVEL_MESSAGE ] { 3 }
    Constant [ public int LEVEL_INFO ] { 4 }
    Constant [ public int LEVEL_DEBUG ] { 5 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [1] {
    Method [ <internal:mongodb> abstract public method log ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $level ]
        Parameter #1 [ <required> string $domain ]
        Parameter #2 [ <required> string $message ]
      }
      - Return [ void ]
    }
  }
}
',
);
