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
    'SOCKET_REQ' => 3,
    'SOCKET_REP' => 4,
    'SOCKET_XREQ' => 5,
    'SOCKET_XREP' => 6,
    'SOCKET_PUSH' => 8,
    'SOCKET_PULL' => 7,
    'SOCKET_DEALER' => 5,
    'SOCKET_ROUTER' => 6,
    'SOCKET_XSUB' => 10,
    'SOCKET_XPUB' => 9,
    'SOCKET_STREAM' => 11,
    'SOCKET_UPSTREAM' => 7,
    'SOCKET_DOWNSTREAM' => 8,
    'POLL_IN' => 1,
    'POLL_OUT' => 2,
    'MODE_SNDMORE' => 2,
    'MODE_NOBLOCK' => 1,
    'MODE_DONTWAIT' => 1,
    'ERR_INTERNAL' => -99,
    'ERR_EAGAIN' => 11,
    'ERR_ENOTSUP' => 95,
    'ERR_EFSM' => 156384763,
    'ERR_ETERM' => 156384765,
    'LIBZMQ_VER' => '4.3.5',
    'LIBZMQ_VERSION' => '4.3.5',
    'LIBZMQ_VERSION_ID' => 40305,
    'LIBZMQ_VERSION_MAJOR' => 4,
    'LIBZMQ_VERSION_MINOR' => 3,
    'LIBZMQ_VERSION_PATCH' => 5,
    'SOCKOPT_GSSAPI_PRINCIPAL_NAMETYPE' => 90,
    'SOCKOPT_GSSAPI_SERVICE_PRINCIPAL_NAMETYPE' => 91,
    'SOCKOPT_BINDTODEVICE' => 92,
    'SOCKOPT_HEARTBEAT_IVL' => 75,
    'SOCKOPT_HEARTBEAT_TTL' => 76,
    'SOCKOPT_HEARTBEAT_TIMEOUT' => 77,
    'SOCKOPT_USE_FD' => 89,
    'SOCKOPT_XPUB_MANUAL' => 71,
    'SOCKOPT_XPUB_WELCOME_MSG' => 72,
    'SOCKOPT_STREAM_NOTIFY' => 73,
    'SOCKOPT_INVERT_MATCHING' => 74,
    'SOCKOPT_XPUB_VERBOSER' => 78,
    'SOCKOPT_CONNECT_TIMEOUT' => 79,
    'SOCKOPT_TCP_MAXRT' => 80,
    'SOCKOPT_THREAD_SAFE' => 81,
    'SOCKOPT_MULTICAST_MAXTPDU' => 84,
    'SOCKOPT_VMCI_BUFFER_SIZE' => 85,
    'SOCKOPT_VMCI_BUFFER_MIN_SIZE' => 86,
    'SOCKOPT_VMCI_BUFFER_MAX_SIZE' => 87,
    'SOCKOPT_VMCI_CONNECT_TIMEOUT' => 88,
    'SOCKOPT_TOS' => 57,
    'SOCKOPT_ROUTER_HANDOVER' => 56,
    'SOCKOPT_CONNECT_RID' => 61,
    'SOCKOPT_HANDSHAKE_IVL' => 66,
    'SOCKOPT_SOCKS_PROXY' => 68,
    'SOCKOPT_XPUB_NODROP' => 69,
    'SOCKOPT_ROUTER_MANDATORY' => 33,
    'SOCKOPT_PROBE_ROUTER' => 51,
    'SOCKOPT_REQ_RELAXED' => 53,
    'SOCKOPT_REQ_CORRELATE' => 52,
    'SOCKOPT_CONFLATE' => 54,
    'SOCKOPT_ZAP_DOMAIN' => 55,
    'SOCKOPT_MECHANISM' => 43,
    'SOCKOPT_PLAIN_SERVER' => 44,
    'SOCKOPT_PLAIN_USERNAME' => 45,
    'SOCKOPT_PLAIN_PASSWORD' => 46,
    'SOCKOPT_CURVE_SERVER' => 47,
    'SOCKOPT_CURVE_PUBLICKEY' => 48,
    'SOCKOPT_CURVE_SECRETKEY' => 49,
    'SOCKOPT_CURVE_SERVERKEY' => 50,
    'SOCKOPT_GSSAPI_SERVER' => 62,
    'SOCKOPT_GSSAPI_PLAINTEXT' => 65,
    'SOCKOPT_GSSAPI_PRINCIPAL' => 63,
    'SOCKOPT_GSSAPI_SERVICE_PRINCIPAL' => 64,
    'SOCKOPT_IPV6' => 42,
    'SOCKOPT_IMMEDIATE' => 39,
    'SOCKOPT_SNDHWM' => 23,
    'SOCKOPT_RCVHWM' => 24,
    'SOCKOPT_MAXMSGSIZE' => 22,
    'SOCKOPT_MULTICAST_HOPS' => 25,
    'SOCKOPT_XPUB_VERBOSE' => 40,
    'SOCKOPT_TCP_KEEPALIVE' => 34,
    'SOCKOPT_TCP_KEEPALIVE_IDLE' => 36,
    'SOCKOPT_TCP_KEEPALIVE_CNT' => 35,
    'SOCKOPT_TCP_KEEPALIVE_INTVL' => 37,
    'SOCKOPT_TCP_ACCEPT_FILTER' => 38,
    'SOCKOPT_LAST_ENDPOINT' => 32,
    'SOCKOPT_ROUTER_RAW' => 41,
    'SOCKOPT_IPV4ONLY' => 31,
    'SOCKOPT_DELAY_ATTACH_ON_CONNECT' => 39,
    'SOCKOPT_HWM' => 2001,
    'SOCKOPT_AFFINITY' => 4,
    'SOCKOPT_IDENTITY' => 5,
    'SOCKOPT_RATE' => 8,
    'SOCKOPT_RECOVERY_IVL' => 9,
    'SOCKOPT_RCVTIMEO' => 27,
    'SOCKOPT_SNDTIMEO' => 28,
    'SOCKOPT_SNDBUF' => 11,
    'SOCKOPT_RCVBUF' => 12,
    'SOCKOPT_LINGER' => 17,
    'SOCKOPT_RECONNECT_IVL' => 18,
    'SOCKOPT_RECONNECT_IVL_MAX' => 21,
    'SOCKOPT_BACKLOG' => 19,
    'SOCKOPT_SUBSCRIBE' => 6,
    'SOCKOPT_UNSUBSCRIBE' => 7,
    'SOCKOPT_TYPE' => 16,
    'SOCKOPT_RCVMORE' => 13,
    'SOCKOPT_FD' => 14,
    'SOCKOPT_EVENTS' => 15,
    'CTXOPT_MAX_SOCKETS' => 2,
    'CTXOPT_MAX_SOCKETS_DEFAULT' => 1023,
    'EVENT_CONNECTED' => 1,
    'EVENT_CONNECT_DELAYED' => 2,
    'EVENT_CONNECT_RETRIED' => 4,
    'EVENT_LISTENING' => 8,
    'EVENT_BIND_FAILED' => 16,
    'EVENT_ACCEPTED' => 32,
    'EVENT_ACCEPT_FAILED' => 64,
    'EVENT_CLOSED' => 128,
    'EVENT_CLOSE_FAILED' => 256,
    'EVENT_DISCONNECTED' => 512,
    'EVENT_MONITOR_STOPPED' => 1024,
    'EVENT_ALL' => 65535,
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
      'has_return_type' => false,
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
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'z85encode' => 
    array (
      'name' => 'z85encode',
      'class' => 'ZMQ',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
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
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'z85decode' => 
    array (
      'name' => 'z85decode',
      'class' => 'ZMQ',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
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
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'curvekeypair' => 
    array (
      'name' => 'curvekeypair',
      'class' => 'ZMQ',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
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
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:zmq> class ZMQ ] {

  - Constants [125] {
    Constant [ integer SOCKET_PAIR ] { 0 }
    Constant [ integer SOCKET_PUB ] { 1 }
    Constant [ integer SOCKET_SUB ] { 2 }
    Constant [ integer SOCKET_REQ ] { 3 }
    Constant [ integer SOCKET_REP ] { 4 }
    Constant [ integer SOCKET_XREQ ] { 5 }
    Constant [ integer SOCKET_XREP ] { 6 }
    Constant [ integer SOCKET_PUSH ] { 8 }
    Constant [ integer SOCKET_PULL ] { 7 }
    Constant [ integer SOCKET_DEALER ] { 5 }
    Constant [ integer SOCKET_ROUTER ] { 6 }
    Constant [ integer SOCKET_XSUB ] { 10 }
    Constant [ integer SOCKET_XPUB ] { 9 }
    Constant [ integer SOCKET_STREAM ] { 11 }
    Constant [ integer SOCKET_UPSTREAM ] { 7 }
    Constant [ integer SOCKET_DOWNSTREAM ] { 8 }
    Constant [ integer POLL_IN ] { 1 }
    Constant [ integer POLL_OUT ] { 2 }
    Constant [ integer MODE_SNDMORE ] { 2 }
    Constant [ integer MODE_NOBLOCK ] { 1 }
    Constant [ integer MODE_DONTWAIT ] { 1 }
    Constant [ integer ERR_INTERNAL ] { -99 }
    Constant [ integer ERR_EAGAIN ] { 11 }
    Constant [ integer ERR_ENOTSUP ] { 95 }
    Constant [ integer ERR_EFSM ] { 156384763 }
    Constant [ integer ERR_ETERM ] { 156384765 }
    Constant [ string LIBZMQ_VER ] { 4.3.5 }
    Constant [ string LIBZMQ_VERSION ] { 4.3.5 }
    Constant [ integer LIBZMQ_VERSION_ID ] { 40305 }
    Constant [ integer LIBZMQ_VERSION_MAJOR ] { 4 }
    Constant [ integer LIBZMQ_VERSION_MINOR ] { 3 }
    Constant [ integer LIBZMQ_VERSION_PATCH ] { 5 }
    Constant [ integer SOCKOPT_GSSAPI_PRINCIPAL_NAMETYPE ] { 90 }
    Constant [ integer SOCKOPT_GSSAPI_SERVICE_PRINCIPAL_NAMETYPE ] { 91 }
    Constant [ integer SOCKOPT_BINDTODEVICE ] { 92 }
    Constant [ integer SOCKOPT_HEARTBEAT_IVL ] { 75 }
    Constant [ integer SOCKOPT_HEARTBEAT_TTL ] { 76 }
    Constant [ integer SOCKOPT_HEARTBEAT_TIMEOUT ] { 77 }
    Constant [ integer SOCKOPT_USE_FD ] { 89 }
    Constant [ integer SOCKOPT_XPUB_MANUAL ] { 71 }
    Constant [ integer SOCKOPT_XPUB_WELCOME_MSG ] { 72 }
    Constant [ integer SOCKOPT_STREAM_NOTIFY ] { 73 }
    Constant [ integer SOCKOPT_INVERT_MATCHING ] { 74 }
    Constant [ integer SOCKOPT_XPUB_VERBOSER ] { 78 }
    Constant [ integer SOCKOPT_CONNECT_TIMEOUT ] { 79 }
    Constant [ integer SOCKOPT_TCP_MAXRT ] { 80 }
    Constant [ integer SOCKOPT_THREAD_SAFE ] { 81 }
    Constant [ integer SOCKOPT_MULTICAST_MAXTPDU ] { 84 }
    Constant [ integer SOCKOPT_VMCI_BUFFER_SIZE ] { 85 }
    Constant [ integer SOCKOPT_VMCI_BUFFER_MIN_SIZE ] { 86 }
    Constant [ integer SOCKOPT_VMCI_BUFFER_MAX_SIZE ] { 87 }
    Constant [ integer SOCKOPT_VMCI_CONNECT_TIMEOUT ] { 88 }
    Constant [ integer SOCKOPT_TOS ] { 57 }
    Constant [ integer SOCKOPT_ROUTER_HANDOVER ] { 56 }
    Constant [ integer SOCKOPT_CONNECT_RID ] { 61 }
    Constant [ integer SOCKOPT_HANDSHAKE_IVL ] { 66 }
    Constant [ integer SOCKOPT_SOCKS_PROXY ] { 68 }
    Constant [ integer SOCKOPT_XPUB_NODROP ] { 69 }
    Constant [ integer SOCKOPT_ROUTER_MANDATORY ] { 33 }
    Constant [ integer SOCKOPT_PROBE_ROUTER ] { 51 }
    Constant [ integer SOCKOPT_REQ_RELAXED ] { 53 }
    Constant [ integer SOCKOPT_REQ_CORRELATE ] { 52 }
    Constant [ integer SOCKOPT_CONFLATE ] { 54 }
    Constant [ integer SOCKOPT_ZAP_DOMAIN ] { 55 }
    Constant [ integer SOCKOPT_MECHANISM ] { 43 }
    Constant [ integer SOCKOPT_PLAIN_SERVER ] { 44 }
    Constant [ integer SOCKOPT_PLAIN_USERNAME ] { 45 }
    Constant [ integer SOCKOPT_PLAIN_PASSWORD ] { 46 }
    Constant [ integer SOCKOPT_CURVE_SERVER ] { 47 }
    Constant [ integer SOCKOPT_CURVE_PUBLICKEY ] { 48 }
    Constant [ integer SOCKOPT_CURVE_SECRETKEY ] { 49 }
    Constant [ integer SOCKOPT_CURVE_SERVERKEY ] { 50 }
    Constant [ integer SOCKOPT_GSSAPI_SERVER ] { 62 }
    Constant [ integer SOCKOPT_GSSAPI_PLAINTEXT ] { 65 }
    Constant [ integer SOCKOPT_GSSAPI_PRINCIPAL ] { 63 }
    Constant [ integer SOCKOPT_GSSAPI_SERVICE_PRINCIPAL ] { 64 }
    Constant [ integer SOCKOPT_IPV6 ] { 42 }
    Constant [ integer SOCKOPT_IMMEDIATE ] { 39 }
    Constant [ integer SOCKOPT_SNDHWM ] { 23 }
    Constant [ integer SOCKOPT_RCVHWM ] { 24 }
    Constant [ integer SOCKOPT_MAXMSGSIZE ] { 22 }
    Constant [ integer SOCKOPT_MULTICAST_HOPS ] { 25 }
    Constant [ integer SOCKOPT_XPUB_VERBOSE ] { 40 }
    Constant [ integer SOCKOPT_TCP_KEEPALIVE ] { 34 }
    Constant [ integer SOCKOPT_TCP_KEEPALIVE_IDLE ] { 36 }
    Constant [ integer SOCKOPT_TCP_KEEPALIVE_CNT ] { 35 }
    Constant [ integer SOCKOPT_TCP_KEEPALIVE_INTVL ] { 37 }
    Constant [ integer SOCKOPT_TCP_ACCEPT_FILTER ] { 38 }
    Constant [ integer SOCKOPT_LAST_ENDPOINT ] { 32 }
    Constant [ integer SOCKOPT_ROUTER_RAW ] { 41 }
    Constant [ integer SOCKOPT_IPV4ONLY ] { 31 }
    Constant [ integer SOCKOPT_DELAY_ATTACH_ON_CONNECT ] { 39 }
    Constant [ integer SOCKOPT_HWM ] { 2001 }
    Constant [ integer SOCKOPT_AFFINITY ] { 4 }
    Constant [ integer SOCKOPT_IDENTITY ] { 5 }
    Constant [ integer SOCKOPT_RATE ] { 8 }
    Constant [ integer SOCKOPT_RECOVERY_IVL ] { 9 }
    Constant [ integer SOCKOPT_RCVTIMEO ] { 27 }
    Constant [ integer SOCKOPT_SNDTIMEO ] { 28 }
    Constant [ integer SOCKOPT_SNDBUF ] { 11 }
    Constant [ integer SOCKOPT_RCVBUF ] { 12 }
    Constant [ integer SOCKOPT_LINGER ] { 17 }
    Constant [ integer SOCKOPT_RECONNECT_IVL ] { 18 }
    Constant [ integer SOCKOPT_RECONNECT_IVL_MAX ] { 21 }
    Constant [ integer SOCKOPT_BACKLOG ] { 19 }
    Constant [ integer SOCKOPT_SUBSCRIBE ] { 6 }
    Constant [ integer SOCKOPT_UNSUBSCRIBE ] { 7 }
    Constant [ integer SOCKOPT_TYPE ] { 16 }
    Constant [ integer SOCKOPT_RCVMORE ] { 13 }
    Constant [ integer SOCKOPT_FD ] { 14 }
    Constant [ integer SOCKOPT_EVENTS ] { 15 }
    Constant [ integer CTXOPT_MAX_SOCKETS ] { 2 }
    Constant [ integer CTXOPT_MAX_SOCKETS_DEFAULT ] { 1023 }
    Constant [ integer EVENT_CONNECTED ] { 1 }
    Constant [ integer EVENT_CONNECT_DELAYED ] { 2 }
    Constant [ integer EVENT_CONNECT_RETRIED ] { 4 }
    Constant [ integer EVENT_LISTENING ] { 8 }
    Constant [ integer EVENT_BIND_FAILED ] { 16 }
    Constant [ integer EVENT_ACCEPTED ] { 32 }
    Constant [ integer EVENT_ACCEPT_FAILED ] { 64 }
    Constant [ integer EVENT_CLOSED ] { 128 }
    Constant [ integer EVENT_CLOSE_FAILED ] { 256 }
    Constant [ integer EVENT_DISCONNECTED ] { 512 }
    Constant [ integer EVENT_MONITOR_STOPPED ] { 1024 }
    Constant [ integer EVENT_ALL ] { 65535 }
  }

  - Static properties [0] {
  }

  - Static methods [4] {
    Method [ <internal:zmq> static public method clock ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:zmq> static public method z85encode ] {

      - Parameters [1] {
        Parameter #0 [ <required> $data ]
      }
    }

    Method [ <internal:zmq> static public method z85decode ] {

      - Parameters [1] {
        Parameter #0 [ <required> $data ]
      }
    }

    Method [ <internal:zmq> static public method curvekeypair ] {

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
