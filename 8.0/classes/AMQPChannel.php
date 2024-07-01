<?php

return array (
  'type' => 'class',
  'name' => 'AMQPChannel',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'AMQPChannel',
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
        'name' => 'AMQPChannel class (php.net)',
        'url' => 'https://www.php.net/manual/class.amqpchannel.php',
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
      'class' => 'AMQPChannel',
      'type' => 'AMQPConnection',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'prefetchCount' => 
    array (
      'name' => 'prefetchCount',
      'class' => 'AMQPChannel',
      'type' => '?int',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'prefetchSize' => 
    array (
      'name' => 'prefetchSize',
      'class' => 'AMQPChannel',
      'type' => '?int',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'globalPrefetchCount' => 
    array (
      'name' => 'globalPrefetchCount',
      'class' => 'AMQPChannel',
      'type' => '?int',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'globalPrefetchSize' => 
    array (
      'name' => 'globalPrefetchSize',
      'class' => 'AMQPChannel',
      'type' => '?int',
      'has_default_value' => true,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'consumers' => 
    array (
      'name' => 'consumers',
      'class' => 'AMQPChannel',
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
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'connection' => 
        array (
          'position' => 0,
          'name' => 'connection',
          'type' => 'AMQPConnection',
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
    'isConnected' => 
    array (
      'name' => 'isConnected',
      'class' => 'AMQPChannel',
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'AMQPChannel',
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
    'getChannelId' => 
    array (
      'name' => 'getChannelId',
      'class' => 'AMQPChannel',
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
    'setPrefetchSize' => 
    array (
      'name' => 'setPrefetchSize',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'size' => 
        array (
          'position' => 0,
          'name' => 'size',
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
    'getPrefetchSize' => 
    array (
      'name' => 'getPrefetchSize',
      'class' => 'AMQPChannel',
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
    'setPrefetchCount' => 
    array (
      'name' => 'setPrefetchCount',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'count' => 
        array (
          'position' => 0,
          'name' => 'count',
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
    'getPrefetchCount' => 
    array (
      'name' => 'getPrefetchCount',
      'class' => 'AMQPChannel',
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
    'setGlobalPrefetchSize' => 
    array (
      'name' => 'setGlobalPrefetchSize',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'size' => 
        array (
          'position' => 0,
          'name' => 'size',
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
    'getGlobalPrefetchSize' => 
    array (
      'name' => 'getGlobalPrefetchSize',
      'class' => 'AMQPChannel',
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
    'setGlobalPrefetchCount' => 
    array (
      'name' => 'setGlobalPrefetchCount',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'count' => 
        array (
          'position' => 0,
          'name' => 'count',
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
    'getGlobalPrefetchCount' => 
    array (
      'name' => 'getGlobalPrefetchCount',
      'class' => 'AMQPChannel',
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
    'qos' => 
    array (
      'name' => 'qos',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'size' => 
        array (
          'position' => 0,
          'name' => 'size',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'count' => 
        array (
          'position' => 1,
          'name' => 'count',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'global' => 
        array (
          'position' => 2,
          'name' => 'global',
          'type' => 'bool',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => false,
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
    'startTransaction' => 
    array (
      'name' => 'startTransaction',
      'class' => 'AMQPChannel',
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
    'commitTransaction' => 
    array (
      'name' => 'commitTransaction',
      'class' => 'AMQPChannel',
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
    'rollbackTransaction' => 
    array (
      'name' => 'rollbackTransaction',
      'class' => 'AMQPChannel',
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
    'getConnection' => 
    array (
      'name' => 'getConnection',
      'class' => 'AMQPChannel',
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
    'basicRecover' => 
    array (
      'name' => 'basicRecover',
      'class' => 'AMQPChannel',
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
    'confirmSelect' => 
    array (
      'name' => 'confirmSelect',
      'class' => 'AMQPChannel',
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
    'waitForConfirm' => 
    array (
      'name' => 'waitForConfirm',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'timeout' => 
        array (
          'position' => 0,
          'name' => 'timeout',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0.0,
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
    'setConfirmCallback' => 
    array (
      'name' => 'setConfirmCallback',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'ackCallback' => 
        array (
          'position' => 0,
          'name' => 'ackCallback',
          'type' => '?callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nackCallback' => 
        array (
          'position' => 1,
          'name' => 'nackCallback',
          'type' => '?callable',
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
    'setReturnCallback' => 
    array (
      'name' => 'setReturnCallback',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'returnCallback' => 
        array (
          'position' => 0,
          'name' => 'returnCallback',
          'type' => '?callable',
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
    'waitForBasicReturn' => 
    array (
      'name' => 'waitForBasicReturn',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'timeout' => 
        array (
          'position' => 0,
          'name' => 'timeout',
          'type' => 'float',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0.0,
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
    'getConsumers' => 
    array (
      'name' => 'getConsumers',
      'class' => 'AMQPChannel',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:amqp> class AMQPChannel ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [6] {
    Property [ private AMQPConnection $connection ]
    Property [ private ?int $prefetchCount = NULL ]
    Property [ private ?int $prefetchSize = NULL ]
    Property [ private ?int $globalPrefetchCount = NULL ]
    Property [ private ?int $globalPrefetchSize = NULL ]
    Property [ private array $consumers = Array ]
  }

  - Methods [24] {
    Method [ <internal:amqp, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> AMQPConnection $connection ]
      }
    }

    Method [ <internal:amqp> public method isConnected ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:amqp> public method close ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getChannelId ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method setPrefetchSize ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $size ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getPrefetchSize ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method setPrefetchCount ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $count ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getPrefetchCount ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method setGlobalPrefetchSize ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $size ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getGlobalPrefetchSize ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method setGlobalPrefetchCount ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $count ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getGlobalPrefetchCount ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:amqp> public method qos ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $size ]
        Parameter #1 [ <required> int $count ]
        Parameter #2 [ <optional> bool $global = false ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method startTransaction ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method commitTransaction ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method rollbackTransaction ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getConnection ] {

      - Parameters [0] {
      }
      - Return [ AMQPConnection ]
    }

    Method [ <internal:amqp> public method basicRecover ] {

      - Parameters [1] {
        Parameter #0 [ <optional> bool $requeue = true ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method confirmSelect ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method waitForConfirm ] {

      - Parameters [1] {
        Parameter #0 [ <optional> float $timeout = 0.0 ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method setConfirmCallback ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?callable $ackCallback ]
        Parameter #1 [ <optional> ?callable $nackCallback = null ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method setReturnCallback ] {

      - Parameters [1] {
        Parameter #0 [ <required> ?callable $returnCallback ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method waitForBasicReturn ] {

      - Parameters [1] {
        Parameter #0 [ <optional> float $timeout = 0.0 ]
      }
      - Return [ void ]
    }

    Method [ <internal:amqp> public method getConsumers ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }
}
',
);
