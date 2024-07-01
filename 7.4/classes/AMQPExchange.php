<?php

return array (
  'type' => 'class',
  'name' => 'AMQPExchange',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'AMQPExchange',
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
        'name' => 'AMQPExchange class (php.net)',
        'url' => 'https://www.php.net/manual/class.amqpexchange.php',
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
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'class' => 'AMQPExchange',
      'type' => 'string',
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
      'class' => 'AMQPExchange',
      'type' => 'bool',
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
      'class' => 'AMQPExchange',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'autoDelete' => 
    array (
      'name' => 'autoDelete',
      'class' => 'AMQPExchange',
      'type' => 'bool',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'internal' => 
    array (
      'name' => 'internal',
      'class' => 'AMQPExchange',
      'type' => 'bool',
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
      'class' => 'AMQPExchange',
      'type' => 'array',
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
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setName' => 
    array (
      'name' => 'setName',
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
          'type' => 'int',
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
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'AMQPExchange',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setType' => 
    array (
      'name' => 'setType',
      'class' => 'AMQPExchange',
      'parameters' => 
      array (
        'exchangeType' => 
        array (
          'position' => 0,
          'name' => 'exchangeType',
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
    'getArgument' => 
    array (
      'name' => 'getArgument',
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
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
    'declareExchange' => 
    array (
      'name' => 'declareExchange',
      'class' => 'AMQPExchange',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'declare' => 
    array (
      'name' => 'declare',
      'class' => 'AMQPExchange',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bind' => 
    array (
      'name' => 'bind',
      'class' => 'AMQPExchange',
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
          'type' => 'string',
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
          'type' => 'array',
          'is_optional' => true,
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
    'unbind' => 
    array (
      'name' => 'unbind',
      'class' => 'AMQPExchange',
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
          'type' => 'string',
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
          'type' => 'array',
          'is_optional' => true,
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
    'delete' => 
    array (
      'name' => 'delete',
      'class' => 'AMQPExchange',
      'parameters' => 
      array (
        'exchangeName' => 
        array (
          'position' => 0,
          'name' => 'exchangeName',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
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
    'publish' => 
    array (
      'name' => 'publish',
      'class' => 'AMQPExchange',
      'parameters' => 
      array (
        'message' => 
        array (
          'position' => 0,
          'name' => 'message',
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
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'headers' => 
        array (
          'position' => 3,
          'name' => 'headers',
          'type' => 'array',
          'is_optional' => true,
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
    'getChannel' => 
    array (
      'name' => 'getChannel',
      'class' => 'AMQPExchange',
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
      'class' => 'AMQPExchange',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:amqp> class AMQPExchange ] {

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
    Property [ <default> private $type ]
    Property [ <default> private $passive ]
    Property [ <default> private $durable ]
    Property [ <default> private $autoDelete ]
    Property [ <default> private $internal ]
    Property [ <default> private $arguments ]
  }

  - Methods [21] {
    Method [ <internal:amqp, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> AMQPChannel $channel ]
      }
    }

    Method [ <internal:amqp> public method getName ] {

      - Parameters [0] {
      }
      - Return [ string or NULL ]
    }

    Method [ <internal:amqp> public method setName ] {

      - Parameters [1] {
        Parameter #0 [ <required> string or NULL $exchangeName ]
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
        Parameter #0 [ <required> int or NULL $flags ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getType ] {

      - Parameters [0] {
      }
      - Return [ string or NULL ]
    }

    Method [ <internal:amqp> public method setType ] {

      - Parameters [1] {
        Parameter #0 [ <required> string or NULL $exchangeType ]
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

    Method [ <internal:amqp> public method declareExchange ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method declare ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method bind ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $exchangeName ]
        Parameter #1 [ <optional> string or NULL $routingKey ]
        Parameter #2 [ <optional> array $arguments ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method unbind ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $exchangeName ]
        Parameter #1 [ <optional> string or NULL $routingKey ]
        Parameter #2 [ <optional> array $arguments ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method delete ] {

      - Parameters [2] {
        Parameter #0 [ <optional> string or NULL $exchangeName ]
        Parameter #1 [ <optional> int or NULL $flags ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method publish ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $message ]
        Parameter #1 [ <optional> string or NULL $routingKey ]
        Parameter #2 [ <optional> int or NULL $flags ]
        Parameter #3 [ <optional> array $headers ]
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
  }
}
',
);
