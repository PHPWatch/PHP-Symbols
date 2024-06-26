<?php

return array (
  'type' => 'class',
  'name' => 'AMQPQueue',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'AMQPQueue',
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
        'name' => 'AMQPQueue class (php.net)',
        'url' => 'https://www.php.net/manual/class.amqpqueue.php',
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
    'connection' => 
    array (
      'name' => 'connection',
      'class' => 'AMQPQueue',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'channel' => 
    array (
      'name' => 'channel',
      'class' => 'AMQPQueue',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'class' => 'AMQPQueue',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'consumer_tag' => 
    array (
      'name' => 'consumer_tag',
      'class' => 'AMQPQueue',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'passive' => 
    array (
      'name' => 'passive',
      'class' => 'AMQPQueue',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'durable' => 
    array (
      'name' => 'durable',
      'class' => 'AMQPQueue',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'exclusive' => 
    array (
      'name' => 'exclusive',
      'class' => 'AMQPQueue',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'auto_delete' => 
    array (
      'name' => 'auto_delete',
      'class' => 'AMQPQueue',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'arguments' => 
    array (
      'name' => 'arguments',
      'class' => 'AMQPQueue',
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
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'amqp_channel' => 
        array (
          'position' => 0,
          'name' => 'amqp_channel',
          'type' => 'AMQPChannel',
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
    'getName' => 
    array (
      'name' => 'getName',
      'class' => 'AMQPQueue',
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
    'setName' => 
    array (
      'name' => 'setName',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'queue_name' => 
        array (
          'position' => 0,
          'name' => 'queue_name',
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
    'getFlags' => 
    array (
      'name' => 'getFlags',
      'class' => 'AMQPQueue',
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
    'setFlags' => 
    array (
      'name' => 'setFlags',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
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
    'getArgument' => 
    array (
      'name' => 'getArgument',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'argument' => 
        array (
          'position' => 0,
          'name' => 'argument',
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
    'getArguments' => 
    array (
      'name' => 'getArguments',
      'class' => 'AMQPQueue',
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
    'setArgument' => 
    array (
      'name' => 'setArgument',
      'class' => 'AMQPQueue',
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
    'setArguments' => 
    array (
      'name' => 'setArguments',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'arguments' => 
        array (
          'position' => 0,
          'name' => 'arguments',
          'type' => 'array',
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
    'hasArgument' => 
    array (
      'name' => 'hasArgument',
      'class' => 'AMQPQueue',
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
    'declareQueue' => 
    array (
      'name' => 'declareQueue',
      'class' => 'AMQPQueue',
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
    'bind' => 
    array (
      'name' => 'bind',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'exchange_name' => 
        array (
          'position' => 0,
          'name' => 'exchange_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'routing_key' => 
        array (
          'position' => 1,
          'name' => 'routing_key',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arguments' => 
        array (
          'position' => 2,
          'name' => 'arguments',
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
    'get' => 
    array (
      'name' => 'get',
      'class' => 'AMQPQueue',
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
    'consume' => 
    array (
      'name' => 'consume',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'consumer_tag' => 
        array (
          'position' => 2,
          'name' => 'consumer_tag',
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
    'ack' => 
    array (
      'name' => 'ack',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'delivery_tag' => 
        array (
          'position' => 0,
          'name' => 'delivery_tag',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
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
    'nack' => 
    array (
      'name' => 'nack',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'delivery_tag' => 
        array (
          'position' => 0,
          'name' => 'delivery_tag',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
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
    'reject' => 
    array (
      'name' => 'reject',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'delivery_tag' => 
        array (
          'position' => 0,
          'name' => 'delivery_tag',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
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
    'purge' => 
    array (
      'name' => 'purge',
      'class' => 'AMQPQueue',
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
    'cancel' => 
    array (
      'name' => 'cancel',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'consumer_tag' => 
        array (
          'position' => 0,
          'name' => 'consumer_tag',
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
    'delete' => 
    array (
      'name' => 'delete',
      'class' => 'AMQPQueue',
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
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'exchange_name' => 
        array (
          'position' => 0,
          'name' => 'exchange_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'routing_key' => 
        array (
          'position' => 1,
          'name' => 'routing_key',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arguments' => 
        array (
          'position' => 2,
          'name' => 'arguments',
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
    'getChannel' => 
    array (
      'name' => 'getChannel',
      'class' => 'AMQPQueue',
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
    'getConnection' => 
    array (
      'name' => 'getConnection',
      'class' => 'AMQPQueue',
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
    'getConsumerTag' => 
    array (
      'name' => 'getConsumerTag',
      'class' => 'AMQPQueue',
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
    'declare' => 
    array (
      'name' => 'declare',
      'class' => 'AMQPQueue',
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
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:amqp> class AMQPQueue ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [9] {
    Property [ <default> private $connection ]
    Property [ <default> private $channel ]
    Property [ <default> private $name ]
    Property [ <default> private $consumer_tag ]
    Property [ <default> private $passive ]
    Property [ <default> private $durable ]
    Property [ <default> private $exclusive ]
    Property [ <default> private $auto_delete ]
    Property [ <default> private $arguments ]
  }

  - Methods [25] {
    Method [ <internal:amqp, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> AMQPChannel $amqp_channel ]
      }
    }

    Method [ <internal:amqp> public method getName ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method setName ] {

      - Parameters [1] {
        Parameter #0 [ <required> $queue_name ]
      }
    }

    Method [ <internal:amqp> public method getFlags ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> $flags ]
      }
    }

    Method [ <internal:amqp> public method getArgument ] {

      - Parameters [1] {
        Parameter #0 [ <required> $argument ]
      }
    }

    Method [ <internal:amqp> public method getArguments ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method setArgument ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:amqp> public method setArguments ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $arguments ]
      }
    }

    Method [ <internal:amqp> public method hasArgument ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:amqp> public method declareQueue ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method bind ] {

      - Parameters [3] {
        Parameter #0 [ <required> $exchange_name ]
        Parameter #1 [ <optional> $routing_key ]
        Parameter #2 [ <optional> $arguments ]
      }
    }

    Method [ <internal:amqp> public method get ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $flags ]
      }
    }

    Method [ <internal:amqp> public method consume ] {

      - Parameters [3] {
        Parameter #0 [ <required> $callback ]
        Parameter #1 [ <optional> $flags ]
        Parameter #2 [ <optional> $consumer_tag ]
      }
    }

    Method [ <internal:amqp> public method ack ] {

      - Parameters [2] {
        Parameter #0 [ <required> $delivery_tag ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:amqp> public method nack ] {

      - Parameters [2] {
        Parameter #0 [ <required> $delivery_tag ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:amqp> public method reject ] {

      - Parameters [2] {
        Parameter #0 [ <required> $delivery_tag ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:amqp> public method purge ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method cancel ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $consumer_tag ]
      }
    }

    Method [ <internal:amqp> public method delete ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $flags ]
      }
    }

    Method [ <internal:amqp> public method unbind ] {

      - Parameters [3] {
        Parameter #0 [ <required> $exchange_name ]
        Parameter #1 [ <optional> $routing_key ]
        Parameter #2 [ <optional> $arguments ]
      }
    }

    Method [ <internal:amqp> public method getChannel ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getConnection ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getConsumerTag ] {

      - Parameters [0] {
      }
    }

    Method [ <internal, deprecated:amqp> public method declare ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
