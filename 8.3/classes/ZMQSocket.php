<?php

return array (
  'type' => 'class',
  'name' => 'ZMQSocket',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZMQSocket',
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
        'name' => 'ZMQSocket class (php.net)',
        'url' => 'https://www.php.net/manual/class.zmqsocket.php',
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
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'ZMQContext' => 
        array (
          'position' => 0,
          'name' => 'ZMQContext',
          'type' => 'ZMQContext',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'persistent_id' => 
        array (
          'position' => 2,
          'name' => 'persistent_id',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'on_new_socket' => 
        array (
          'position' => 3,
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
    'send' => 
    array (
      'name' => 'send',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'message' => 
        array (
          'position' => 0,
          'name' => 'message',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mode' => 
        array (
          'position' => 1,
          'name' => 'mode',
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
    'recv' => 
    array (
      'name' => 'recv',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
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
    'sendmulti' => 
    array (
      'name' => 'sendmulti',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'message' => 
        array (
          'position' => 0,
          'name' => 'message',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mode' => 
        array (
          'position' => 1,
          'name' => 'mode',
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
    'recvmulti' => 
    array (
      'name' => 'recvmulti',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
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
    'bind' => 
    array (
      'name' => 'bind',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'dsn' => 
        array (
          'position' => 0,
          'name' => 'dsn',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'force' => 
        array (
          'position' => 1,
          'name' => 'force',
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
    'connect' => 
    array (
      'name' => 'connect',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'dsn' => 
        array (
          'position' => 0,
          'name' => 'dsn',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'force' => 
        array (
          'position' => 1,
          'name' => 'force',
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
    'monitor' => 
    array (
      'name' => 'monitor',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'dsn' => 
        array (
          'position' => 0,
          'name' => 'dsn',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'events' => 
        array (
          'position' => 1,
          'name' => 'events',
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
    'recvevent' => 
    array (
      'name' => 'recvevent',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
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
    'unbind' => 
    array (
      'name' => 'unbind',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'dsn' => 
        array (
          'position' => 0,
          'name' => 'dsn',
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
    'disconnect' => 
    array (
      'name' => 'disconnect',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'dsn' => 
        array (
          'position' => 0,
          'name' => 'dsn',
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
    'setsockopt' => 
    array (
      'name' => 'setsockopt',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
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
    'getendpoints' => 
    array (
      'name' => 'getendpoints',
      'class' => 'ZMQSocket',
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
    'getsockettype' => 
    array (
      'name' => 'getsockettype',
      'class' => 'ZMQSocket',
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
    'ispersistent' => 
    array (
      'name' => 'ispersistent',
      'class' => 'ZMQSocket',
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
    'getpersistentid' => 
    array (
      'name' => 'getpersistentid',
      'class' => 'ZMQSocket',
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
    'getsockopt' => 
    array (
      'name' => 'getsockopt',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
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
    '__clone' => 
    array (
      'name' => '__clone',
      'class' => 'ZMQSocket',
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
    'sendmsg' => 
    array (
      'name' => 'sendmsg',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'message' => 
        array (
          'position' => 0,
          'name' => 'message',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mode' => 
        array (
          'position' => 1,
          'name' => 'mode',
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
    'recvmsg' => 
    array (
      'name' => 'recvmsg',
      'class' => 'ZMQSocket',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:zmq> class ZMQSocket ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [20] {
    Method [ <internal:zmq, ctor> final public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <required> ZMQContext $ZMQContext ]
        Parameter #1 [ <required> $type ]
        Parameter #2 [ <optional> $persistent_id = <default> ]
        Parameter #3 [ <optional> $on_new_socket = <default> ]
      }
    }

    Method [ <internal:zmq> public method send ] {

      - Parameters [2] {
        Parameter #0 [ <required> $message ]
        Parameter #1 [ <optional> $mode = <default> ]
      }
    }

    Method [ <internal:zmq> public method recv ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $mode = <default> ]
      }
    }

    Method [ <internal:zmq> public method sendmulti ] {

      - Parameters [2] {
        Parameter #0 [ <required> $message ]
        Parameter #1 [ <optional> $mode = <default> ]
      }
    }

    Method [ <internal:zmq> public method recvmulti ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $mode = <default> ]
      }
    }

    Method [ <internal:zmq> public method bind ] {

      - Parameters [2] {
        Parameter #0 [ <required> $dsn ]
        Parameter #1 [ <optional> $force = <default> ]
      }
    }

    Method [ <internal:zmq> public method connect ] {

      - Parameters [2] {
        Parameter #0 [ <required> $dsn ]
        Parameter #1 [ <optional> $force = <default> ]
      }
    }

    Method [ <internal:zmq> public method monitor ] {

      - Parameters [2] {
        Parameter #0 [ <required> $dsn ]
        Parameter #1 [ <optional> $events = <default> ]
      }
    }

    Method [ <internal:zmq> public method recvevent ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $flags = <default> ]
      }
    }

    Method [ <internal:zmq> public method unbind ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dsn ]
      }
    }

    Method [ <internal:zmq> public method disconnect ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dsn ]
      }
    }

    Method [ <internal:zmq> public method setsockopt ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:zmq> public method getendpoints ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method getsockettype ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method ispersistent ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method getpersistentid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method getsockopt ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:zmq> final private method __clone ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method sendmsg ] {

      - Parameters [2] {
        Parameter #0 [ <required> $message ]
        Parameter #1 [ <optional> $mode = <default> ]
      }
    }

    Method [ <internal:zmq> public method recvmsg ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $mode = <default> ]
      }
    }
  }
}
',
);
