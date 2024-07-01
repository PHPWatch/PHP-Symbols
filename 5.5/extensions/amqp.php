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
    'version' => '1.9.3',
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
    0 => 'AMQPConnection',
    1 => 'AMQPChannel',
    2 => 'AMQPQueue',
    3 => 'AMQPExchange',
    4 => 'AMQPBasicProperties',
    5 => 'AMQPEnvelope',
    6 => 'AMQPTimestamp',
    7 => 'AMQPDecimal',
    8 => 'AMQPException',
    9 => 'AMQPConnectionException',
    10 => 'AMQPChannelException',
    11 => 'AMQPQueueException',
    12 => 'AMQPEnvelopeException',
    13 => 'AMQPExchangeException',
    14 => 'AMQPValueException',
  ),
  'functions' => 
  array (
  ),
  'constants' => 
  array (
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
    'amqp.frame_max' => '131072',
    'amqp.heartbeat' => '0',
    'amqp.host' => 'localhost',
    'amqp.key' => '',
    'amqp.login' => 'guest',
    'amqp.password' => 'guest',
    'amqp.port' => '5672',
    'amqp.prefetch_count' => '3',
    'amqp.read_timeout' => '0',
    'amqp.timeout' => '',
    'amqp.verify' => '1',
    'amqp.vhost' => '/',
    'amqp.write_timeout' => '0',
  ),
);
