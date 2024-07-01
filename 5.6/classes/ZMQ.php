<?php

return array (
  'type' => 'class',
  'name' => 'ZMQ',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZMQ',
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
        'name' => 'ZMQ class (php.net)',
        'url' => 'https://www.php.net/manual/class.zmq.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'SOCKET_PAIR' => 0,
    'SOCKET_PUB' => 1,
    'SOCKET_SUB' => 2,
    'SOCKET_XSUB' => 10,
    'SOCKET_XPUB' => 9,
    'SOCKET_REQ' => 3,
    'SOCKET_REP' => 4,
    'SOCKET_XREQ' => 5,
    'SOCKET_XREP' => 6,
    'SOCKET_PUSH' => 8,
    'SOCKET_PULL' => 7,
    'SOCKET_DEALER' => 5,
    'SOCKET_ROUTER' => 6,
    'SOCKET_STREAM' => 11,
    'SOCKET_UPSTREAM' => 7,
    'SOCKET_DOWNSTREAM' => 8,
    'POLL_IN' => 1,
    'POLL_OUT' => 2,
    'MODE_SNDMORE' => 2,
    'MODE_NOBLOCK' => 1,
    'MODE_DONTWAIT' => 1,
    'DEVICE_FORWARDER' => 2,
    'DEVICE_QUEUE' => 3,
    'DEVICE_STREAMER' => 1,
    'ERR_INTERNAL' => -99,
    'ERR_EAGAIN' => 11,
    'ERR_ENOTSUP' => 95,
    'ERR_EFSM' => 156384763,
    'ERR_ETERM' => 156384765,
    'LIBZMQ_VER' => '4.3.4',
    'SOCKOPT_HWM' => 201,
    'SOCKOPT_SNDHWM' => 23,
    'SOCKOPT_RCVHWM' => 24,
    'SOCKOPT_AFFINITY' => 4,
    'SOCKOPT_IDENTITY' => 5,
    'SOCKOPT_RATE' => 8,
    'SOCKOPT_RECOVERY_IVL' => 9,
    'SOCKOPT_SNDBUF' => 11,
    'SOCKOPT_RCVBUF' => 12,
    'SOCKOPT_LINGER' => 17,
    'SOCKOPT_RECONNECT_IVL' => 18,
    'SOCKOPT_RECONNECT_IVL_MAX' => 21,
    'SOCKOPT_BACKLOG' => 19,
    'SOCKOPT_MAXMSGSIZE' => 22,
    'SOCKOPT_SUBSCRIBE' => 6,
    'SOCKOPT_UNSUBSCRIBE' => 7,
    'SOCKOPT_TYPE' => 16,
    'SOCKOPT_RCVMORE' => 13,
    'SOCKOPT_FD' => 14,
    'SOCKOPT_EVENTS' => 15,
    'SOCKOPT_SNDTIMEO' => 28,
    'SOCKOPT_RCVTIMEO' => 27,
    'SOCKOPT_IPV4ONLY' => 31,
    'SOCKOPT_LAST_ENDPOINT' => 32,
    'SOCKOPT_TCP_KEEPALIVE' => 34,
    'SOCKOPT_TCP_KEEPALIVE_IDLE' => 36,
    'SOCKOPT_TCP_KEEPALIVE_CNT' => 35,
    'SOCKOPT_TCP_KEEPALIVE_INTVL' => 37,
    'SOCKOPT_TCP_ACCEPT_FILTER' => 38,
    'SOCKOPT_DELAY_ATTACH_ON_CONNECT' => 39,
    'SOCKOPT_XPUB_VERBOSE' => 40,
    'SOCKOPT_ROUTER_MANDATORY' => 33,
    'SOCKOPT_ROUTER_RAW' => 41,
    'SOCKOPT_IPV6' => 42,
    'SOCKOPT_PLAIN_SERVER' => 44,
    'SOCKOPT_PLAIN_USERNAME' => 45,
    'SOCKOPT_PLAIN_PASSWORD' => 46,
    'SOCKOPT_CURVE_SERVER' => 47,
    'SOCKOPT_CURVE_PUBLICKEY' => 48,
    'SOCKOPT_CURVE_SECRETKEY' => 49,
    'SOCKOPT_CURVE_SERVERKEY' => 50,
    'SOCKOPT_PROBE_ROUTER' => 51,
    'SOCKOPT_REQ_CORRELATE' => 52,
    'SOCKOPT_REQ_RELAXED' => 53,
    'SOCKOPT_CONFLATE' => 54,
    'SOCKOPT_ZAP_DOMAIN' => 55,
    'CTXOPT_MAX_SOCKETS' => 2,
    'CTXOPT_MAX_SOCKETS_DEFAULT' => 1023,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'ZMQ',
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
    'clock' => 
    array (
      'name' => 'clock',
      'class' => 'ZMQ',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
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
  'toString' => 'Class [ <internal:zmq> class ZMQ ] {

  - Constants [78] {
    Constant [ integer SOCKET_PAIR ] { 0 }
    Constant [ integer SOCKET_PUB ] { 1 }
    Constant [ integer SOCKET_SUB ] { 2 }
    Constant [ integer SOCKET_XSUB ] { 10 }
    Constant [ integer SOCKET_XPUB ] { 9 }
    Constant [ integer SOCKET_REQ ] { 3 }
    Constant [ integer SOCKET_REP ] { 4 }
    Constant [ integer SOCKET_XREQ ] { 5 }
    Constant [ integer SOCKET_XREP ] { 6 }
    Constant [ integer SOCKET_PUSH ] { 8 }
    Constant [ integer SOCKET_PULL ] { 7 }
    Constant [ integer SOCKET_DEALER ] { 5 }
    Constant [ integer SOCKET_ROUTER ] { 6 }
    Constant [ integer SOCKET_STREAM ] { 11 }
    Constant [ integer SOCKET_UPSTREAM ] { 7 }
    Constant [ integer SOCKET_DOWNSTREAM ] { 8 }
    Constant [ integer POLL_IN ] { 1 }
    Constant [ integer POLL_OUT ] { 2 }
    Constant [ integer MODE_SNDMORE ] { 2 }
    Constant [ integer MODE_NOBLOCK ] { 1 }
    Constant [ integer MODE_DONTWAIT ] { 1 }
    Constant [ integer DEVICE_FORWARDER ] { 2 }
    Constant [ integer DEVICE_QUEUE ] { 3 }
    Constant [ integer DEVICE_STREAMER ] { 1 }
    Constant [ integer ERR_INTERNAL ] { -99 }
    Constant [ integer ERR_EAGAIN ] { 11 }
    Constant [ integer ERR_ENOTSUP ] { 95 }
    Constant [ integer ERR_EFSM ] { 156384763 }
    Constant [ integer ERR_ETERM ] { 156384765 }
    Constant [ string LIBZMQ_VER ] { 4.3.4 }
    Constant [ integer SOCKOPT_HWM ] { 201 }
    Constant [ integer SOCKOPT_SNDHWM ] { 23 }
    Constant [ integer SOCKOPT_RCVHWM ] { 24 }
    Constant [ integer SOCKOPT_AFFINITY ] { 4 }
    Constant [ integer SOCKOPT_IDENTITY ] { 5 }
    Constant [ integer SOCKOPT_RATE ] { 8 }
    Constant [ integer SOCKOPT_RECOVERY_IVL ] { 9 }
    Constant [ integer SOCKOPT_SNDBUF ] { 11 }
    Constant [ integer SOCKOPT_RCVBUF ] { 12 }
    Constant [ integer SOCKOPT_LINGER ] { 17 }
    Constant [ integer SOCKOPT_RECONNECT_IVL ] { 18 }
    Constant [ integer SOCKOPT_RECONNECT_IVL_MAX ] { 21 }
    Constant [ integer SOCKOPT_BACKLOG ] { 19 }
    Constant [ integer SOCKOPT_MAXMSGSIZE ] { 22 }
    Constant [ integer SOCKOPT_SUBSCRIBE ] { 6 }
    Constant [ integer SOCKOPT_UNSUBSCRIBE ] { 7 }
    Constant [ integer SOCKOPT_TYPE ] { 16 }
    Constant [ integer SOCKOPT_RCVMORE ] { 13 }
    Constant [ integer SOCKOPT_FD ] { 14 }
    Constant [ integer SOCKOPT_EVENTS ] { 15 }
    Constant [ integer SOCKOPT_SNDTIMEO ] { 28 }
    Constant [ integer SOCKOPT_RCVTIMEO ] { 27 }
    Constant [ integer SOCKOPT_IPV4ONLY ] { 31 }
    Constant [ integer SOCKOPT_LAST_ENDPOINT ] { 32 }
    Constant [ integer SOCKOPT_TCP_KEEPALIVE ] { 34 }
    Constant [ integer SOCKOPT_TCP_KEEPALIVE_IDLE ] { 36 }
    Constant [ integer SOCKOPT_TCP_KEEPALIVE_CNT ] { 35 }
    Constant [ integer SOCKOPT_TCP_KEEPALIVE_INTVL ] { 37 }
    Constant [ integer SOCKOPT_TCP_ACCEPT_FILTER ] { 38 }
    Constant [ integer SOCKOPT_DELAY_ATTACH_ON_CONNECT ] { 39 }
    Constant [ integer SOCKOPT_XPUB_VERBOSE ] { 40 }
    Constant [ integer SOCKOPT_ROUTER_MANDATORY ] { 33 }
    Constant [ integer SOCKOPT_ROUTER_RAW ] { 41 }
    Constant [ integer SOCKOPT_IPV6 ] { 42 }
    Constant [ integer SOCKOPT_PLAIN_SERVER ] { 44 }
    Constant [ integer SOCKOPT_PLAIN_USERNAME ] { 45 }
    Constant [ integer SOCKOPT_PLAIN_PASSWORD ] { 46 }
    Constant [ integer SOCKOPT_CURVE_SERVER ] { 47 }
    Constant [ integer SOCKOPT_CURVE_PUBLICKEY ] { 48 }
    Constant [ integer SOCKOPT_CURVE_SECRETKEY ] { 49 }
    Constant [ integer SOCKOPT_CURVE_SERVERKEY ] { 50 }
    Constant [ integer SOCKOPT_PROBE_ROUTER ] { 51 }
    Constant [ integer SOCKOPT_REQ_CORRELATE ] { 52 }
    Constant [ integer SOCKOPT_REQ_RELAXED ] { 53 }
    Constant [ integer SOCKOPT_CONFLATE ] { 54 }
    Constant [ integer SOCKOPT_ZAP_DOMAIN ] { 55 }
    Constant [ integer CTXOPT_MAX_SOCKETS ] { 2 }
    Constant [ integer CTXOPT_MAX_SOCKETS_DEFAULT ] { 1023 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:zmq> static public method clock ] {

      - Parameters [0] {
      }
    }
  }

  - Properties [0] {
  }

  - Methods [1] {
    Method [ <internal:zmq, ctor> private method __construct ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
