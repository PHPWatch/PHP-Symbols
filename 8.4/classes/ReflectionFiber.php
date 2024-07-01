<?php

return array (
  'type' => 'class',
  'name' => 'ReflectionFiber',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ReflectionFiber',
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
        'name' => 'ReflectionFiber class (php.net)',
        'url' => 'https://www.php.net/manual/class.reflectionfiber.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'ReflectionFiber',
      'parameters' => 
      array (
        'fiber' => 
        array (
          'position' => 0,
          'name' => 'fiber',
          'type' => 'Fiber',
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
    'getFiber' => 
    array (
      'name' => 'getFiber',
      'class' => 'ReflectionFiber',
      'parameters' => 
      array (
      ),
      'return_type' => 'Fiber',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getExecutingFile' => 
    array (
      'name' => 'getExecutingFile',
      'class' => 'ReflectionFiber',
      'parameters' => 
      array (
      ),
      'return_type' => '?string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getExecutingLine' => 
    array (
      'name' => 'getExecutingLine',
      'class' => 'ReflectionFiber',
      'parameters' => 
      array (
      ),
      'return_type' => '?int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getCallable' => 
    array (
      'name' => 'getCallable',
      'class' => 'ReflectionFiber',
      'parameters' => 
      array (
      ),
      'return_type' => 'callable',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTrace' => 
    array (
      'name' => 'getTrace',
      'class' => 'ReflectionFiber',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 1,
          'has_default_value_constant' => true,
          'default_value_constant' => 'DEBUG_BACKTRACE_PROVIDE_OBJECT',
        ),
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
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:Reflection> final class ReflectionFiber ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [6] {
    Method [ <internal:Reflection, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> Fiber $fiber ]
      }
    }

    Method [ <internal:Reflection> public method getFiber ] {

      - Parameters [0] {
      }
      - Return [ Fiber ]
    }

    Method [ <internal:Reflection> public method getExecutingFile ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:Reflection> public method getExecutingLine ] {

      - Parameters [0] {
      }
      - Return [ ?int ]
    }

    Method [ <internal:Reflection> public method getCallable ] {

      - Parameters [0] {
      }
      - Return [ callable ]
    }

    Method [ <internal:Reflection> public method getTrace ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT ]
      }
      - Return [ array ]
    }
  }
}
',
);
