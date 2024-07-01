<?php

return array (
  'type' => 'class',
  'name' => 'AMQPEnvelope',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'AMQPEnvelope',
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
        'name' => 'AMQPEnvelope class (php.net)',
        'url' => 'https://www.php.net/manual/class.amqpenvelope.php',
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
    'body' => 
    array (
      'name' => 'body',
      'class' => 'AMQPEnvelope',
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
      'class' => 'AMQPEnvelope',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'delivery_tag' => 
    array (
      'name' => 'delivery_tag',
      'class' => 'AMQPEnvelope',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'is_redelivery' => 
    array (
      'name' => 'is_redelivery',
      'class' => 'AMQPEnvelope',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'exchange_name' => 
    array (
      'name' => 'exchange_name',
      'class' => 'AMQPEnvelope',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
      'is_promoted' => false,
    ),
    'routing_key' => 
    array (
      'name' => 'routing_key',
      'class' => 'AMQPEnvelope',
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
      'class' => 'AMQPEnvelope',
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
    'getBody' => 
    array (
      'name' => 'getBody',
      'class' => 'AMQPEnvelope',
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
    'getRoutingKey' => 
    array (
      'name' => 'getRoutingKey',
      'class' => 'AMQPEnvelope',
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
    'getConsumerTag' => 
    array (
      'name' => 'getConsumerTag',
      'class' => 'AMQPEnvelope',
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
    'getDeliveryTag' => 
    array (
      'name' => 'getDeliveryTag',
      'class' => 'AMQPEnvelope',
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
    'getExchangeName' => 
    array (
      'name' => 'getExchangeName',
      'class' => 'AMQPEnvelope',
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
    'isRedelivery' => 
    array (
      'name' => 'isRedelivery',
      'class' => 'AMQPEnvelope',
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
    'getHeader' => 
    array (
      'name' => 'getHeader',
      'class' => 'AMQPEnvelope',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'hasHeader' => 
    array (
      'name' => 'hasHeader',
      'class' => 'AMQPEnvelope',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
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
    'getContentType' => 
    array (
      'name' => 'getContentType',
      'class' => 'AMQPBasicProperties',
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
    'getContentEncoding' => 
    array (
      'name' => 'getContentEncoding',
      'class' => 'AMQPBasicProperties',
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
    'getHeaders' => 
    array (
      'name' => 'getHeaders',
      'class' => 'AMQPBasicProperties',
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
    'getDeliveryMode' => 
    array (
      'name' => 'getDeliveryMode',
      'class' => 'AMQPBasicProperties',
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
    'getPriority' => 
    array (
      'name' => 'getPriority',
      'class' => 'AMQPBasicProperties',
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
    'getCorrelationId' => 
    array (
      'name' => 'getCorrelationId',
      'class' => 'AMQPBasicProperties',
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
    'getReplyTo' => 
    array (
      'name' => 'getReplyTo',
      'class' => 'AMQPBasicProperties',
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
    'getExpiration' => 
    array (
      'name' => 'getExpiration',
      'class' => 'AMQPBasicProperties',
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
    'getMessageId' => 
    array (
      'name' => 'getMessageId',
      'class' => 'AMQPBasicProperties',
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
    'getTimestamp' => 
    array (
      'name' => 'getTimestamp',
      'class' => 'AMQPBasicProperties',
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
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'AMQPBasicProperties',
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
    'getUserId' => 
    array (
      'name' => 'getUserId',
      'class' => 'AMQPBasicProperties',
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
    'getAppId' => 
    array (
      'name' => 'getAppId',
      'class' => 'AMQPBasicProperties',
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
    'getClusterId' => 
    array (
      'name' => 'getClusterId',
      'class' => 'AMQPBasicProperties',
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:amqp> class AMQPEnvelope extends AMQPBasicProperties ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [6] {
    Property [ <default> private $body ]
    Property [ <default> private $consumer_tag ]
    Property [ <default> private $delivery_tag ]
    Property [ <default> private $is_redelivery ]
    Property [ <default> private $exchange_name ]
    Property [ <default> private $routing_key ]
  }

  - Methods [23] {
    Method [ <internal:amqp, overwrites AMQPBasicProperties, ctor> public method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getBody ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getRoutingKey ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getConsumerTag ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getDeliveryTag ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getExchangeName ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method isRedelivery ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp> public method getHeader ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:amqp> public method hasHeader ] {

      - Parameters [1] {
        Parameter #0 [ <required> $name ]
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getContentType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getContentEncoding ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getHeaders ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getDeliveryMode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getPriority ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getCorrelationId ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getReplyTo ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getExpiration ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getMessageId ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getTimestamp ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getUserId ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getAppId ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:amqp, inherits AMQPBasicProperties> public method getClusterId ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
