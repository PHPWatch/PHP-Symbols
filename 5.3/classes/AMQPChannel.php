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
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'prefetch_count' => 
    array (
      'name' => 'prefetch_count',
      'class' => 'AMQPChannel',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'prefetch_size' => 
    array (
      'name' => 'prefetch_size',
      'class' => 'AMQPChannel',
      'type' => NULL,
      'has_default_value' => false,
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
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'amqp_connection' => 
        array (
          'position' => 0,
          'name' => 'amqp_connection',
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
    'isConnected' => 
    array (
      'name' => 'isConnected',
      'class' => 'AMQPChannel',
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'AMQPChannel',
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
    'getChannelId' => 
    array (
      'name' => 'getChannelId',
      'class' => 'AMQPChannel',
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
    'getPrefetchSize' => 
    array (
      'name' => 'getPrefetchSize',
      'class' => 'AMQPChannel',
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
    'getPrefetchCount' => 
    array (
      'name' => 'getPrefetchCount',
      'class' => 'AMQPChannel',
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
          'type' => NULL,
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
    'startTransaction' => 
    array (
      'name' => 'startTransaction',
      'class' => 'AMQPChannel',
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
    'commitTransaction' => 
    array (
      'name' => 'commitTransaction',
      'class' => 'AMQPChannel',
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
    'rollbackTransaction' => 
    array (
      'name' => 'rollbackTransaction',
      'class' => 'AMQPChannel',
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
    'getConnection' => 
    array (
      'name' => 'getConnection',
      'class' => 'AMQPChannel',
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
    'confirmSelect' => 
    array (
      'name' => 'confirmSelect',
      'class' => 'AMQPChannel',
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
    'setConfirmCallback' => 
    array (
      'name' => 'setConfirmCallback',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'ack_callback' => 
        array (
          'position' => 0,
          'name' => 'ack_callback',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'nack_callback' => 
        array (
          'position' => 1,
          'name' => 'nack_callback',
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
    'setReturnCallback' => 
    array (
      'name' => 'setReturnCallback',
      'class' => 'AMQPChannel',
      'parameters' => 
      array (
        'return_callback' => 
        array (
          'position' => 0,
          'name' => 'return_callback',
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
    'getConsumers' => 
    array (
      'name' => 'getConsumers',
      'class' => 'AMQPChannel',
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
  ),
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:amqp> class AMQPChannel ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [4] {
    Property [ <default> private $connection ]
    Property [ <default> private $prefetch_count ]
    Property [ <default> private $prefetch_size ]
    Property [ <default> private $consumers ]
  }

  - Methods [20] {
    Method [ <internal:amqp, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> AMQPConnection $amqp_connection ]
      }
    }

    Method [ <internal:amqp> public method isConnected ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getChannelId ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method setPrefetchSize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $size ]
      }
    }

    Method [ <internal:amqp> public method getPrefetchSize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method setPrefetchCount ] {

      - Parameters [1] {
        Parameter #0 [ <required> $count ]
      }
    }

    Method [ <internal:amqp> public method getPrefetchCount ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method qos ] {

      - Parameters [2] {
        Parameter #0 [ <required> $size ]
        Parameter #1 [ <required> $count ]
      }
    }

    Method [ <internal:amqp> public method startTransaction ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method commitTransaction ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method rollbackTransaction ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getConnection ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method basicRecover ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $requeue ]
      }
    }

    Method [ <internal:amqp> public method confirmSelect ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method waitForConfirm ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $timeout ]
      }
    }

    Method [ <internal:amqp> public method setConfirmCallback ] {

      - Parameters [2] {
        Parameter #0 [ <required> $ack_callback ]
        Parameter #1 [ <optional> $nack_callback ]
      }
    }

    Method [ <internal:amqp> public method setReturnCallback ] {

      - Parameters [1] {
        Parameter #0 [ <required> $return_callback ]
      }
    }

    Method [ <internal:amqp> public method waitForBasicReturn ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $timeout ]
      }
    }

    Method [ <internal:amqp> public method getConsumers ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
