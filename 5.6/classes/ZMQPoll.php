<?php

return array (
  'type' => 'class',
  'name' => 'ZMQPoll',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZMQPoll',
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
        'name' => 'ZMQPoll class (php.net)',
        'url' => 'https://www.php.net/manual/class.zmqpoll.php',
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
    'add' => 
    array (
      'name' => 'add',
      'class' => 'ZMQPoll',
      'parameters' => 
      array (
        'entry' => 
        array (
          'position' => 0,
          'name' => 'entry',
          'type' => NULL,
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
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'poll' => 
    array (
      'name' => 'poll',
      'class' => 'ZMQPoll',
      'parameters' => 
      array (
        'readable' => 
        array (
          'position' => 0,
          'name' => 'readable',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'writable' => 
        array (
          'position' => 1,
          'name' => 'writable',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timeout' => 
        array (
          'position' => 2,
          'name' => 'timeout',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getlasterrors' => 
    array (
      'name' => 'getlasterrors',
      'class' => 'ZMQPoll',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'remove' => 
    array (
      'name' => 'remove',
      'class' => 'ZMQPoll',
      'parameters' => 
      array (
        'remove' => 
        array (
          'position' => 0,
          'name' => 'remove',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'count' => 
    array (
      'name' => 'count',
      'class' => 'ZMQPoll',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'ZMQPoll',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__clone' => 
    array (
      'name' => '__clone',
      'class' => 'ZMQPoll',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
  'is_anonymous' => NULL,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:zmq> class ZMQPoll ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [7] {
    Method [ <internal:zmq> public method add ] {

      - Parameters [2] {
        Parameter #0 [ <required> $entry ]
        Parameter #1 [ <required> $type ]
      }
    }

    Method [ <internal:zmq> public method poll ] {

      - Parameters [3] {
        Parameter #0 [ <required> &$readable ]
        Parameter #1 [ <required> &$writable ]
        Parameter #2 [ <optional> $timeout ]
      }
    }

    Method [ <internal:zmq> public method getlasterrors ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method remove ] {

      - Parameters [1] {
        Parameter #0 [ <required> $remove ]
      }
    }

    Method [ <internal:zmq> public method count ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> public method clear ] {

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
