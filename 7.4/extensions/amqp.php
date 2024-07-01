<?php

return array (
  'type' => 'extension',
  'name' => 'amqp',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'amqp',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'amqp',
    )),
    'removed' => NULL,
    'version' => '2.1.2',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'amqp extension (php.net)',
        'url' => 'https://www.php.net/manual/book.amqp.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'AMQPException',
    1 => 'AMQPConnectionException',
    2 => 'AMQPChannelException',
    3 => 'AMQPQueueException',
    4 => 'AMQPExchangeException',
    5 => 'AMQPValueException',
    6 => 'AMQPConnection',
    7 => 'AMQPChannel',
    8 => 'AMQPQueue',
    9 => 'AMQPExchange',
    10 => 'AMQPBasicProperties',
    11 => 'AMQPEnvelope',
    12 => 'AMQPEnvelopeException',
    13 => 'AMQPValue',
    14 => 'AMQPTimestamp',
    15 => 'AMQPDecimal',
  ),
  'functions' => 
  array (
  ),
  'constants' => 
  array (
    'AMQP_EXTENSION_VERSION' => '2.1.2',
    'AMQP_EXTENSION_VERSION_MAJOR' => 2,
    'AMQP_EXTENSION_VERSION_MINOR' => 1,
    'AMQP_EXTENSION_VERSION_PATCH' => 2,
    'AMQP_EXTENSION_VERSION_EXTRA' => '',
    'AMQP_EXTENSION_VERSION_ID' => 20102,
    'AMQP_NOPARAM' => 0,
    'AMQP_JUST_CONSUME' => 1,
    'AMQP_DURABLE' => 2,
    'AMQP_PASSIVE' => 4,
    'AMQP_EXCLUSIVE' => 8,
    'AMQP_AUTODELETE' => 16,
    'AMQP_INTERNAL' => 32,
    'AMQP_NOLOCAL' => 64,
    'AMQP_AUTOACK' => 128,
    'AMQP_IFEMPTY' => 256,
    'AMQP_IFUNUSED' => 512,
    'AMQP_MANDATORY' => 1024,
    'AMQP_IMMEDIATE' => 2048,
    'AMQP_MULTIPLE' => 4096,
    'AMQP_NOWAIT' => 8192,
    'AMQP_REQUEUE' => 16384,
    'AMQP_EX_TYPE_DIRECT' => 'direct',
    'AMQP_EX_TYPE_FANOUT' => 'fanout',
    'AMQP_EX_TYPE_TOPIC' => 'topic',
    'AMQP_EX_TYPE_HEADERS' => 'headers',
    'AMQP_OS_SOCKET_TIMEOUT_ERRNO' => 536870923,
    'PHP_AMQP_MAX_CHANNELS' => 256,
    'AMQP_SASL_METHOD_PLAIN' => 0,
    'AMQP_SASL_METHOD_EXTERNAL' => 1,
    'AMQP_DELIVERY_MODE_TRANSIENT' => 1,
    'AMQP_DELIVERY_MODE_PERSISTENT' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'amqp.auto_ack' => '0',
    'amqp.cacert' => '',
    'amqp.cert' => '',
    'amqp.channel_max' => '256',
    'amqp.connect_timeout' => '0',
    'amqp.deserialization_depth' => '128',
    'amqp.frame_max' => '131072',
    'amqp.global_prefetch_count' => '0',
    'amqp.global_prefetch_size' => '0',
    'amqp.heartbeat' => '0',
    'amqp.host' => 'localhost',
    'amqp.key' => '',
    'amqp.login' => 'guest',
    'amqp.password' => 'guest',
    'amqp.port' => '5672',
    'amqp.prefetch_count' => '3',
    'amqp.prefetch_size' => '0',
    'amqp.read_timeout' => '0',
    'amqp.rpc_timeout' => '0',
    'amqp.sasl_method' => 'AMQP_SASL_METHOD_PLAIN',
    'amqp.serialization_depth' => '128',
    'amqp.timeout' => '',
    'amqp.verify' => '1',
    'amqp.vhost' => '/',
    'amqp.write_timeout' => '0',
  ),
);
