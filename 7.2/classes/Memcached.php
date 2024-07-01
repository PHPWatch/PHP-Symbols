<?php

return array (
  'type' => 'class',
  'name' => 'Memcached',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Memcached',
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
        'name' => 'Memcached class (php.net)',
        'url' => 'https://www.php.net/manual/class.memcached.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'LIBMEMCACHED_VERSION_HEX' => 16781315,
    'OPT_COMPRESSION' => -1001,
    'OPT_COMPRESSION_TYPE' => -1004,
    'OPT_PREFIX_KEY' => -1002,
    'OPT_SERIALIZER' => -1003,
    'OPT_USER_FLAGS' => -1006,
    'OPT_STORE_RETRY_COUNT' => -1005,
    'HAVE_IGBINARY' => true,
    'HAVE_JSON' => true,
    'HAVE_MSGPACK' => true,
    'HAVE_ENCODING' => true,
    'HAVE_SESSION' => true,
    'HAVE_SASL' => true,
    'OPT_HASH' => 2,
    'HASH_DEFAULT' => 0,
    'HASH_MD5' => 1,
    'HASH_CRC' => 2,
    'HASH_FNV1_64' => 3,
    'HASH_FNV1A_64' => 4,
    'HASH_FNV1_32' => 5,
    'HASH_FNV1A_32' => 6,
    'HASH_HSIEH' => 7,
    'HASH_MURMUR' => 8,
    'OPT_DISTRIBUTION' => 9,
    'DISTRIBUTION_MODULA' => 0,
    'DISTRIBUTION_CONSISTENT' => 1,
    'DISTRIBUTION_VIRTUAL_BUCKET' => 6,
    'OPT_LIBKETAMA_COMPATIBLE' => 16,
    'OPT_LIBKETAMA_HASH' => 17,
    'OPT_TCP_KEEPALIVE' => 32,
    'OPT_BUFFER_WRITES' => 10,
    'OPT_BINARY_PROTOCOL' => 18,
    'OPT_NO_BLOCK' => 0,
    'OPT_TCP_NODELAY' => 1,
    'OPT_SOCKET_SEND_SIZE' => 4,
    'OPT_SOCKET_RECV_SIZE' => 5,
    'OPT_CONNECT_TIMEOUT' => 14,
    'OPT_RETRY_TIMEOUT' => 15,
    'OPT_DEAD_TIMEOUT' => 36,
    'OPT_SEND_TIMEOUT' => 19,
    'OPT_RECV_TIMEOUT' => 20,
    'OPT_POLL_TIMEOUT' => 8,
    'OPT_CACHE_LOOKUPS' => 6,
    'OPT_SERVER_FAILURE_LIMIT' => 21,
    'OPT_AUTO_EJECT_HOSTS' => 28,
    'OPT_HASH_WITH_PREFIX_KEY' => 25,
    'OPT_NOREPLY' => 26,
    'OPT_SORT_HOSTS' => 12,
    'OPT_VERIFY_KEY' => 13,
    'OPT_USE_UDP' => 27,
    'OPT_NUMBER_OF_REPLICAS' => 29,
    'OPT_RANDOMIZE_REPLICA_READ' => 30,
    'OPT_REMOVE_FAILED_SERVERS' => 35,
    'OPT_SERVER_TIMEOUT_LIMIT' => 37,
    'RES_SUCCESS' => 0,
    'RES_FAILURE' => 1,
    'RES_HOST_LOOKUP_FAILURE' => 2,
    'RES_CONNECTION_FAILURE' => 3,
    'RES_CONNECTION_BIND_FAILURE' => 4,
    'RES_WRITE_FAILURE' => 5,
    'RES_READ_FAILURE' => 6,
    'RES_UNKNOWN_READ_FAILURE' => 7,
    'RES_PROTOCOL_ERROR' => 8,
    'RES_CLIENT_ERROR' => 9,
    'RES_SERVER_ERROR' => 10,
    'RES_DATA_EXISTS' => 12,
    'RES_DATA_DOES_NOT_EXIST' => 13,
    'RES_NOTSTORED' => 14,
    'RES_STORED' => 15,
    'RES_NOTFOUND' => 16,
    'RES_PARTIAL_READ' => 18,
    'RES_SOME_ERRORS' => 19,
    'RES_NO_SERVERS' => 20,
    'RES_END' => 21,
    'RES_DELETED' => 22,
    'RES_VALUE' => 23,
    'RES_STAT' => 24,
    'RES_ITEM' => 25,
    'RES_ERRNO' => 26,
    'RES_FAIL_UNIX_SOCKET' => 27,
    'RES_NOT_SUPPORTED' => 28,
    'RES_NO_KEY_PROVIDED' => 29,
    'RES_FETCH_NOTFINISHED' => 30,
    'RES_TIMEOUT' => 31,
    'RES_BUFFERED' => 32,
    'RES_BAD_KEY_PROVIDED' => 33,
    'RES_INVALID_HOST_PROTOCOL' => 34,
    'RES_SERVER_MARKED_DEAD' => 35,
    'RES_UNKNOWN_STAT_KEY' => 36,
    'RES_INVALID_ARGUMENTS' => 38,
    'RES_PARSE_ERROR' => 43,
    'RES_PARSE_USER_ERROR' => 44,
    'RES_DEPRECATED' => 45,
    'RES_IN_PROGRESS' => 46,
    'RES_MAXIMUM_RETURN' => 49,
    'RES_MEMORY_ALLOCATION_FAILURE' => 17,
    'RES_CONNECTION_SOCKET_CREATE_FAILURE' => 11,
    'RES_E2BIG' => 37,
    'RES_KEY_TOO_BIG' => 39,
    'RES_SERVER_TEMPORARILY_DISABLED' => 47,
    'RES_SERVER_MEMORY_ALLOCATION_FAILURE' => 48,
    'RES_AUTH_PROBLEM' => 40,
    'RES_AUTH_FAILURE' => 41,
    'RES_AUTH_CONTINUE' => 42,
    'RES_PAYLOAD_FAILURE' => -1001,
    'SERIALIZER_PHP' => 1,
    'SERIALIZER_IGBINARY' => 2,
    'SERIALIZER_JSON' => 3,
    'SERIALIZER_JSON_ARRAY' => 4,
    'SERIALIZER_MSGPACK' => 5,
    'COMPRESSION_FASTLZ' => 2,
    'COMPRESSION_ZLIB' => 1,
    'GET_PRESERVE_ORDER' => 1,
    'GET_EXTENDED' => 2,
    'GET_ERROR_RETURN_VALUE' => false,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'persistent_id' => 
        array (
          'position' => 0,
          'name' => 'persistent_id',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'callback' => 
        array (
          'position' => 1,
          'name' => 'callback',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'connection_str' => 
        array (
          'position' => 2,
          'name' => 'connection_str',
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
    'getResultCode' => 
    array (
      'name' => 'getResultCode',
      'class' => 'Memcached',
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
    'getResultMessage' => 
    array (
      'name' => 'getResultMessage',
      'class' => 'Memcached',
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
    'get' => 
    array (
      'name' => 'get',
      'class' => 'Memcached',
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
        'cache_cb' => 
        array (
          'position' => 1,
          'name' => 'cache_cb',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'get_flags' => 
        array (
          'position' => 2,
          'name' => 'get_flags',
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
    'getByKey' => 
    array (
      'name' => 'getByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'cache_cb' => 
        array (
          'position' => 2,
          'name' => 'cache_cb',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'get_flags' => 
        array (
          'position' => 3,
          'name' => 'get_flags',
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
    'getMulti' => 
    array (
      'name' => 'getMulti',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'keys' => 
        array (
          'position' => 0,
          'name' => 'keys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'get_flags' => 
        array (
          'position' => 1,
          'name' => 'get_flags',
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
    'getMultiByKey' => 
    array (
      'name' => 'getMultiByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'keys' => 
        array (
          'position' => 1,
          'name' => 'keys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'get_flags' => 
        array (
          'position' => 2,
          'name' => 'get_flags',
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
    'getDelayed' => 
    array (
      'name' => 'getDelayed',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'keys' => 
        array (
          'position' => 0,
          'name' => 'keys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'with_cas' => 
        array (
          'position' => 1,
          'name' => 'with_cas',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value_cb' => 
        array (
          'position' => 2,
          'name' => 'value_cb',
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
    'getDelayedByKey' => 
    array (
      'name' => 'getDelayedByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'keys' => 
        array (
          'position' => 1,
          'name' => 'keys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'with_cas' => 
        array (
          'position' => 2,
          'name' => 'with_cas',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value_cb' => 
        array (
          'position' => 3,
          'name' => 'value_cb',
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
    'fetch' => 
    array (
      'name' => 'fetch',
      'class' => 'Memcached',
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
    'fetchAll' => 
    array (
      'name' => 'fetchAll',
      'class' => 'Memcached',
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
    'set' => 
    array (
      'name' => 'set',
      'class' => 'Memcached',
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
        'expiration' => 
        array (
          'position' => 2,
          'name' => 'expiration',
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
    'setByKey' => 
    array (
      'name' => 'setByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
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
          'position' => 2,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiration' => 
        array (
          'position' => 3,
          'name' => 'expiration',
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
    'touch' => 
    array (
      'name' => 'touch',
      'class' => 'Memcached',
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
        'expiration' => 
        array (
          'position' => 1,
          'name' => 'expiration',
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
    'touchByKey' => 
    array (
      'name' => 'touchByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiration' => 
        array (
          'position' => 2,
          'name' => 'expiration',
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
    'setMulti' => 
    array (
      'name' => 'setMulti',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'items' => 
        array (
          'position' => 0,
          'name' => 'items',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiration' => 
        array (
          'position' => 1,
          'name' => 'expiration',
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
    'setMultiByKey' => 
    array (
      'name' => 'setMultiByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'items' => 
        array (
          'position' => 1,
          'name' => 'items',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiration' => 
        array (
          'position' => 2,
          'name' => 'expiration',
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
    'cas' => 
    array (
      'name' => 'cas',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'cas_token' => 
        array (
          'position' => 0,
          'name' => 'cas_token',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
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
          'position' => 2,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiration' => 
        array (
          'position' => 3,
          'name' => 'expiration',
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
    'casByKey' => 
    array (
      'name' => 'casByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'cas_token' => 
        array (
          'position' => 0,
          'name' => 'cas_token',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'server_key' => 
        array (
          'position' => 1,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 2,
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
          'position' => 3,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiration' => 
        array (
          'position' => 4,
          'name' => 'expiration',
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
    'add' => 
    array (
      'name' => 'add',
      'class' => 'Memcached',
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
        'expiration' => 
        array (
          'position' => 2,
          'name' => 'expiration',
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
    'addByKey' => 
    array (
      'name' => 'addByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
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
          'position' => 2,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiration' => 
        array (
          'position' => 3,
          'name' => 'expiration',
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
    'append' => 
    array (
      'name' => 'append',
      'class' => 'Memcached',
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
    'appendByKey' => 
    array (
      'name' => 'appendByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
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
          'position' => 2,
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
    'prepend' => 
    array (
      'name' => 'prepend',
      'class' => 'Memcached',
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
    'prependByKey' => 
    array (
      'name' => 'prependByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
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
          'position' => 2,
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
    'replace' => 
    array (
      'name' => 'replace',
      'class' => 'Memcached',
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
        'expiration' => 
        array (
          'position' => 2,
          'name' => 'expiration',
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
    'replaceByKey' => 
    array (
      'name' => 'replaceByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
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
          'position' => 2,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiration' => 
        array (
          'position' => 3,
          'name' => 'expiration',
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
      'class' => 'Memcached',
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
        'time' => 
        array (
          'position' => 1,
          'name' => 'time',
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
    'deleteMulti' => 
    array (
      'name' => 'deleteMulti',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'keys' => 
        array (
          'position' => 0,
          'name' => 'keys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'time' => 
        array (
          'position' => 1,
          'name' => 'time',
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
    'deleteByKey' => 
    array (
      'name' => 'deleteByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'time' => 
        array (
          'position' => 2,
          'name' => 'time',
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
    'deleteMultiByKey' => 
    array (
      'name' => 'deleteMultiByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'keys' => 
        array (
          'position' => 1,
          'name' => 'keys',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'time' => 
        array (
          'position' => 2,
          'name' => 'time',
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
    'increment' => 
    array (
      'name' => 'increment',
      'class' => 'Memcached',
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
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'initial_value' => 
        array (
          'position' => 2,
          'name' => 'initial_value',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiry' => 
        array (
          'position' => 3,
          'name' => 'expiry',
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
    'decrement' => 
    array (
      'name' => 'decrement',
      'class' => 'Memcached',
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
        'offset' => 
        array (
          'position' => 1,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'initial_value' => 
        array (
          'position' => 2,
          'name' => 'initial_value',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiry' => 
        array (
          'position' => 3,
          'name' => 'expiry',
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
    'incrementByKey' => 
    array (
      'name' => 'incrementByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 2,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'initial_value' => 
        array (
          'position' => 3,
          'name' => 'initial_value',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiry' => 
        array (
          'position' => 4,
          'name' => 'expiry',
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
    'decrementByKey' => 
    array (
      'name' => 'decrementByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'key' => 
        array (
          'position' => 1,
          'name' => 'key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 2,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'initial_value' => 
        array (
          'position' => 3,
          'name' => 'initial_value',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'expiry' => 
        array (
          'position' => 4,
          'name' => 'expiry',
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
    'addServer' => 
    array (
      'name' => 'addServer',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'host' => 
        array (
          'position' => 0,
          'name' => 'host',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'port' => 
        array (
          'position' => 1,
          'name' => 'port',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'weight' => 
        array (
          'position' => 2,
          'name' => 'weight',
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
    'addServers' => 
    array (
      'name' => 'addServers',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'servers' => 
        array (
          'position' => 0,
          'name' => 'servers',
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
    'getServerList' => 
    array (
      'name' => 'getServerList',
      'class' => 'Memcached',
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
    'getServerByKey' => 
    array (
      'name' => 'getServerByKey',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'server_key' => 
        array (
          'position' => 0,
          'name' => 'server_key',
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
    'resetServerList' => 
    array (
      'name' => 'resetServerList',
      'class' => 'Memcached',
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
    'quit' => 
    array (
      'name' => 'quit',
      'class' => 'Memcached',
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
    'flushBuffers' => 
    array (
      'name' => 'flushBuffers',
      'class' => 'Memcached',
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
    'getLastErrorMessage' => 
    array (
      'name' => 'getLastErrorMessage',
      'class' => 'Memcached',
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
    'getLastErrorCode' => 
    array (
      'name' => 'getLastErrorCode',
      'class' => 'Memcached',
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
    'getLastErrorErrno' => 
    array (
      'name' => 'getLastErrorErrno',
      'class' => 'Memcached',
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
    'getLastDisconnectedServer' => 
    array (
      'name' => 'getLastDisconnectedServer',
      'class' => 'Memcached',
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
    'getStats' => 
    array (
      'name' => 'getStats',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
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
    'getVersion' => 
    array (
      'name' => 'getVersion',
      'class' => 'Memcached',
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
    'getAllKeys' => 
    array (
      'name' => 'getAllKeys',
      'class' => 'Memcached',
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
    'flush' => 
    array (
      'name' => 'flush',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'delay' => 
        array (
          'position' => 0,
          'name' => 'delay',
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
    'getOption' => 
    array (
      'name' => 'getOption',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
          'name' => 'option',
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
    'setOption' => 
    array (
      'name' => 'setOption',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
          'name' => 'option',
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
    'setOptions' => 
    array (
      'name' => 'setOptions',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'options' => 
        array (
          'position' => 0,
          'name' => 'options',
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
    'setBucket' => 
    array (
      'name' => 'setBucket',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'host_map' => 
        array (
          'position' => 0,
          'name' => 'host_map',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'forward_map' => 
        array (
          'position' => 1,
          'name' => 'forward_map',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'replicas' => 
        array (
          'position' => 2,
          'name' => 'replicas',
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
    'setSaslAuthData' => 
    array (
      'name' => 'setSaslAuthData',
      'class' => 'Memcached',
      'parameters' => 
      array (
        'username' => 
        array (
          'position' => 0,
          'name' => 'username',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'password' => 
        array (
          'position' => 1,
          'name' => 'password',
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
    'setEncodingKey' => 
    array (
      'name' => 'setEncodingKey',
      'class' => 'Memcached',
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
    'isPersistent' => 
    array (
      'name' => 'isPersistent',
      'class' => 'Memcached',
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
    'isPristine' => 
    array (
      'name' => 'isPristine',
      'class' => 'Memcached',
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
    'checkKey' => 
    array (
      'name' => 'checkKey',
      'class' => 'Memcached',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:memcached> class Memcached ] {

  - Constants [115] {
    Constant [ public integer LIBMEMCACHED_VERSION_HEX ] { 16781315 }
    Constant [ public integer OPT_COMPRESSION ] { -1001 }
    Constant [ public integer OPT_COMPRESSION_TYPE ] { -1004 }
    Constant [ public integer OPT_PREFIX_KEY ] { -1002 }
    Constant [ public integer OPT_SERIALIZER ] { -1003 }
    Constant [ public integer OPT_USER_FLAGS ] { -1006 }
    Constant [ public integer OPT_STORE_RETRY_COUNT ] { -1005 }
    Constant [ public boolean HAVE_IGBINARY ] { 1 }
    Constant [ public boolean HAVE_JSON ] { 1 }
    Constant [ public boolean HAVE_MSGPACK ] { 1 }
    Constant [ public boolean HAVE_ENCODING ] { 1 }
    Constant [ public boolean HAVE_SESSION ] { 1 }
    Constant [ public boolean HAVE_SASL ] { 1 }
    Constant [ public integer OPT_HASH ] { 2 }
    Constant [ public integer HASH_DEFAULT ] { 0 }
    Constant [ public integer HASH_MD5 ] { 1 }
    Constant [ public integer HASH_CRC ] { 2 }
    Constant [ public integer HASH_FNV1_64 ] { 3 }
    Constant [ public integer HASH_FNV1A_64 ] { 4 }
    Constant [ public integer HASH_FNV1_32 ] { 5 }
    Constant [ public integer HASH_FNV1A_32 ] { 6 }
    Constant [ public integer HASH_HSIEH ] { 7 }
    Constant [ public integer HASH_MURMUR ] { 8 }
    Constant [ public integer OPT_DISTRIBUTION ] { 9 }
    Constant [ public integer DISTRIBUTION_MODULA ] { 0 }
    Constant [ public integer DISTRIBUTION_CONSISTENT ] { 1 }
    Constant [ public integer DISTRIBUTION_VIRTUAL_BUCKET ] { 6 }
    Constant [ public integer OPT_LIBKETAMA_COMPATIBLE ] { 16 }
    Constant [ public integer OPT_LIBKETAMA_HASH ] { 17 }
    Constant [ public integer OPT_TCP_KEEPALIVE ] { 32 }
    Constant [ public integer OPT_BUFFER_WRITES ] { 10 }
    Constant [ public integer OPT_BINARY_PROTOCOL ] { 18 }
    Constant [ public integer OPT_NO_BLOCK ] { 0 }
    Constant [ public integer OPT_TCP_NODELAY ] { 1 }
    Constant [ public integer OPT_SOCKET_SEND_SIZE ] { 4 }
    Constant [ public integer OPT_SOCKET_RECV_SIZE ] { 5 }
    Constant [ public integer OPT_CONNECT_TIMEOUT ] { 14 }
    Constant [ public integer OPT_RETRY_TIMEOUT ] { 15 }
    Constant [ public integer OPT_DEAD_TIMEOUT ] { 36 }
    Constant [ public integer OPT_SEND_TIMEOUT ] { 19 }
    Constant [ public integer OPT_RECV_TIMEOUT ] { 20 }
    Constant [ public integer OPT_POLL_TIMEOUT ] { 8 }
    Constant [ public integer OPT_CACHE_LOOKUPS ] { 6 }
    Constant [ public integer OPT_SERVER_FAILURE_LIMIT ] { 21 }
    Constant [ public integer OPT_AUTO_EJECT_HOSTS ] { 28 }
    Constant [ public integer OPT_HASH_WITH_PREFIX_KEY ] { 25 }
    Constant [ public integer OPT_NOREPLY ] { 26 }
    Constant [ public integer OPT_SORT_HOSTS ] { 12 }
    Constant [ public integer OPT_VERIFY_KEY ] { 13 }
    Constant [ public integer OPT_USE_UDP ] { 27 }
    Constant [ public integer OPT_NUMBER_OF_REPLICAS ] { 29 }
    Constant [ public integer OPT_RANDOMIZE_REPLICA_READ ] { 30 }
    Constant [ public integer OPT_REMOVE_FAILED_SERVERS ] { 35 }
    Constant [ public integer OPT_SERVER_TIMEOUT_LIMIT ] { 37 }
    Constant [ public integer RES_SUCCESS ] { 0 }
    Constant [ public integer RES_FAILURE ] { 1 }
    Constant [ public integer RES_HOST_LOOKUP_FAILURE ] { 2 }
    Constant [ public integer RES_CONNECTION_FAILURE ] { 3 }
    Constant [ public integer RES_CONNECTION_BIND_FAILURE ] { 4 }
    Constant [ public integer RES_WRITE_FAILURE ] { 5 }
    Constant [ public integer RES_READ_FAILURE ] { 6 }
    Constant [ public integer RES_UNKNOWN_READ_FAILURE ] { 7 }
    Constant [ public integer RES_PROTOCOL_ERROR ] { 8 }
    Constant [ public integer RES_CLIENT_ERROR ] { 9 }
    Constant [ public integer RES_SERVER_ERROR ] { 10 }
    Constant [ public integer RES_DATA_EXISTS ] { 12 }
    Constant [ public integer RES_DATA_DOES_NOT_EXIST ] { 13 }
    Constant [ public integer RES_NOTSTORED ] { 14 }
    Constant [ public integer RES_STORED ] { 15 }
    Constant [ public integer RES_NOTFOUND ] { 16 }
    Constant [ public integer RES_PARTIAL_READ ] { 18 }
    Constant [ public integer RES_SOME_ERRORS ] { 19 }
    Constant [ public integer RES_NO_SERVERS ] { 20 }
    Constant [ public integer RES_END ] { 21 }
    Constant [ public integer RES_DELETED ] { 22 }
    Constant [ public integer RES_VALUE ] { 23 }
    Constant [ public integer RES_STAT ] { 24 }
    Constant [ public integer RES_ITEM ] { 25 }
    Constant [ public integer RES_ERRNO ] { 26 }
    Constant [ public integer RES_FAIL_UNIX_SOCKET ] { 27 }
    Constant [ public integer RES_NOT_SUPPORTED ] { 28 }
    Constant [ public integer RES_NO_KEY_PROVIDED ] { 29 }
    Constant [ public integer RES_FETCH_NOTFINISHED ] { 30 }
    Constant [ public integer RES_TIMEOUT ] { 31 }
    Constant [ public integer RES_BUFFERED ] { 32 }
    Constant [ public integer RES_BAD_KEY_PROVIDED ] { 33 }
    Constant [ public integer RES_INVALID_HOST_PROTOCOL ] { 34 }
    Constant [ public integer RES_SERVER_MARKED_DEAD ] { 35 }
    Constant [ public integer RES_UNKNOWN_STAT_KEY ] { 36 }
    Constant [ public integer RES_INVALID_ARGUMENTS ] { 38 }
    Constant [ public integer RES_PARSE_ERROR ] { 43 }
    Constant [ public integer RES_PARSE_USER_ERROR ] { 44 }
    Constant [ public integer RES_DEPRECATED ] { 45 }
    Constant [ public integer RES_IN_PROGRESS ] { 46 }
    Constant [ public integer RES_MAXIMUM_RETURN ] { 49 }
    Constant [ public integer RES_MEMORY_ALLOCATION_FAILURE ] { 17 }
    Constant [ public integer RES_CONNECTION_SOCKET_CREATE_FAILURE ] { 11 }
    Constant [ public integer RES_E2BIG ] { 37 }
    Constant [ public integer RES_KEY_TOO_BIG ] { 39 }
    Constant [ public integer RES_SERVER_TEMPORARILY_DISABLED ] { 47 }
    Constant [ public integer RES_SERVER_MEMORY_ALLOCATION_FAILURE ] { 48 }
    Constant [ public integer RES_AUTH_PROBLEM ] { 40 }
    Constant [ public integer RES_AUTH_FAILURE ] { 41 }
    Constant [ public integer RES_AUTH_CONTINUE ] { 42 }
    Constant [ public integer RES_PAYLOAD_FAILURE ] { -1001 }
    Constant [ public integer SERIALIZER_PHP ] { 1 }
    Constant [ public integer SERIALIZER_IGBINARY ] { 2 }
    Constant [ public integer SERIALIZER_JSON ] { 3 }
    Constant [ public integer SERIALIZER_JSON_ARRAY ] { 4 }
    Constant [ public integer SERIALIZER_MSGPACK ] { 5 }
    Constant [ public integer COMPRESSION_FASTLZ ] { 2 }
    Constant [ public integer COMPRESSION_ZLIB ] { 1 }
    Constant [ public integer GET_PRESERVE_ORDER ] { 1 }
    Constant [ public integer GET_EXTENDED ] { 2 }
    Constant [ public boolean GET_ERROR_RETURN_VALUE ] {  }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [59] {
    Method [ <internal:memcached, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $persistent_id ]
        Parameter #1 [ <optional> $callback ]
        Parameter #2 [ <optional> $connection_str ]
      }
    }

    Method [ <internal:memcached> public method getResultCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method getResultMessage ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method get ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $cache_cb ]
        Parameter #2 [ <optional> $get_flags ]
      }
    }

    Method [ <internal:memcached> public method getByKey ] {

      - Parameters [4] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> $cache_cb ]
        Parameter #3 [ <optional> $get_flags ]
      }
    }

    Method [ <internal:memcached> public method getMulti ] {

      - Parameters [2] {
        Parameter #0 [ <required> $keys ]
        Parameter #1 [ <optional> $get_flags ]
      }
    }

    Method [ <internal:memcached> public method getMultiByKey ] {

      - Parameters [3] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $keys ]
        Parameter #2 [ <optional> $get_flags ]
      }
    }

    Method [ <internal:memcached> public method getDelayed ] {

      - Parameters [3] {
        Parameter #0 [ <required> $keys ]
        Parameter #1 [ <optional> $with_cas ]
        Parameter #2 [ <optional> $value_cb ]
      }
    }

    Method [ <internal:memcached> public method getDelayedByKey ] {

      - Parameters [4] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $keys ]
        Parameter #2 [ <optional> $with_cas ]
        Parameter #3 [ <optional> $value_cb ]
      }
    }

    Method [ <internal:memcached> public method fetch ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method fetchAll ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method set ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
        Parameter #2 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method setByKey ] {

      - Parameters [4] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <required> $value ]
        Parameter #3 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method touch ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method touchByKey ] {

      - Parameters [3] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method setMulti ] {

      - Parameters [2] {
        Parameter #0 [ <required> $items ]
        Parameter #1 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method setMultiByKey ] {

      - Parameters [3] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $items ]
        Parameter #2 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method cas ] {

      - Parameters [4] {
        Parameter #0 [ <required> $cas_token ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <required> $value ]
        Parameter #3 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method casByKey ] {

      - Parameters [5] {
        Parameter #0 [ <required> $cas_token ]
        Parameter #1 [ <required> $server_key ]
        Parameter #2 [ <required> $key ]
        Parameter #3 [ <required> $value ]
        Parameter #4 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method add ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
        Parameter #2 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method addByKey ] {

      - Parameters [4] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <required> $value ]
        Parameter #3 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method append ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:memcached> public method appendByKey ] {

      - Parameters [3] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:memcached> public method prepend ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:memcached> public method prependByKey ] {

      - Parameters [3] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:memcached> public method replace ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
        Parameter #2 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method replaceByKey ] {

      - Parameters [4] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <required> $value ]
        Parameter #3 [ <optional> $expiration ]
      }
    }

    Method [ <internal:memcached> public method delete ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $time ]
      }
    }

    Method [ <internal:memcached> public method deleteMulti ] {

      - Parameters [2] {
        Parameter #0 [ <required> $keys ]
        Parameter #1 [ <optional> $time ]
      }
    }

    Method [ <internal:memcached> public method deleteByKey ] {

      - Parameters [3] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> $time ]
      }
    }

    Method [ <internal:memcached> public method deleteMultiByKey ] {

      - Parameters [3] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $keys ]
        Parameter #2 [ <optional> $time ]
      }
    }

    Method [ <internal:memcached> public method increment ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $offset ]
        Parameter #2 [ <optional> $initial_value ]
        Parameter #3 [ <optional> $expiry ]
      }
    }

    Method [ <internal:memcached> public method decrement ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $offset ]
        Parameter #2 [ <optional> $initial_value ]
        Parameter #3 [ <optional> $expiry ]
      }
    }

    Method [ <internal:memcached> public method incrementByKey ] {

      - Parameters [5] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> $offset ]
        Parameter #3 [ <optional> $initial_value ]
        Parameter #4 [ <optional> $expiry ]
      }
    }

    Method [ <internal:memcached> public method decrementByKey ] {

      - Parameters [5] {
        Parameter #0 [ <required> $server_key ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> $offset ]
        Parameter #3 [ <optional> $initial_value ]
        Parameter #4 [ <optional> $expiry ]
      }
    }

    Method [ <internal:memcached> public method addServer ] {

      - Parameters [3] {
        Parameter #0 [ <required> $host ]
        Parameter #1 [ <required> $port ]
        Parameter #2 [ <optional> $weight ]
      }
    }

    Method [ <internal:memcached> public method addServers ] {

      - Parameters [1] {
        Parameter #0 [ <required> $servers ]
      }
    }

    Method [ <internal:memcached> public method getServerList ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method getServerByKey ] {

      - Parameters [1] {
        Parameter #0 [ <required> $server_key ]
      }
    }

    Method [ <internal:memcached> public method resetServerList ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method quit ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method flushBuffers ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method getLastErrorMessage ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method getLastErrorCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method getLastErrorErrno ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method getLastDisconnectedServer ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method getStats ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $type ]
      }
    }

    Method [ <internal:memcached> public method getVersion ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method getAllKeys ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method flush ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $delay ]
      }
    }

    Method [ <internal:memcached> public method getOption ] {

      - Parameters [1] {
        Parameter #0 [ <required> $option ]
      }
    }

    Method [ <internal:memcached> public method setOption ] {

      - Parameters [2] {
        Parameter #0 [ <required> $option ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:memcached> public method setOptions ] {

      - Parameters [1] {
        Parameter #0 [ <required> $options ]
      }
    }

    Method [ <internal:memcached> public method setBucket ] {

      - Parameters [3] {
        Parameter #0 [ <required> $host_map ]
        Parameter #1 [ <required> $forward_map ]
        Parameter #2 [ <required> $replicas ]
      }
    }

    Method [ <internal:memcached> public method setSaslAuthData ] {

      - Parameters [2] {
        Parameter #0 [ <required> $username ]
        Parameter #1 [ <required> $password ]
      }
    }

    Method [ <internal:memcached> public method setEncodingKey ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:memcached> public method isPersistent ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method isPristine ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:memcached> public method checkKey ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }
  }
}
',
);
