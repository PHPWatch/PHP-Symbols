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
      'type' => 'AMQPConnection',
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
      'type' => 'AMQPChannel',
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
      'type' => '?string',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'consumerTag' => 
    array (
      'name' => 'consumerTag',
      'class' => 'AMQPQueue',
      'type' => '?string',
      'has_default_value' => true,
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
      'type' => 'bool',
      'has_default_value' => true,
      'default_value' => false,
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
      'type' => 'bool',
      'has_default_value' => true,
      'default_value' => false,
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
      'type' => 'bool',
      'has_default_value' => true,
      'default_value' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'autoDelete' => 
    array (
      'name' => 'autoDelete',
      'class' => 'AMQPQueue',
      'type' => 'bool',
      'has_default_value' => true,
      'default_value' => true,
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
      'type' => 'array',
      'has_default_value' => true,
      'default_value' => 
      array (
      ),
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
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
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
      'return_type' => '?string',
      'has_return_type' => true,
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
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'getFlags' => 
    array (
      'name' => 'getFlags',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
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
          'type' => '?int',
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
    'getArgument' => 
    array (
      'name' => 'getArgument',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'argumentName' => 
        array (
          'position' => 0,
          'name' => 'argumentName',
          'type' => 'string',
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
      'return_type' => 'array',
      'has_return_type' => true,
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
        'argumentName' => 
        array (
          'position' => 0,
          'name' => 'argumentName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'argumentValue' => 
        array (
          'position' => 1,
          'name' => 'argumentValue',
          'type' => NULL,
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
    'removeArgument' => 
    array (
      'name' => 'removeArgument',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'argumentName' => 
        array (
          'position' => 0,
          'name' => 'argumentName',
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
      'return_type' => 'void',
      'has_return_type' => true,
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
        'argumentName' => 
        array (
          'position' => 0,
          'name' => 'argumentName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
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
      'return_type' => 'int',
      'has_return_type' => true,
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
      'return_type' => 'int',
      'has_return_type' => true,
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
        'exchangeName' => 
        array (
          'position' => 0,
          'name' => 'exchangeName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'routingKey' => 
        array (
          'position' => 1,
          'name' => 'routingKey',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arguments' => 
        array (
          'position' => 2,
          'name' => 'arguments',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 
          array (
          ),
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
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?AMQPEnvelope',
      'has_return_type' => true,
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
          'type' => '?callable',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'consumerTag' => 
        array (
          'position' => 2,
          'name' => 'consumerTag',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
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
    'ack' => 
    array (
      'name' => 'ack',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'deliveryTag' => 
        array (
          'position' => 0,
          'name' => 'deliveryTag',
          'type' => 'int',
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
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'nack' => 
    array (
      'name' => 'nack',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'deliveryTag' => 
        array (
          'position' => 0,
          'name' => 'deliveryTag',
          'type' => 'int',
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
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'reject' => 
    array (
      'name' => 'reject',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'deliveryTag' => 
        array (
          'position' => 0,
          'name' => 'deliveryTag',
          'type' => 'int',
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
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'recover' => 
    array (
      'name' => 'recover',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
        'requeue' => 
        array (
          'position' => 0,
          'name' => 'requeue',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => true,
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
    'purge' => 
    array (
      'name' => 'purge',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
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
        'consumerTag' => 
        array (
          'position' => 0,
          'name' => 'consumerTag',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => '',
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
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
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
        'exchangeName' => 
        array (
          'position' => 0,
          'name' => 'exchangeName',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'routingKey' => 
        array (
          'position' => 1,
          'name' => 'routingKey',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arguments' => 
        array (
          'position' => 2,
          'name' => 'arguments',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 
          array (
          ),
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
    'getChannel' => 
    array (
      'name' => 'getChannel',
      'class' => 'AMQPQueue',
      'parameters' => 
      array (
      ),
      'return_type' => 'AMQPChannel',
      'has_return_type' => true,
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
      'return_type' => 'AMQPConnection',
      'has_return_type' => true,
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
      'return_type' => '?string',
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
    Property [ private AMQPConnection $connection ]
    Property [ private AMQPChannel $channel ]
    Property [ private ?string $name = NULL ]
    Property [ private ?string $consumerTag = NULL ]
    Property [ private bool $passive = false ]
    Property [ private bool $durable = false ]
    Property [ private bool $exclusive = false ]
    Property [ private bool $autoDelete = true ]
    Property [ private array $arguments = [] ]
  }

  - Methods [27] {
    Method [ <internal:amqp, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> AMQPChannel $channel ]
      }
    }

    Method [ <internal:amqp> public method getName ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    Method [ <internal:amqp> public method setName ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $name ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getFlags ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?int $flags ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getArgument ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $argumentName ]
      }
    }

    Method [ <internal:amqp> public method getArguments ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:amqp> public method setArgument ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $argumentName ]
        Parameter #1 [ <required> $argumentValue ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method removeArgument ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $argumentName ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method setArguments ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $arguments ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method hasArgument ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $argumentName ]
      }
      - Return [ bool ]
    }

    Method [ <internal:amqp> public method declareQueue ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method declare ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method bind ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $exchangeName ]
        Parameter #1 [ <optional> ?string $routingKey = null ]
        Parameter #2 [ <optional> array $arguments = [] ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method get ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $flags = null ]
      }
      - Return [ ?AMQPEnvelope ]
    }

    Method [ <internal:amqp> public method consume ] {

      - Parameters [3] {
        Parameter #0 [ <optional> ?callable $callback = null ]
        Parameter #1 [ <optional> ?int $flags = null ]
        Parameter #2 [ <optional> ?string $consumerTag = null ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method ack ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $deliveryTag ]
        Parameter #1 [ <optional> ?int $flags = null ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method nack ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $deliveryTag ]
        Parameter #1 [ <optional> ?int $flags = null ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method reject ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $deliveryTag ]
        Parameter #1 [ <optional> ?int $flags = null ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method recover ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $requeue = true ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method purge ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method cancel ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string $consumerTag = "" ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method delete ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $flags = null ]
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method unbind ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $exchangeName ]
        Parameter #1 [ <optional> ?string $routingKey = null ]
        Parameter #2 [ <optional> array $arguments = [] ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getChannel ] {

      - Parameters [0] {
      }
      - Return [ AMQPChannel ]
    }

    Method [ <internal:amqp> public method getConnection ] {

      - Parameters [0] {
      }
      - Return [ AMQPConnection ]
    }

    Method [ <internal:amqp> public method getConsumerTag ] {

      - Parameters [0] {
      }
      - Return [ ?string ]
    }
  }
}
',
);
