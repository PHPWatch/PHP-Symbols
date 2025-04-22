<?php

return array (
  'type' => 'class',
  'name' => 'Fiber',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Fiber',
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
        'name' => 'Fiber interface (php.net)',
        'url' => 'https://www.php.net/manual/class.fiber.php',
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
      'class' => 'Fiber',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'Fiber',
      'parameters' => 
      array (
        'args' => 
        array (
          'position' => 0,
          'name' => 'args',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => false,
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
      'class' => 'Fiber',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => true,
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
    'throw' => 
    array (
      'name' => 'throw',
      'class' => 'Fiber',
      'parameters' => 
      array (
        'exception' => 
        array (
          'position' => 0,
          'name' => 'exception',
          'type' => 'Throwable',
          'is_optional' => false,
          'has_default_value' => false,
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
    'isStarted' => 
    array (
      'name' => 'isStarted',
      'class' => 'Fiber',
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
    'isSuspended' => 
    array (
      'name' => 'isSuspended',
      'class' => 'Fiber',
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
    'isRunning' => 
    array (
      'name' => 'isRunning',
      'class' => 'Fiber',
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
    'isTerminated' => 
    array (
      'name' => 'isTerminated',
      'class' => 'Fiber',
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
    'getReturn' => 
    array (
      'name' => 'getReturn',
      'class' => 'Fiber',
      'parameters' => 
      array (
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getCurrent' => 
    array (
      'name' => 'getCurrent',
      'class' => 'Fiber',
      'parameters' => 
      array (
      ),
      'return_type' => '?Fiber',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'suspend' => 
    array (
      'name' => 'suspend',
      'class' => 'Fiber',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => true,
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
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'extension' => 'Core',
  'toString' => 'Class [ <internal:Core> final class Fiber ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:Core> static public method getCurrent ] {

      - Parameters [0] {
      }
      - Return [ ?Fiber ]
    }

    Method [ <internal:Core> static public method suspend ] {

      - Parameters [1] {
        Parameter #0 [ <optional> mixed $value = null ]
      }
      - Return [ mixed ]
    }
  }

  - Properties [0] {
  }

  - Methods [9] {
    Method [ <internal:Core, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
    }

    Method [ <internal:Core> public method start ] {

      - Parameters [1] {
        Parameter #0 [ <optional> mixed ...$args ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core> public method resume ] {

      - Parameters [1] {
        Parameter #0 [ <optional> mixed $value = null ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core> public method throw ] {

      - Parameters [1] {
        Parameter #0 [ <required> Throwable $exception ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core> public method isStarted ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Core> public method isSuspended ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Core> public method isRunning ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Core> public method isTerminated ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:Core> public method getReturn ] {

      - Parameters [0] {
      }
      - Return [ mixed ]
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
  'is_instantiable' => true,
  'is_read_only' => false,
);
