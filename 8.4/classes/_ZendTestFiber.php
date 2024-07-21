<?php

return array (
  'type' => 'class',
  'name' => '_ZendTestFiber',
  'meta' => 
  array (
    'type' => 'class',
    'name' => '_ZendTestFiber',
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
        'name' => '_ZendTestFiber class (php.net)',
        'url' => 'https://www.php.net/manual/class._zendtestfiber.php',
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
      'class' => '_ZendTestFiber',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
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
    'start' => 
    array (
      'name' => 'start',
      'class' => '_ZendTestFiber',
      'parameters' => 
      array (
        'args' => 
        array (
          'position' => 0,
          'name' => 'args',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'resume' => 
    array (
      'name' => 'resume',
      'class' => '_ZendTestFiber',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pipeTo' => 
    array (
      'name' => 'pipeTo',
      'class' => '_ZendTestFiber',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '_ZendTestFiber',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'suspend' => 
    array (
      'name' => 'suspend',
      'class' => '_ZendTestFiber',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => true,
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
  'toString' => 'Class [ <internal:zend_test> final class _ZendTestFiber ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:zend_test> static public method suspend ] {

      - Parameters [1] {
        Parameter #0 [ <optional> mixed $value = null ]
      }
      - Return [ mixed ]
    }
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ <internal:zend_test, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
    }

    Method [ <internal:zend_test> public method start ] {

      - Parameters [1] {
        Parameter #0 [ <optional> mixed ...$args ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:zend_test> public method resume ] {

      - Parameters [1] {
        Parameter #0 [ <optional> mixed $value = null ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:zend_test> public method pipeTo ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
      - Return [ _ZendTestFiber ]
    }
  }
}
',
);
