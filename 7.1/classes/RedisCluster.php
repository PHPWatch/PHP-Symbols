<?php

return array (
  'type' => 'class',
  'name' => 'RedisCluster',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'RedisCluster',
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
        'name' => 'RedisCluster class (php.net)',
        'url' => 'https://www.php.net/manual/class.rediscluster.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'REDIS_NOT_FOUND' => 0,
    'REDIS_STRING' => 1,
    'REDIS_SET' => 2,
    'REDIS_LIST' => 3,
    'REDIS_ZSET' => 4,
    'REDIS_HASH' => 5,
    'REDIS_STREAM' => 6,
    'ATOMIC' => 0,
    'MULTI' => 1,
    'OPT_SERIALIZER' => 1,
    'OPT_PREFIX' => 2,
    'OPT_READ_TIMEOUT' => 3,
    'OPT_TCP_KEEPALIVE' => 6,
    'OPT_COMPRESSION' => 7,
    'OPT_REPLY_LITERAL' => 8,
    'OPT_COMPRESSION_LEVEL' => 9,
    'OPT_NULL_MULTIBULK_AS_NULL' => 10,
    'SERIALIZER_NONE' => 0,
    'SERIALIZER_PHP' => 1,
    'SERIALIZER_IGBINARY' => 2,
    'SERIALIZER_JSON' => 4,
    'COMPRESSION_NONE' => 0,
    'COMPRESSION_LZF' => 1,
    'COMPRESSION_ZSTD' => 2,
    'COMPRESSION_ZSTD_MIN' => 1,
    'COMPRESSION_ZSTD_DEFAULT' => 3,
    'COMPRESSION_ZSTD_MAX' => 22,
    'COMPRESSION_LZ4' => 3,
    'OPT_SCAN' => 4,
    'SCAN_RETRY' => 1,
    'SCAN_NORETRY' => 0,
    'SCAN_PREFIX' => 2,
    'SCAN_NOPREFIX' => 3,
    'AFTER' => 'after',
    'BEFORE' => 'before',
    'OPT_SLAVE_FAILOVER' => 5,
    'FAILOVER_NONE' => 0,
    'FAILOVER_ERROR' => 1,
    'FAILOVER_DISTRIBUTE' => 2,
    'FAILOVER_DISTRIBUTE_SLAVES' => 3,
    'OPT_MAX_RETRIES' => 11,
    'OPT_BACKOFF_ALGORITHM' => 12,
    'BACKOFF_ALGORITHM_DEFAULT' => 0,
    'BACKOFF_ALGORITHM_CONSTANT' => 6,
    'BACKOFF_ALGORITHM_UNIFORM' => 5,
    'BACKOFF_ALGORITHM_EXPONENTIAL' => 4,
    'BACKOFF_ALGORITHM_FULL_JITTER' => 2,
    'BACKOFF_ALGORITHM_EQUAL_JITTER' => 3,
    'BACKOFF_ALGORITHM_DECORRELATED_JITTER' => 1,
    'OPT_BACKOFF_BASE' => 13,
    'OPT_BACKOFF_CAP' => 14,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'RedisCluster',
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
        'seeds' => 
        array (
          'position' => 1,
          'name' => 'seeds',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timeout' => 
        array (
          'position' => 2,
          'name' => 'timeout',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'read_timeout' => 
        array (
          'position' => 3,
          'name' => 'read_timeout',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'persistent' => 
        array (
          'position' => 4,
          'name' => 'persistent',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'auth' => 
        array (
          'position' => 5,
          'name' => 'auth',
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
    '_masters' => 
    array (
      'name' => '_masters',
      'class' => 'RedisCluster',
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
    '_prefix' => 
    array (
      'name' => '_prefix',
      'class' => 'RedisCluster',
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
    '_redir' => 
    array (
      'name' => '_redir',
      'class' => 'RedisCluster',
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
    '_serialize' => 
    array (
      'name' => '_serialize',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    '_unserialize' => 
    array (
      'name' => '_unserialize',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    '_compress' => 
    array (
      'name' => '_compress',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    '_uncompress' => 
    array (
      'name' => '_uncompress',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    '_pack' => 
    array (
      'name' => '_pack',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    '_unpack' => 
    array (
      'name' => '_unpack',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
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
    'acl' => 
    array (
      'name' => 'acl',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'subcmd' => 
        array (
          'position' => 1,
          'name' => 'subcmd',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'args' => 
        array (
          'position' => 2,
          'name' => 'args',
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
      'class' => 'RedisCluster',
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
    'bgrewriteaof' => 
    array (
      'name' => 'bgrewriteaof',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
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
    'bgsave' => 
    array (
      'name' => 'bgsave',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
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
    'bitcount' => 
    array (
      'name' => 'bitcount',
      'class' => 'RedisCluster',
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
    'bitop' => 
    array (
      'name' => 'bitop',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'operation' => 
        array (
          'position' => 0,
          'name' => 'operation',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ret_key' => 
        array (
          'position' => 1,
          'name' => 'ret_key',
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
        'other_keys' => 
        array (
          'position' => 3,
          'name' => 'other_keys',
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
    'bitpos' => 
    array (
      'name' => 'bitpos',
      'class' => 'RedisCluster',
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
        'bit' => 
        array (
          'position' => 1,
          'name' => 'bit',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 2,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 3,
          'name' => 'end',
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
    'blpop' => 
    array (
      'name' => 'blpop',
      'class' => 'RedisCluster',
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
        'timeout_or_key' => 
        array (
          'position' => 1,
          'name' => 'timeout_or_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extra_args' => 
        array (
          'position' => 2,
          'name' => 'extra_args',
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
    'brpop' => 
    array (
      'name' => 'brpop',
      'class' => 'RedisCluster',
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
        'timeout_or_key' => 
        array (
          'position' => 1,
          'name' => 'timeout_or_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extra_args' => 
        array (
          'position' => 2,
          'name' => 'extra_args',
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
    'brpoplpush' => 
    array (
      'name' => 'brpoplpush',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'src' => 
        array (
          'position' => 0,
          'name' => 'src',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dst' => 
        array (
          'position' => 1,
          'name' => 'dst',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timeout' => 
        array (
          'position' => 2,
          'name' => 'timeout',
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
    'clearlasterror' => 
    array (
      'name' => 'clearlasterror',
      'class' => 'RedisCluster',
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
    'bzpopmax' => 
    array (
      'name' => 'bzpopmax',
      'class' => 'RedisCluster',
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
        'timeout_or_key' => 
        array (
          'position' => 1,
          'name' => 'timeout_or_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extra_args' => 
        array (
          'position' => 2,
          'name' => 'extra_args',
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
    'bzpopmin' => 
    array (
      'name' => 'bzpopmin',
      'class' => 'RedisCluster',
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
        'timeout_or_key' => 
        array (
          'position' => 1,
          'name' => 'timeout_or_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'extra_args' => 
        array (
          'position' => 2,
          'name' => 'extra_args',
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
    'client' => 
    array (
      'name' => 'client',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arg' => 
        array (
          'position' => 1,
          'name' => 'arg',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_args' => 
        array (
          'position' => 2,
          'name' => 'other_args',
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
    'close' => 
    array (
      'name' => 'close',
      'class' => 'RedisCluster',
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
    'cluster' => 
    array (
      'name' => 'cluster',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arg' => 
        array (
          'position' => 1,
          'name' => 'arg',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_args' => 
        array (
          'position' => 2,
          'name' => 'other_args',
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
    'command' => 
    array (
      'name' => 'command',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'args' => 
        array (
          'position' => 0,
          'name' => 'args',
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
    'config' => 
    array (
      'name' => 'config',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arg' => 
        array (
          'position' => 1,
          'name' => 'arg',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_args' => 
        array (
          'position' => 2,
          'name' => 'other_args',
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
    'dbsize' => 
    array (
      'name' => 'dbsize',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
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
    'decr' => 
    array (
      'name' => 'decr',
      'class' => 'RedisCluster',
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
    'decrby' => 
    array (
      'name' => 'decrby',
      'class' => 'RedisCluster',
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
    'del' => 
    array (
      'name' => 'del',
      'class' => 'RedisCluster',
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
        'other_keys' => 
        array (
          'position' => 1,
          'name' => 'other_keys',
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
    'discard' => 
    array (
      'name' => 'discard',
      'class' => 'RedisCluster',
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
    'dump' => 
    array (
      'name' => 'dump',
      'class' => 'RedisCluster',
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
    'echo' => 
    array (
      'name' => 'echo',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'msg' => 
        array (
          'position' => 0,
          'name' => 'msg',
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
    'eval' => 
    array (
      'name' => 'eval',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'script' => 
        array (
          'position' => 0,
          'name' => 'script',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'args' => 
        array (
          'position' => 1,
          'name' => 'args',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'num_keys' => 
        array (
          'position' => 2,
          'name' => 'num_keys',
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
    'evalsha' => 
    array (
      'name' => 'evalsha',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'script_sha' => 
        array (
          'position' => 0,
          'name' => 'script_sha',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'args' => 
        array (
          'position' => 1,
          'name' => 'args',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'num_keys' => 
        array (
          'position' => 2,
          'name' => 'num_keys',
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
    'exec' => 
    array (
      'name' => 'exec',
      'class' => 'RedisCluster',
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
    'exists' => 
    array (
      'name' => 'exists',
      'class' => 'RedisCluster',
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
    'expire' => 
    array (
      'name' => 'expire',
      'class' => 'RedisCluster',
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
        'timeout' => 
        array (
          'position' => 1,
          'name' => 'timeout',
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
    'expireat' => 
    array (
      'name' => 'expireat',
      'class' => 'RedisCluster',
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
        'timestamp' => 
        array (
          'position' => 1,
          'name' => 'timestamp',
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
    'flushall' => 
    array (
      'name' => 'flushall',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'async' => 
        array (
          'position' => 1,
          'name' => 'async',
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
    'flushdb' => 
    array (
      'name' => 'flushdb',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'async' => 
        array (
          'position' => 1,
          'name' => 'async',
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
    'geoadd' => 
    array (
      'name' => 'geoadd',
      'class' => 'RedisCluster',
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
        'lng' => 
        array (
          'position' => 1,
          'name' => 'lng',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'lat' => 
        array (
          'position' => 2,
          'name' => 'lat',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'member' => 
        array (
          'position' => 3,
          'name' => 'member',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_triples' => 
        array (
          'position' => 4,
          'name' => 'other_triples',
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
    'geodist' => 
    array (
      'name' => 'geodist',
      'class' => 'RedisCluster',
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
        'src' => 
        array (
          'position' => 1,
          'name' => 'src',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dst' => 
        array (
          'position' => 2,
          'name' => 'dst',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'unit' => 
        array (
          'position' => 3,
          'name' => 'unit',
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
    'geohash' => 
    array (
      'name' => 'geohash',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_members' => 
        array (
          'position' => 2,
          'name' => 'other_members',
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
    'geopos' => 
    array (
      'name' => 'geopos',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_members' => 
        array (
          'position' => 2,
          'name' => 'other_members',
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
    'georadius' => 
    array (
      'name' => 'georadius',
      'class' => 'RedisCluster',
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
        'lng' => 
        array (
          'position' => 1,
          'name' => 'lng',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'lan' => 
        array (
          'position' => 2,
          'name' => 'lan',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'radius' => 
        array (
          'position' => 3,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'unit' => 
        array (
          'position' => 4,
          'name' => 'unit',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opts' => 
        array (
          'position' => 5,
          'name' => 'opts',
          'type' => 'array',
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
    'georadius_ro' => 
    array (
      'name' => 'georadius_ro',
      'class' => 'RedisCluster',
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
        'lng' => 
        array (
          'position' => 1,
          'name' => 'lng',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'lan' => 
        array (
          'position' => 2,
          'name' => 'lan',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'radius' => 
        array (
          'position' => 3,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'unit' => 
        array (
          'position' => 4,
          'name' => 'unit',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opts' => 
        array (
          'position' => 5,
          'name' => 'opts',
          'type' => 'array',
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
    'georadiusbymember' => 
    array (
      'name' => 'georadiusbymember',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'radius' => 
        array (
          'position' => 2,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'unit' => 
        array (
          'position' => 3,
          'name' => 'unit',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opts' => 
        array (
          'position' => 4,
          'name' => 'opts',
          'type' => 'array',
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
    'georadiusbymember_ro' => 
    array (
      'name' => 'georadiusbymember_ro',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'radius' => 
        array (
          'position' => 2,
          'name' => 'radius',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'unit' => 
        array (
          'position' => 3,
          'name' => 'unit',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'opts' => 
        array (
          'position' => 4,
          'name' => 'opts',
          'type' => 'array',
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
    'get' => 
    array (
      'name' => 'get',
      'class' => 'RedisCluster',
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
    'getbit' => 
    array (
      'name' => 'getbit',
      'class' => 'RedisCluster',
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
    'getlasterror' => 
    array (
      'name' => 'getlasterror',
      'class' => 'RedisCluster',
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
    'getmode' => 
    array (
      'name' => 'getmode',
      'class' => 'RedisCluster',
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
    'getoption' => 
    array (
      'name' => 'getoption',
      'class' => 'RedisCluster',
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
    'getrange' => 
    array (
      'name' => 'getrange',
      'class' => 'RedisCluster',
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
        'start' => 
        array (
          'position' => 1,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 2,
          'name' => 'end',
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
    'getset' => 
    array (
      'name' => 'getset',
      'class' => 'RedisCluster',
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
    'hdel' => 
    array (
      'name' => 'hdel',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_members' => 
        array (
          'position' => 2,
          'name' => 'other_members',
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
    'hexists' => 
    array (
      'name' => 'hexists',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'hget' => 
    array (
      'name' => 'hget',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'hgetall' => 
    array (
      'name' => 'hgetall',
      'class' => 'RedisCluster',
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
    'hincrby' => 
    array (
      'name' => 'hincrby',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'hincrbyfloat' => 
    array (
      'name' => 'hincrbyfloat',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'hkeys' => 
    array (
      'name' => 'hkeys',
      'class' => 'RedisCluster',
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
    'hlen' => 
    array (
      'name' => 'hlen',
      'class' => 'RedisCluster',
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
    'hmget' => 
    array (
      'name' => 'hmget',
      'class' => 'RedisCluster',
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
        'keys' => 
        array (
          'position' => 1,
          'name' => 'keys',
          'type' => 'array',
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
    'hmset' => 
    array (
      'name' => 'hmset',
      'class' => 'RedisCluster',
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
        'pairs' => 
        array (
          'position' => 1,
          'name' => 'pairs',
          'type' => 'array',
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
    'hscan' => 
    array (
      'name' => 'hscan',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_iterator' => 
        array (
          'position' => 1,
          'name' => 'i_iterator',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_pattern' => 
        array (
          'position' => 2,
          'name' => 'str_pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_count' => 
        array (
          'position' => 3,
          'name' => 'i_count',
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
    'hset' => 
    array (
      'name' => 'hset',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'hsetnx' => 
    array (
      'name' => 'hsetnx',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'hstrlen' => 
    array (
      'name' => 'hstrlen',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'hvals' => 
    array (
      'name' => 'hvals',
      'class' => 'RedisCluster',
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
    'incr' => 
    array (
      'name' => 'incr',
      'class' => 'RedisCluster',
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
    'incrby' => 
    array (
      'name' => 'incrby',
      'class' => 'RedisCluster',
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
    'incrbyfloat' => 
    array (
      'name' => 'incrbyfloat',
      'class' => 'RedisCluster',
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
    'info' => 
    array (
      'name' => 'info',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'option' => 
        array (
          'position' => 1,
          'name' => 'option',
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
    'keys' => 
    array (
      'name' => 'keys',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
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
    'lastsave' => 
    array (
      'name' => 'lastsave',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
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
    'lget' => 
    array (
      'name' => 'lget',
      'class' => 'RedisCluster',
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
        'index' => 
        array (
          'position' => 1,
          'name' => 'index',
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
    'lindex' => 
    array (
      'name' => 'lindex',
      'class' => 'RedisCluster',
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
        'index' => 
        array (
          'position' => 1,
          'name' => 'index',
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
    'linsert' => 
    array (
      'name' => 'linsert',
      'class' => 'RedisCluster',
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
        'position' => 
        array (
          'position' => 1,
          'name' => 'position',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pivot' => 
        array (
          'position' => 2,
          'name' => 'pivot',
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
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'llen' => 
    array (
      'name' => 'llen',
      'class' => 'RedisCluster',
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
    'lpop' => 
    array (
      'name' => 'lpop',
      'class' => 'RedisCluster',
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
    'lpush' => 
    array (
      'name' => 'lpush',
      'class' => 'RedisCluster',
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
    'lpushx' => 
    array (
      'name' => 'lpushx',
      'class' => 'RedisCluster',
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
    'lrange' => 
    array (
      'name' => 'lrange',
      'class' => 'RedisCluster',
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
        'start' => 
        array (
          'position' => 1,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 2,
          'name' => 'end',
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
    'lrem' => 
    array (
      'name' => 'lrem',
      'class' => 'RedisCluster',
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
    'lset' => 
    array (
      'name' => 'lset',
      'class' => 'RedisCluster',
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
        'index' => 
        array (
          'position' => 1,
          'name' => 'index',
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
    'ltrim' => 
    array (
      'name' => 'ltrim',
      'class' => 'RedisCluster',
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
        'start' => 
        array (
          'position' => 1,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'stop' => 
        array (
          'position' => 2,
          'name' => 'stop',
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
    'mget' => 
    array (
      'name' => 'mget',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'keys' => 
        array (
          'position' => 0,
          'name' => 'keys',
          'type' => 'array',
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
    'mset' => 
    array (
      'name' => 'mset',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'pairs' => 
        array (
          'position' => 0,
          'name' => 'pairs',
          'type' => 'array',
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
    'msetnx' => 
    array (
      'name' => 'msetnx',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'pairs' => 
        array (
          'position' => 0,
          'name' => 'pairs',
          'type' => 'array',
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
    'multi' => 
    array (
      'name' => 'multi',
      'class' => 'RedisCluster',
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
    'object' => 
    array (
      'name' => 'object',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'field' => 
        array (
          'position' => 0,
          'name' => 'field',
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
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'persist' => 
    array (
      'name' => 'persist',
      'class' => 'RedisCluster',
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
    'pexpire' => 
    array (
      'name' => 'pexpire',
      'class' => 'RedisCluster',
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
        'timestamp' => 
        array (
          'position' => 1,
          'name' => 'timestamp',
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
    'pexpireat' => 
    array (
      'name' => 'pexpireat',
      'class' => 'RedisCluster',
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
        'timestamp' => 
        array (
          'position' => 1,
          'name' => 'timestamp',
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
    'pfadd' => 
    array (
      'name' => 'pfadd',
      'class' => 'RedisCluster',
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
        'elements' => 
        array (
          'position' => 1,
          'name' => 'elements',
          'type' => 'array',
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
    'pfcount' => 
    array (
      'name' => 'pfcount',
      'class' => 'RedisCluster',
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
    'pfmerge' => 
    array (
      'name' => 'pfmerge',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'dstkey' => 
        array (
          'position' => 0,
          'name' => 'dstkey',
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
          'type' => 'array',
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
    'ping' => 
    array (
      'name' => 'ping',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
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
    'psetex' => 
    array (
      'name' => 'psetex',
      'class' => 'RedisCluster',
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
        'expire' => 
        array (
          'position' => 1,
          'name' => 'expire',
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
    'psubscribe' => 
    array (
      'name' => 'psubscribe',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'patterns' => 
        array (
          'position' => 0,
          'name' => 'patterns',
          'type' => 'array',
          'is_optional' => false,
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
    'pttl' => 
    array (
      'name' => 'pttl',
      'class' => 'RedisCluster',
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
    'publish' => 
    array (
      'name' => 'publish',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'message' => 
        array (
          'position' => 1,
          'name' => 'message',
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
    'pubsub' => 
    array (
      'name' => 'pubsub',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arg' => 
        array (
          'position' => 1,
          'name' => 'arg',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_args' => 
        array (
          'position' => 2,
          'name' => 'other_args',
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
    'punsubscribe' => 
    array (
      'name' => 'punsubscribe',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_patterns' => 
        array (
          'position' => 1,
          'name' => 'other_patterns',
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
    'randomkey' => 
    array (
      'name' => 'randomkey',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
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
    'rawcommand' => 
    array (
      'name' => 'rawcommand',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'cmd' => 
        array (
          'position' => 0,
          'name' => 'cmd',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'args' => 
        array (
          'position' => 1,
          'name' => 'args',
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
    'rename' => 
    array (
      'name' => 'rename',
      'class' => 'RedisCluster',
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
        'newkey' => 
        array (
          'position' => 1,
          'name' => 'newkey',
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
    'renamenx' => 
    array (
      'name' => 'renamenx',
      'class' => 'RedisCluster',
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
        'newkey' => 
        array (
          'position' => 1,
          'name' => 'newkey',
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
    'restore' => 
    array (
      'name' => 'restore',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'ttl' => 
        array (
          'position' => 0,
          'name' => 'ttl',
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
    'role' => 
    array (
      'name' => 'role',
      'class' => 'RedisCluster',
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
    'rpop' => 
    array (
      'name' => 'rpop',
      'class' => 'RedisCluster',
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
    'rpoplpush' => 
    array (
      'name' => 'rpoplpush',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'src' => 
        array (
          'position' => 0,
          'name' => 'src',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dst' => 
        array (
          'position' => 1,
          'name' => 'dst',
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
    'rpush' => 
    array (
      'name' => 'rpush',
      'class' => 'RedisCluster',
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
    'rpushx' => 
    array (
      'name' => 'rpushx',
      'class' => 'RedisCluster',
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
    'sadd' => 
    array (
      'name' => 'sadd',
      'class' => 'RedisCluster',
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
    'saddarray' => 
    array (
      'name' => 'saddarray',
      'class' => 'RedisCluster',
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
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'array',
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
    'save' => 
    array (
      'name' => 'save',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
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
    'scan' => 
    array (
      'name' => 'scan',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'i_iterator' => 
        array (
          'position' => 0,
          'name' => 'i_iterator',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_node' => 
        array (
          'position' => 1,
          'name' => 'str_node',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_pattern' => 
        array (
          'position' => 2,
          'name' => 'str_pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_count' => 
        array (
          'position' => 3,
          'name' => 'i_count',
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
    'scard' => 
    array (
      'name' => 'scard',
      'class' => 'RedisCluster',
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
    'script' => 
    array (
      'name' => 'script',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arg' => 
        array (
          'position' => 1,
          'name' => 'arg',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_args' => 
        array (
          'position' => 2,
          'name' => 'other_args',
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
    'sdiff' => 
    array (
      'name' => 'sdiff',
      'class' => 'RedisCluster',
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
        'other_keys' => 
        array (
          'position' => 1,
          'name' => 'other_keys',
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
    'sdiffstore' => 
    array (
      'name' => 'sdiffstore',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'dst' => 
        array (
          'position' => 0,
          'name' => 'dst',
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
        'other_keys' => 
        array (
          'position' => 2,
          'name' => 'other_keys',
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
    'set' => 
    array (
      'name' => 'set',
      'class' => 'RedisCluster',
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
        'opts' => 
        array (
          'position' => 2,
          'name' => 'opts',
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
    'setbit' => 
    array (
      'name' => 'setbit',
      'class' => 'RedisCluster',
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
    'setex' => 
    array (
      'name' => 'setex',
      'class' => 'RedisCluster',
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
        'expire' => 
        array (
          'position' => 1,
          'name' => 'expire',
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
    'setnx' => 
    array (
      'name' => 'setnx',
      'class' => 'RedisCluster',
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
    'setoption' => 
    array (
      'name' => 'setoption',
      'class' => 'RedisCluster',
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
    'setrange' => 
    array (
      'name' => 'setrange',
      'class' => 'RedisCluster',
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
    'sinter' => 
    array (
      'name' => 'sinter',
      'class' => 'RedisCluster',
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
        'other_keys' => 
        array (
          'position' => 1,
          'name' => 'other_keys',
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
    'sinterstore' => 
    array (
      'name' => 'sinterstore',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'dst' => 
        array (
          'position' => 0,
          'name' => 'dst',
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
        'other_keys' => 
        array (
          'position' => 2,
          'name' => 'other_keys',
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
    'sismember' => 
    array (
      'name' => 'sismember',
      'class' => 'RedisCluster',
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
    'slowlog' => 
    array (
      'name' => 'slowlog',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'key_or_address' => 
        array (
          'position' => 0,
          'name' => 'key_or_address',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arg' => 
        array (
          'position' => 1,
          'name' => 'arg',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_args' => 
        array (
          'position' => 2,
          'name' => 'other_args',
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
    'smembers' => 
    array (
      'name' => 'smembers',
      'class' => 'RedisCluster',
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
    'smove' => 
    array (
      'name' => 'smove',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'src' => 
        array (
          'position' => 0,
          'name' => 'src',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dst' => 
        array (
          'position' => 1,
          'name' => 'dst',
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
    'sort' => 
    array (
      'name' => 'sort',
      'class' => 'RedisCluster',
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
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'array',
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
    'spop' => 
    array (
      'name' => 'spop',
      'class' => 'RedisCluster',
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
    'srandmember' => 
    array (
      'name' => 'srandmember',
      'class' => 'RedisCluster',
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
        'count' => 
        array (
          'position' => 1,
          'name' => 'count',
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
    'srem' => 
    array (
      'name' => 'srem',
      'class' => 'RedisCluster',
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
    'sscan' => 
    array (
      'name' => 'sscan',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_iterator' => 
        array (
          'position' => 1,
          'name' => 'i_iterator',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_pattern' => 
        array (
          'position' => 2,
          'name' => 'str_pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_count' => 
        array (
          'position' => 3,
          'name' => 'i_count',
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
    'strlen' => 
    array (
      'name' => 'strlen',
      'class' => 'RedisCluster',
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
    'subscribe' => 
    array (
      'name' => 'subscribe',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'channels' => 
        array (
          'position' => 0,
          'name' => 'channels',
          'type' => 'array',
          'is_optional' => false,
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
    'sunion' => 
    array (
      'name' => 'sunion',
      'class' => 'RedisCluster',
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
        'other_keys' => 
        array (
          'position' => 1,
          'name' => 'other_keys',
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
    'sunionstore' => 
    array (
      'name' => 'sunionstore',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'dst' => 
        array (
          'position' => 0,
          'name' => 'dst',
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
        'other_keys' => 
        array (
          'position' => 2,
          'name' => 'other_keys',
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
    'time' => 
    array (
      'name' => 'time',
      'class' => 'RedisCluster',
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
    'ttl' => 
    array (
      'name' => 'ttl',
      'class' => 'RedisCluster',
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
    'type' => 
    array (
      'name' => 'type',
      'class' => 'RedisCluster',
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
    'unsubscribe' => 
    array (
      'name' => 'unsubscribe',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'channel' => 
        array (
          'position' => 0,
          'name' => 'channel',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_channels' => 
        array (
          'position' => 1,
          'name' => 'other_channels',
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
    'unlink' => 
    array (
      'name' => 'unlink',
      'class' => 'RedisCluster',
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
        'other_keys' => 
        array (
          'position' => 1,
          'name' => 'other_keys',
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
    'unwatch' => 
    array (
      'name' => 'unwatch',
      'class' => 'RedisCluster',
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
    'watch' => 
    array (
      'name' => 'watch',
      'class' => 'RedisCluster',
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
        'other_keys' => 
        array (
          'position' => 1,
          'name' => 'other_keys',
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
    'xack' => 
    array (
      'name' => 'xack',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_group' => 
        array (
          'position' => 1,
          'name' => 'str_group',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arr_ids' => 
        array (
          'position' => 2,
          'name' => 'arr_ids',
          'type' => 'array',
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
    'xadd' => 
    array (
      'name' => 'xadd',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_id' => 
        array (
          'position' => 1,
          'name' => 'str_id',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arr_fields' => 
        array (
          'position' => 2,
          'name' => 'arr_fields',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_maxlen' => 
        array (
          'position' => 3,
          'name' => 'i_maxlen',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'boo_approximate' => 
        array (
          'position' => 4,
          'name' => 'boo_approximate',
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
    'xclaim' => 
    array (
      'name' => 'xclaim',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_group' => 
        array (
          'position' => 1,
          'name' => 'str_group',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_consumer' => 
        array (
          'position' => 2,
          'name' => 'str_consumer',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_min_idle' => 
        array (
          'position' => 3,
          'name' => 'i_min_idle',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arr_ids' => 
        array (
          'position' => 4,
          'name' => 'arr_ids',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arr_opts' => 
        array (
          'position' => 5,
          'name' => 'arr_opts',
          'type' => 'array',
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
    'xdel' => 
    array (
      'name' => 'xdel',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arr_ids' => 
        array (
          'position' => 1,
          'name' => 'arr_ids',
          'type' => 'array',
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
    'xgroup' => 
    array (
      'name' => 'xgroup',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_operation' => 
        array (
          'position' => 0,
          'name' => 'str_operation',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_key' => 
        array (
          'position' => 1,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_arg1' => 
        array (
          'position' => 2,
          'name' => 'str_arg1',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_arg2' => 
        array (
          'position' => 3,
          'name' => 'str_arg2',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_arg3' => 
        array (
          'position' => 4,
          'name' => 'str_arg3',
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
    'xinfo' => 
    array (
      'name' => 'xinfo',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_cmd' => 
        array (
          'position' => 0,
          'name' => 'str_cmd',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_key' => 
        array (
          'position' => 1,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_group' => 
        array (
          'position' => 2,
          'name' => 'str_group',
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
    'xlen' => 
    array (
      'name' => 'xlen',
      'class' => 'RedisCluster',
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
    'xpending' => 
    array (
      'name' => 'xpending',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_group' => 
        array (
          'position' => 1,
          'name' => 'str_group',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_start' => 
        array (
          'position' => 2,
          'name' => 'str_start',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_end' => 
        array (
          'position' => 3,
          'name' => 'str_end',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_count' => 
        array (
          'position' => 4,
          'name' => 'i_count',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_consumer' => 
        array (
          'position' => 5,
          'name' => 'str_consumer',
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
    'xrange' => 
    array (
      'name' => 'xrange',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_start' => 
        array (
          'position' => 1,
          'name' => 'str_start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_end' => 
        array (
          'position' => 2,
          'name' => 'str_end',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_count' => 
        array (
          'position' => 3,
          'name' => 'i_count',
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
    'xread' => 
    array (
      'name' => 'xread',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'arr_streams' => 
        array (
          'position' => 0,
          'name' => 'arr_streams',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_count' => 
        array (
          'position' => 1,
          'name' => 'i_count',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_block' => 
        array (
          'position' => 2,
          'name' => 'i_block',
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
    'xreadgroup' => 
    array (
      'name' => 'xreadgroup',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_group' => 
        array (
          'position' => 0,
          'name' => 'str_group',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_consumer' => 
        array (
          'position' => 1,
          'name' => 'str_consumer',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arr_streams' => 
        array (
          'position' => 2,
          'name' => 'arr_streams',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_count' => 
        array (
          'position' => 3,
          'name' => 'i_count',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_block' => 
        array (
          'position' => 4,
          'name' => 'i_block',
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
    'xrevrange' => 
    array (
      'name' => 'xrevrange',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_start' => 
        array (
          'position' => 1,
          'name' => 'str_start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_end' => 
        array (
          'position' => 2,
          'name' => 'str_end',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_count' => 
        array (
          'position' => 3,
          'name' => 'i_count',
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
    'xtrim' => 
    array (
      'name' => 'xtrim',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_maxlen' => 
        array (
          'position' => 1,
          'name' => 'i_maxlen',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'boo_approximate' => 
        array (
          'position' => 2,
          'name' => 'boo_approximate',
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
    'zadd' => 
    array (
      'name' => 'zadd',
      'class' => 'RedisCluster',
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
        'score' => 
        array (
          'position' => 1,
          'name' => 'score',
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
        'extra_args' => 
        array (
          'position' => 3,
          'name' => 'extra_args',
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
    'zcard' => 
    array (
      'name' => 'zcard',
      'class' => 'RedisCluster',
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
    'zcount' => 
    array (
      'name' => 'zcount',
      'class' => 'RedisCluster',
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
        'min' => 
        array (
          'position' => 1,
          'name' => 'min',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max' => 
        array (
          'position' => 2,
          'name' => 'max',
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
    'zincrby' => 
    array (
      'name' => 'zincrby',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 2,
          'name' => 'member',
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
    'zinterstore' => 
    array (
      'name' => 'zinterstore',
      'class' => 'RedisCluster',
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
        'keys' => 
        array (
          'position' => 1,
          'name' => 'keys',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'weights' => 
        array (
          'position' => 2,
          'name' => 'weights',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'aggregate' => 
        array (
          'position' => 3,
          'name' => 'aggregate',
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
    'zlexcount' => 
    array (
      'name' => 'zlexcount',
      'class' => 'RedisCluster',
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
        'min' => 
        array (
          'position' => 1,
          'name' => 'min',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max' => 
        array (
          'position' => 2,
          'name' => 'max',
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
    'zpopmax' => 
    array (
      'name' => 'zpopmax',
      'class' => 'RedisCluster',
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
    'zpopmin' => 
    array (
      'name' => 'zpopmin',
      'class' => 'RedisCluster',
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
    'zrange' => 
    array (
      'name' => 'zrange',
      'class' => 'RedisCluster',
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
        'start' => 
        array (
          'position' => 1,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 2,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scores' => 
        array (
          'position' => 3,
          'name' => 'scores',
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
    'zrangebylex' => 
    array (
      'name' => 'zrangebylex',
      'class' => 'RedisCluster',
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
        'min' => 
        array (
          'position' => 1,
          'name' => 'min',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max' => 
        array (
          'position' => 2,
          'name' => 'max',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 3,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'limit' => 
        array (
          'position' => 4,
          'name' => 'limit',
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
    'zrangebyscore' => 
    array (
      'name' => 'zrangebyscore',
      'class' => 'RedisCluster',
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
        'start' => 
        array (
          'position' => 1,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 2,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 3,
          'name' => 'options',
          'type' => 'array',
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
    'zrank' => 
    array (
      'name' => 'zrank',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'zrem' => 
    array (
      'name' => 'zrem',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'other_members' => 
        array (
          'position' => 2,
          'name' => 'other_members',
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
    'zremrangebylex' => 
    array (
      'name' => 'zremrangebylex',
      'class' => 'RedisCluster',
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
        'min' => 
        array (
          'position' => 1,
          'name' => 'min',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max' => 
        array (
          'position' => 2,
          'name' => 'max',
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
    'zremrangebyrank' => 
    array (
      'name' => 'zremrangebyrank',
      'class' => 'RedisCluster',
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
        'min' => 
        array (
          'position' => 1,
          'name' => 'min',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max' => 
        array (
          'position' => 2,
          'name' => 'max',
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
    'zremrangebyscore' => 
    array (
      'name' => 'zremrangebyscore',
      'class' => 'RedisCluster',
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
        'min' => 
        array (
          'position' => 1,
          'name' => 'min',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max' => 
        array (
          'position' => 2,
          'name' => 'max',
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
    'zrevrange' => 
    array (
      'name' => 'zrevrange',
      'class' => 'RedisCluster',
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
        'start' => 
        array (
          'position' => 1,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 2,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scores' => 
        array (
          'position' => 3,
          'name' => 'scores',
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
    'zrevrangebylex' => 
    array (
      'name' => 'zrevrangebylex',
      'class' => 'RedisCluster',
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
        'min' => 
        array (
          'position' => 1,
          'name' => 'min',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'max' => 
        array (
          'position' => 2,
          'name' => 'max',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'offset' => 
        array (
          'position' => 3,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'limit' => 
        array (
          'position' => 4,
          'name' => 'limit',
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
    'zrevrangebyscore' => 
    array (
      'name' => 'zrevrangebyscore',
      'class' => 'RedisCluster',
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
        'start' => 
        array (
          'position' => 1,
          'name' => 'start',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 2,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 3,
          'name' => 'options',
          'type' => 'array',
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
    'zrevrank' => 
    array (
      'name' => 'zrevrank',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'zscan' => 
    array (
      'name' => 'zscan',
      'class' => 'RedisCluster',
      'parameters' => 
      array (
        'str_key' => 
        array (
          'position' => 0,
          'name' => 'str_key',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_iterator' => 
        array (
          'position' => 1,
          'name' => 'i_iterator',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'str_pattern' => 
        array (
          'position' => 2,
          'name' => 'str_pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'i_count' => 
        array (
          'position' => 3,
          'name' => 'i_count',
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
    'zscore' => 
    array (
      'name' => 'zscore',
      'class' => 'RedisCluster',
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
        'member' => 
        array (
          'position' => 1,
          'name' => 'member',
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
    'zunionstore' => 
    array (
      'name' => 'zunionstore',
      'class' => 'RedisCluster',
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
        'keys' => 
        array (
          'position' => 1,
          'name' => 'keys',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'weights' => 
        array (
          'position' => 2,
          'name' => 'weights',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'aggregate' => 
        array (
          'position' => 3,
          'name' => 'aggregate',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:redis> class RedisCluster ] {

  - Constants [51] {
    Constant [ public integer REDIS_NOT_FOUND ] { 0 }
    Constant [ public integer REDIS_STRING ] { 1 }
    Constant [ public integer REDIS_SET ] { 2 }
    Constant [ public integer REDIS_LIST ] { 3 }
    Constant [ public integer REDIS_ZSET ] { 4 }
    Constant [ public integer REDIS_HASH ] { 5 }
    Constant [ public integer REDIS_STREAM ] { 6 }
    Constant [ public integer ATOMIC ] { 0 }
    Constant [ public integer MULTI ] { 1 }
    Constant [ public integer OPT_SERIALIZER ] { 1 }
    Constant [ public integer OPT_PREFIX ] { 2 }
    Constant [ public integer OPT_READ_TIMEOUT ] { 3 }
    Constant [ public integer OPT_TCP_KEEPALIVE ] { 6 }
    Constant [ public integer OPT_COMPRESSION ] { 7 }
    Constant [ public integer OPT_REPLY_LITERAL ] { 8 }
    Constant [ public integer OPT_COMPRESSION_LEVEL ] { 9 }
    Constant [ public integer OPT_NULL_MULTIBULK_AS_NULL ] { 10 }
    Constant [ public integer SERIALIZER_NONE ] { 0 }
    Constant [ public integer SERIALIZER_PHP ] { 1 }
    Constant [ public integer SERIALIZER_IGBINARY ] { 2 }
    Constant [ public integer SERIALIZER_JSON ] { 4 }
    Constant [ public integer COMPRESSION_NONE ] { 0 }
    Constant [ public integer COMPRESSION_LZF ] { 1 }
    Constant [ public integer COMPRESSION_ZSTD ] { 2 }
    Constant [ public integer COMPRESSION_ZSTD_MIN ] { 1 }
    Constant [ public integer COMPRESSION_ZSTD_DEFAULT ] { 3 }
    Constant [ public integer COMPRESSION_ZSTD_MAX ] { 22 }
    Constant [ public integer COMPRESSION_LZ4 ] { 3 }
    Constant [ public integer OPT_SCAN ] { 4 }
    Constant [ public integer SCAN_RETRY ] { 1 }
    Constant [ public integer SCAN_NORETRY ] { 0 }
    Constant [ public integer SCAN_PREFIX ] { 2 }
    Constant [ public integer SCAN_NOPREFIX ] { 3 }
    Constant [ public string AFTER ] { after }
    Constant [ public string BEFORE ] { before }
    Constant [ public integer OPT_SLAVE_FAILOVER ] { 5 }
    Constant [ public integer FAILOVER_NONE ] { 0 }
    Constant [ public integer FAILOVER_ERROR ] { 1 }
    Constant [ public integer FAILOVER_DISTRIBUTE ] { 2 }
    Constant [ public integer FAILOVER_DISTRIBUTE_SLAVES ] { 3 }
    Constant [ public integer OPT_MAX_RETRIES ] { 11 }
    Constant [ public integer OPT_BACKOFF_ALGORITHM ] { 12 }
    Constant [ public integer BACKOFF_ALGORITHM_DEFAULT ] { 0 }
    Constant [ public integer BACKOFF_ALGORITHM_CONSTANT ] { 6 }
    Constant [ public integer BACKOFF_ALGORITHM_UNIFORM ] { 5 }
    Constant [ public integer BACKOFF_ALGORITHM_EXPONENTIAL ] { 4 }
    Constant [ public integer BACKOFF_ALGORITHM_FULL_JITTER ] { 2 }
    Constant [ public integer BACKOFF_ALGORITHM_EQUAL_JITTER ] { 3 }
    Constant [ public integer BACKOFF_ALGORITHM_DECORRELATED_JITTER ] { 1 }
    Constant [ public integer OPT_BACKOFF_BASE ] { 13 }
    Constant [ public integer OPT_BACKOFF_CAP ] { 14 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [190] {
    Method [ <internal:redis, ctor> public method __construct ] {

      - Parameters [6] {
        Parameter #0 [ <required> $name ]
        Parameter #1 [ <optional> array $seeds ]
        Parameter #2 [ <optional> $timeout ]
        Parameter #3 [ <optional> $read_timeout ]
        Parameter #4 [ <optional> $persistent ]
        Parameter #5 [ <optional> $auth ]
      }
    }

    Method [ <internal:redis> public method _masters ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method _prefix ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method _redir ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method _serialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method _unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method _compress ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method _uncompress ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method _pack ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method _unpack ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method acl ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <required> $subcmd ]
        Parameter #2 [ <optional> ...$args ]
      }
    }

    Method [ <internal:redis> public method append ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method bgrewriteaof ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key_or_address ]
      }
    }

    Method [ <internal:redis> public method bgsave ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key_or_address ]
      }
    }

    Method [ <internal:redis> public method bitcount ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method bitop ] {

      - Parameters [4] {
        Parameter #0 [ <required> $operation ]
        Parameter #1 [ <required> $ret_key ]
        Parameter #2 [ <required> $key ]
        Parameter #3 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method bitpos ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $bit ]
        Parameter #2 [ <optional> $start ]
        Parameter #3 [ <optional> $end ]
      }
    }

    Method [ <internal:redis> public method blpop ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout_or_key ]
        Parameter #2 [ <optional> ...$extra_args ]
      }
    }

    Method [ <internal:redis> public method brpop ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout_or_key ]
        Parameter #2 [ <optional> ...$extra_args ]
      }
    }

    Method [ <internal:redis> public method brpoplpush ] {

      - Parameters [3] {
        Parameter #0 [ <required> $src ]
        Parameter #1 [ <required> $dst ]
        Parameter #2 [ <required> $timeout ]
      }
    }

    Method [ <internal:redis> public method clearlasterror ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method bzpopmax ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout_or_key ]
        Parameter #2 [ <optional> ...$extra_args ]
      }
    }

    Method [ <internal:redis> public method bzpopmin ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout_or_key ]
        Parameter #2 [ <optional> ...$extra_args ]
      }
    }

    Method [ <internal:redis> public method client ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <optional> $arg ]
        Parameter #2 [ <optional> ...$other_args ]
      }
    }

    Method [ <internal:redis> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method cluster ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <optional> $arg ]
        Parameter #2 [ <optional> ...$other_args ]
      }
    }

    Method [ <internal:redis> public method command ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ...$args ]
      }
    }

    Method [ <internal:redis> public method config ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <optional> $arg ]
        Parameter #2 [ <optional> ...$other_args ]
      }
    }

    Method [ <internal:redis> public method dbsize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key_or_address ]
      }
    }

    Method [ <internal:redis> public method decr ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method decrby ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method del ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method discard ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method dump ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method echo ] {

      - Parameters [1] {
        Parameter #0 [ <required> $msg ]
      }
    }

    Method [ <internal:redis> public method eval ] {

      - Parameters [3] {
        Parameter #0 [ <required> $script ]
        Parameter #1 [ <optional> $args ]
        Parameter #2 [ <optional> $num_keys ]
      }
    }

    Method [ <internal:redis> public method evalsha ] {

      - Parameters [3] {
        Parameter #0 [ <required> $script_sha ]
        Parameter #1 [ <optional> $args ]
        Parameter #2 [ <optional> $num_keys ]
      }
    }

    Method [ <internal:redis> public method exec ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method exists ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method expire ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout ]
      }
    }

    Method [ <internal:redis> public method expireat ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timestamp ]
      }
    }

    Method [ <internal:redis> public method flushall ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <optional> $async ]
      }
    }

    Method [ <internal:redis> public method flushdb ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <optional> $async ]
      }
    }

    Method [ <internal:redis> public method geoadd ] {

      - Parameters [5] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $lng ]
        Parameter #2 [ <required> $lat ]
        Parameter #3 [ <required> $member ]
        Parameter #4 [ <optional> ...$other_triples ]
      }
    }

    Method [ <internal:redis> public method geodist ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $src ]
        Parameter #2 [ <required> $dst ]
        Parameter #3 [ <optional> $unit ]
      }
    }

    Method [ <internal:redis> public method geohash ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method geopos ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method georadius ] {

      - Parameters [6] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $lng ]
        Parameter #2 [ <required> $lan ]
        Parameter #3 [ <required> $radius ]
        Parameter #4 [ <required> $unit ]
        Parameter #5 [ <optional> array $opts ]
      }
    }

    Method [ <internal:redis> public method georadius_ro ] {

      - Parameters [6] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $lng ]
        Parameter #2 [ <required> $lan ]
        Parameter #3 [ <required> $radius ]
        Parameter #4 [ <required> $unit ]
        Parameter #5 [ <optional> array $opts ]
      }
    }

    Method [ <internal:redis> public method georadiusbymember ] {

      - Parameters [5] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $radius ]
        Parameter #3 [ <required> $unit ]
        Parameter #4 [ <optional> array $opts ]
      }
    }

    Method [ <internal:redis> public method georadiusbymember_ro ] {

      - Parameters [5] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $radius ]
        Parameter #3 [ <required> $unit ]
        Parameter #4 [ <optional> array $opts ]
      }
    }

    Method [ <internal:redis> public method get ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method getbit ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $offset ]
      }
    }

    Method [ <internal:redis> public method getlasterror ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getmode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getoption ] {

      - Parameters [1] {
        Parameter #0 [ <required> $option ]
      }
    }

    Method [ <internal:redis> public method getrange ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
      }
    }

    Method [ <internal:redis> public method getset ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method hdel ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method hexists ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method hget ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method hgetall ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method hincrby ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method hincrbyfloat ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method hkeys ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method hlen ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method hmget ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $keys ]
      }
    }

    Method [ <internal:redis> public method hmset ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $pairs ]
      }
    }

    Method [ <internal:redis> public method hscan ] {

      - Parameters [4] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> &$i_iterator ]
        Parameter #2 [ <optional> $str_pattern ]
        Parameter #3 [ <optional> $i_count ]
      }
    }

    Method [ <internal:redis> public method hset ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method hsetnx ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method hstrlen ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method hvals ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method incr ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method incrby ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method incrbyfloat ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method info ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <optional> $option ]
      }
    }

    Method [ <internal:redis> public method keys ] {

      - Parameters [1] {
        Parameter #0 [ <required> $pattern ]
      }
    }

    Method [ <internal:redis> public method lastsave ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key_or_address ]
      }
    }

    Method [ <internal:redis> public method lget ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $index ]
      }
    }

    Method [ <internal:redis> public method lindex ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $index ]
      }
    }

    Method [ <internal:redis> public method linsert ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $position ]
        Parameter #2 [ <required> $pivot ]
        Parameter #3 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method llen ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method lpop ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method lpush ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method lpushx ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method lrange ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
      }
    }

    Method [ <internal:redis> public method lrem ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method lset ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $index ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method ltrim ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $stop ]
      }
    }

    Method [ <internal:redis> public method mget ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $keys ]
      }
    }

    Method [ <internal:redis> public method mset ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $pairs ]
      }
    }

    Method [ <internal:redis> public method msetnx ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $pairs ]
      }
    }

    Method [ <internal:redis> public method multi ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method object ] {

      - Parameters [2] {
        Parameter #0 [ <required> $field ]
        Parameter #1 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method persist ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method pexpire ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timestamp ]
      }
    }

    Method [ <internal:redis> public method pexpireat ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timestamp ]
      }
    }

    Method [ <internal:redis> public method pfadd ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $elements ]
      }
    }

    Method [ <internal:redis> public method pfcount ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method pfmerge ] {

      - Parameters [2] {
        Parameter #0 [ <required> $dstkey ]
        Parameter #1 [ <required> array $keys ]
      }
    }

    Method [ <internal:redis> public method ping ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key_or_address ]
      }
    }

    Method [ <internal:redis> public method psetex ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $expire ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method psubscribe ] {

      - Parameters [2] {
        Parameter #0 [ <required> array $patterns ]
        Parameter #1 [ <required> $callback ]
      }
    }

    Method [ <internal:redis> public method pttl ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method publish ] {

      - Parameters [2] {
        Parameter #0 [ <required> $channel ]
        Parameter #1 [ <required> $message ]
      }
    }

    Method [ <internal:redis> public method pubsub ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <optional> $arg ]
        Parameter #2 [ <optional> ...$other_args ]
      }
    }

    Method [ <internal:redis> public method punsubscribe ] {

      - Parameters [2] {
        Parameter #0 [ <required> $pattern ]
        Parameter #1 [ <optional> ...$other_patterns ]
      }
    }

    Method [ <internal:redis> public method randomkey ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key_or_address ]
      }
    }

    Method [ <internal:redis> public method rawcommand ] {

      - Parameters [2] {
        Parameter #0 [ <required> $cmd ]
        Parameter #1 [ <optional> ...$args ]
      }
    }

    Method [ <internal:redis> public method rename ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $newkey ]
      }
    }

    Method [ <internal:redis> public method renamenx ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $newkey ]
      }
    }

    Method [ <internal:redis> public method restore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $ttl ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method role ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method rpop ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method rpoplpush ] {

      - Parameters [2] {
        Parameter #0 [ <required> $src ]
        Parameter #1 [ <required> $dst ]
      }
    }

    Method [ <internal:redis> public method rpush ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method rpushx ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method sadd ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method saddarray ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $options ]
      }
    }

    Method [ <internal:redis> public method save ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key_or_address ]
      }
    }

    Method [ <internal:redis> public method scan ] {

      - Parameters [4] {
        Parameter #0 [ <required> &$i_iterator ]
        Parameter #1 [ <required> $str_node ]
        Parameter #2 [ <optional> $str_pattern ]
        Parameter #3 [ <optional> $i_count ]
      }
    }

    Method [ <internal:redis> public method scard ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method script ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <optional> $arg ]
        Parameter #2 [ <optional> ...$other_args ]
      }
    }

    Method [ <internal:redis> public method sdiff ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method sdiffstore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $dst ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method set ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
        Parameter #2 [ <optional> $opts ]
      }
    }

    Method [ <internal:redis> public method setbit ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $offset ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method setex ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $expire ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method setnx ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method setoption ] {

      - Parameters [2] {
        Parameter #0 [ <required> $option ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method setrange ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $offset ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method sinter ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method sinterstore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $dst ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method sismember ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method slowlog ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key_or_address ]
        Parameter #1 [ <optional> $arg ]
        Parameter #2 [ <optional> ...$other_args ]
      }
    }

    Method [ <internal:redis> public method smembers ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method smove ] {

      - Parameters [3] {
        Parameter #0 [ <required> $src ]
        Parameter #1 [ <required> $dst ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method sort ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> array $options ]
      }
    }

    Method [ <internal:redis> public method spop ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method srandmember ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $count ]
      }
    }

    Method [ <internal:redis> public method srem ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method sscan ] {

      - Parameters [4] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> &$i_iterator ]
        Parameter #2 [ <optional> $str_pattern ]
        Parameter #3 [ <optional> $i_count ]
      }
    }

    Method [ <internal:redis> public method strlen ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method subscribe ] {

      - Parameters [2] {
        Parameter #0 [ <required> array $channels ]
        Parameter #1 [ <required> $callback ]
      }
    }

    Method [ <internal:redis> public method sunion ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method sunionstore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $dst ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method time ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method ttl ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method type ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method unsubscribe ] {

      - Parameters [2] {
        Parameter #0 [ <required> $channel ]
        Parameter #1 [ <optional> ...$other_channels ]
      }
    }

    Method [ <internal:redis> public method unlink ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method unwatch ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method watch ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method xack ] {

      - Parameters [3] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> $str_group ]
        Parameter #2 [ <required> array $arr_ids ]
      }
    }

    Method [ <internal:redis> public method xadd ] {

      - Parameters [5] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> $str_id ]
        Parameter #2 [ <required> array $arr_fields ]
        Parameter #3 [ <optional> $i_maxlen ]
        Parameter #4 [ <optional> $boo_approximate ]
      }
    }

    Method [ <internal:redis> public method xclaim ] {

      - Parameters [6] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> $str_group ]
        Parameter #2 [ <required> $str_consumer ]
        Parameter #3 [ <required> $i_min_idle ]
        Parameter #4 [ <required> array $arr_ids ]
        Parameter #5 [ <optional> array $arr_opts ]
      }
    }

    Method [ <internal:redis> public method xdel ] {

      - Parameters [2] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> array $arr_ids ]
      }
    }

    Method [ <internal:redis> public method xgroup ] {

      - Parameters [5] {
        Parameter #0 [ <required> $str_operation ]
        Parameter #1 [ <optional> $str_key ]
        Parameter #2 [ <optional> $str_arg1 ]
        Parameter #3 [ <optional> $str_arg2 ]
        Parameter #4 [ <optional> $str_arg3 ]
      }
    }

    Method [ <internal:redis> public method xinfo ] {

      - Parameters [3] {
        Parameter #0 [ <required> $str_cmd ]
        Parameter #1 [ <optional> $str_key ]
        Parameter #2 [ <optional> $str_group ]
      }
    }

    Method [ <internal:redis> public method xlen ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method xpending ] {

      - Parameters [6] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> $str_group ]
        Parameter #2 [ <optional> $str_start ]
        Parameter #3 [ <optional> $str_end ]
        Parameter #4 [ <optional> $i_count ]
        Parameter #5 [ <optional> $str_consumer ]
      }
    }

    Method [ <internal:redis> public method xrange ] {

      - Parameters [4] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> $str_start ]
        Parameter #2 [ <required> $str_end ]
        Parameter #3 [ <optional> $i_count ]
      }
    }

    Method [ <internal:redis> public method xread ] {

      - Parameters [3] {
        Parameter #0 [ <required> array $arr_streams ]
        Parameter #1 [ <optional> $i_count ]
        Parameter #2 [ <optional> $i_block ]
      }
    }

    Method [ <internal:redis> public method xreadgroup ] {

      - Parameters [5] {
        Parameter #0 [ <required> $str_group ]
        Parameter #1 [ <required> $str_consumer ]
        Parameter #2 [ <required> array $arr_streams ]
        Parameter #3 [ <optional> $i_count ]
        Parameter #4 [ <optional> $i_block ]
      }
    }

    Method [ <internal:redis> public method xrevrange ] {

      - Parameters [4] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> $str_start ]
        Parameter #2 [ <required> $str_end ]
        Parameter #3 [ <optional> $i_count ]
      }
    }

    Method [ <internal:redis> public method xtrim ] {

      - Parameters [3] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> $i_maxlen ]
        Parameter #2 [ <optional> $boo_approximate ]
      }
    }

    Method [ <internal:redis> public method zadd ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $score ]
        Parameter #2 [ <required> $value ]
        Parameter #3 [ <optional> ...$extra_args ]
      }
    }

    Method [ <internal:redis> public method zcard ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method zcount ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zincrby ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
        Parameter #2 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method zinterstore ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $keys ]
        Parameter #2 [ <optional> array or NULL $weights ]
        Parameter #3 [ <optional> $aggregate ]
      }
    }

    Method [ <internal:redis> public method zlexcount ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zpopmax ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method zpopmin ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method zrange ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
        Parameter #3 [ <optional> $scores ]
      }
    }

    Method [ <internal:redis> public method zrangebylex ] {

      - Parameters [5] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
        Parameter #3 [ <optional> $offset ]
        Parameter #4 [ <optional> $limit ]
      }
    }

    Method [ <internal:redis> public method zrangebyscore ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
        Parameter #3 [ <optional> array $options ]
      }
    }

    Method [ <internal:redis> public method zrank ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method zrem ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method zremrangebylex ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zremrangebyrank ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zremrangebyscore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zrevrange ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
        Parameter #3 [ <optional> $scores ]
      }
    }

    Method [ <internal:redis> public method zrevrangebylex ] {

      - Parameters [5] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
        Parameter #3 [ <optional> $offset ]
        Parameter #4 [ <optional> $limit ]
      }
    }

    Method [ <internal:redis> public method zrevrangebyscore ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
        Parameter #3 [ <optional> array $options ]
      }
    }

    Method [ <internal:redis> public method zrevrank ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method zscan ] {

      - Parameters [4] {
        Parameter #0 [ <required> $str_key ]
        Parameter #1 [ <required> &$i_iterator ]
        Parameter #2 [ <optional> $str_pattern ]
        Parameter #3 [ <optional> $i_count ]
      }
    }

    Method [ <internal:redis> public method zscore ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method zunionstore ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $keys ]
        Parameter #2 [ <optional> array or NULL $weights ]
        Parameter #3 [ <optional> $aggregate ]
      }
    }
  }
}
',
);
