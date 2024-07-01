<?php

return array (
  'type' => 'class',
  'name' => 'ZMQContext',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZMQContext',
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
        'name' => 'ZMQContext class (php.net)',
        'url' => 'https://www.php.net/manual/class.zmqcontext.php',
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
      'class' => 'ZMQContext',
      'parameters' => 
      array (
        'io_threads' => 
        array (
          'position' => 0,
          'name' => 'io_threads',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'persistent' => 
        array (
          'position' => 1,
          'name' => 'persistent',
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
    'acquire' => 
    array (
      'name' => 'acquire',
      'class' => 'ZMQContext',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getsocketcount' => 
    array (
      'name' => 'getsocketcount',
      'class' => 'ZMQContext',
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
    'getsocket' => 
    array (
      'name' => 'getsocket',
      'class' => 'ZMQContext',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dsn' => 
        array (
          'position' => 1,
          'name' => 'dsn',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'on_new_socket' => 
        array (
          'position' => 2,
          'name' => 'on_new_socket',
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
    'ispersistent' => 
    array (
      'name' => 'ispersistent',
      'class' => 'ZMQContext',
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
    '__clone' => 
    array (
      'name' => '__clone',
      'class' => 'ZMQContext',
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
    'setOpt' => 
    array (
      'name' => 'setOpt',
      'class' => 'ZMQContext',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
          'name' => 'option',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
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
    'getOpt' => 
    array (
      'name' => 'getOpt',
      'class' => 'ZMQContext',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
          'name' => 'option',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:zmq> class ZMQContext ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:zmq> static public method acquire ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [0] {
  }

  - Methods [7] {
    Method [ <internal:zmq, ctor> final public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $io_threads ]
        Parameter #1 [ <optional> $persistent ]
      }
    }

    Method [ <internal:zmq> public method getsocketcount ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method getsocket ] {

      - Parameters [3] {
        Parameter #0 [ <required> $type ]
        Parameter #1 [ <required> $dsn ]
        Parameter #2 [ <optional> $on_new_socket ]
      }
    }

    Method [ <internal:zmq> public method ispersistent ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> final private method __clone ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method setOpt ] {

      - Parameters [2] {
        Parameter #0 [ <required> $option ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:zmq> public method getOpt ] {

      - Parameters [1] {
        Parameter #0 [ <required> $option ]
      }
    }
  }
}
',
);
