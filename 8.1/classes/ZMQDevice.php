<?php

return array (
  'type' => 'class',
  'name' => 'ZMQDevice',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZMQDevice',
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
        'name' => 'ZMQDevice class (php.net)',
        'url' => 'https://www.php.net/manual/class.zmqdevice.php',
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
      'class' => 'ZMQDevice',
      'parameters' => 
      array (
        'frontend' => 
        array (
          'position' => 0,
          'name' => 'frontend',
          'type' => 'ZMQSocket',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'backend' => 
        array (
          'position' => 1,
          'name' => 'backend',
          'type' => 'ZMQSocket',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'capture' => 
        array (
          'position' => 2,
          'name' => 'capture',
          'type' => 'ZMQSocket',
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
    'run' => 
    array (
      'name' => 'run',
      'class' => 'ZMQDevice',
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
    'setidlecallback' => 
    array (
      'name' => 'setidlecallback',
      'class' => 'ZMQDevice',
      'parameters' => 
      array (
        'idle_callback' => 
        array (
          'position' => 0,
          'name' => 'idle_callback',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timeout' => 
        array (
          'position' => 1,
          'name' => 'timeout',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'user_data' => 
        array (
          'position' => 2,
          'name' => 'user_data',
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
    'setidletimeout' => 
    array (
      'name' => 'setidletimeout',
      'class' => 'ZMQDevice',
      'parameters' => 
      array (
        'timeout' => 
        array (
          'position' => 0,
          'name' => 'timeout',
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
    'getidletimeout' => 
    array (
      'name' => 'getidletimeout',
      'class' => 'ZMQDevice',
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
    'settimercallback' => 
    array (
      'name' => 'settimercallback',
      'class' => 'ZMQDevice',
      'parameters' => 
      array (
        'idle_callback' => 
        array (
          'position' => 0,
          'name' => 'idle_callback',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timeout' => 
        array (
          'position' => 1,
          'name' => 'timeout',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'user_data' => 
        array (
          'position' => 2,
          'name' => 'user_data',
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
    'settimertimeout' => 
    array (
      'name' => 'settimertimeout',
      'class' => 'ZMQDevice',
      'parameters' => 
      array (
        'timeout' => 
        array (
          'position' => 0,
          'name' => 'timeout',
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
    'gettimertimeout' => 
    array (
      'name' => 'gettimertimeout',
      'class' => 'ZMQDevice',
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
      'class' => 'ZMQDevice',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:zmq> class ZMQDevice ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [9] {
    Method [ <internal:zmq, ctor> final public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> ZMQSocket $frontend ]
        Parameter #1 [ <required> ZMQSocket $backend ]
        Parameter #2 [ <optional> ZMQSocket $capture = <default> ]
      }
    }

    Method [ <internal:zmq> public method run ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method setidlecallback ] {

      - Parameters [3] {
        Parameter #0 [ <required> $idle_callback ]
        Parameter #1 [ <required> $timeout ]
        Parameter #2 [ <optional> $user_data = <default> ]
      }
    }

    Method [ <internal:zmq> public method setidletimeout ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timeout ]
      }
    }

    Method [ <internal:zmq> public method getidletimeout ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method settimercallback ] {

      - Parameters [3] {
        Parameter #0 [ <required> $idle_callback ]
        Parameter #1 [ <required> $timeout ]
        Parameter #2 [ <optional> $user_data = <default> ]
      }
    }

    Method [ <internal:zmq> public method settimertimeout ] {

      - Parameters [1] {
        Parameter #0 [ <required> $timeout ]
      }
    }

    Method [ <internal:zmq> public method gettimertimeout ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> final private method __clone ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
