<?php

return array (
  'type' => 'class',
  'name' => 'Redis',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Redis',
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
        'name' => 'Redis class (php.net)',
        'url' => 'https://www.php.net/manual/class.redis.php',
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
    'PIPELINE' => 2,
    'ATOMIC' => 0,
    'MULTI' => 1,
    'OPT_SERIALIZER' => 1,
    'OPT_PREFIX' => 2,
    'OPT_READ_TIMEOUT' => 3,
    'OPT_TCP_KEEPALIVE' => 6,
    'OPT_COMPRESSION' => 7,
    'SERIALIZER_NONE' => 0,
    'SERIALIZER_PHP' => 1,
    'SERIALIZER_IGBINARY' => 2,
    'COMPRESSION_NONE' => 0,
    'COMPRESSION_LZF' => 1,
    'OPT_SCAN' => 4,
    'SCAN_RETRY' => 1,
    'SCAN_NORETRY' => 0,
    'AFTER' => 'after',
    'BEFORE' => 'before',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Redis',
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
    '__destruct' => 
    array (
      'name' => '__destruct',
      'class' => 'Redis',
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
    '_prefix' => 
    array (
      'name' => '_prefix',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '_serialize' => 
    array (
      'name' => '_serialize',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '_unserialize' => 
    array (
      'name' => '_unserialize',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'append' => 
    array (
      'name' => 'append',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'auth' => 
    array (
      'name' => 'auth',
      'class' => 'Redis',
      'parameters' => 
      array (
        'password' => 
        array (
          'position' => 0,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bgSave' => 
    array (
      'name' => 'bgSave',
      'class' => 'Redis',
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
    'bgrewriteaof' => 
    array (
      'name' => 'bgrewriteaof',
      'class' => 'Redis',
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
    'bitcount' => 
    array (
      'name' => 'bitcount',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bitop' => 
    array (
      'name' => 'bitop',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bitpos' => 
    array (
      'name' => 'bitpos',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'blPop' => 
    array (
      'name' => 'blPop',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'brPop' => 
    array (
      'name' => 'brPop',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'brpoplpush' => 
    array (
      'name' => 'brpoplpush',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bzPopMax' => 
    array (
      'name' => 'bzPopMax',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bzPopMin' => 
    array (
      'name' => 'bzPopMin',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'clearLastError' => 
    array (
      'name' => 'clearLastError',
      'class' => 'Redis',
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
    'client' => 
    array (
      'name' => 'client',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'close' => 
    array (
      'name' => 'close',
      'class' => 'Redis',
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
    'command' => 
    array (
      'name' => 'command',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'config' => 
    array (
      'name' => 'config',
      'class' => 'Redis',
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
    'connect' => 
    array (
      'name' => 'connect',
      'class' => 'Redis',
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
        'retry_interval' => 
        array (
          'position' => 3,
          'name' => 'retry_interval',
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
    'dbSize' => 
    array (
      'name' => 'dbSize',
      'class' => 'Redis',
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
    'debug' => 
    array (
      'name' => 'debug',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'decr' => 
    array (
      'name' => 'decr',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'decrBy' => 
    array (
      'name' => 'decrBy',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'delete' => 
    array (
      'name' => 'delete',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'discard' => 
    array (
      'name' => 'discard',
      'class' => 'Redis',
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
    'dump' => 
    array (
      'name' => 'dump',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'echo' => 
    array (
      'name' => 'echo',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'eval' => 
    array (
      'name' => 'eval',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'evalsha' => 
    array (
      'name' => 'evalsha',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'exec' => 
    array (
      'name' => 'exec',
      'class' => 'Redis',
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
    'exists' => 
    array (
      'name' => 'exists',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'expireAt' => 
    array (
      'name' => 'expireAt',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flushAll' => 
    array (
      'name' => 'flushAll',
      'class' => 'Redis',
      'parameters' => 
      array (
        'async' => 
        array (
          'position' => 0,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flushDB' => 
    array (
      'name' => 'flushDB',
      'class' => 'Redis',
      'parameters' => 
      array (
        'async' => 
        array (
          'position' => 0,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'geoadd' => 
    array (
      'name' => 'geoadd',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'geodist' => 
    array (
      'name' => 'geodist',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'geohash' => 
    array (
      'name' => 'geohash',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'geopos' => 
    array (
      'name' => 'geopos',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'georadius' => 
    array (
      'name' => 'georadius',
      'class' => 'Redis',
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
    'georadius_ro' => 
    array (
      'name' => 'georadius_ro',
      'class' => 'Redis',
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
    'georadiusbymember' => 
    array (
      'name' => 'georadiusbymember',
      'class' => 'Redis',
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
    'georadiusbymember_ro' => 
    array (
      'name' => 'georadiusbymember_ro',
      'class' => 'Redis',
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
    'get' => 
    array (
      'name' => 'get',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAuth' => 
    array (
      'name' => 'getAuth',
      'class' => 'Redis',
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
    'getBit' => 
    array (
      'name' => 'getBit',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getDBNum' => 
    array (
      'name' => 'getDBNum',
      'class' => 'Redis',
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
    'getHost' => 
    array (
      'name' => 'getHost',
      'class' => 'Redis',
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
    'getKeys' => 
    array (
      'name' => 'getKeys',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLastError' => 
    array (
      'name' => 'getLastError',
      'class' => 'Redis',
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
    'getMode' => 
    array (
      'name' => 'getMode',
      'class' => 'Redis',
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
    'getMultiple' => 
    array (
      'name' => 'getMultiple',
      'class' => 'Redis',
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
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getOption' => 
    array (
      'name' => 'getOption',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPersistentID' => 
    array (
      'name' => 'getPersistentID',
      'class' => 'Redis',
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
    'getPort' => 
    array (
      'name' => 'getPort',
      'class' => 'Redis',
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
    'getRange' => 
    array (
      'name' => 'getRange',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getReadTimeout' => 
    array (
      'name' => 'getReadTimeout',
      'class' => 'Redis',
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
    'getSet' => 
    array (
      'name' => 'getSet',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTimeout' => 
    array (
      'name' => 'getTimeout',
      'class' => 'Redis',
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
    'hDel' => 
    array (
      'name' => 'hDel',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hExists' => 
    array (
      'name' => 'hExists',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hGet' => 
    array (
      'name' => 'hGet',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hGetAll' => 
    array (
      'name' => 'hGetAll',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hIncrBy' => 
    array (
      'name' => 'hIncrBy',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hIncrByFloat' => 
    array (
      'name' => 'hIncrByFloat',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hKeys' => 
    array (
      'name' => 'hKeys',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hLen' => 
    array (
      'name' => 'hLen',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hMget' => 
    array (
      'name' => 'hMget',
      'class' => 'Redis',
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
    'hMset' => 
    array (
      'name' => 'hMset',
      'class' => 'Redis',
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
    'hSet' => 
    array (
      'name' => 'hSet',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hSetNx' => 
    array (
      'name' => 'hSetNx',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hStrLen' => 
    array (
      'name' => 'hStrLen',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hVals' => 
    array (
      'name' => 'hVals',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hscan' => 
    array (
      'name' => 'hscan',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'incr' => 
    array (
      'name' => 'incr',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'incrBy' => 
    array (
      'name' => 'incrBy',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'incrByFloat' => 
    array (
      'name' => 'incrByFloat',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'info' => 
    array (
      'name' => 'info',
      'class' => 'Redis',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isConnected' => 
    array (
      'name' => 'isConnected',
      'class' => 'Redis',
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
    'lGet' => 
    array (
      'name' => 'lGet',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lGetRange' => 
    array (
      'name' => 'lGetRange',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lInsert' => 
    array (
      'name' => 'lInsert',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lPop' => 
    array (
      'name' => 'lPop',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lPush' => 
    array (
      'name' => 'lPush',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lPushx' => 
    array (
      'name' => 'lPushx',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lRemove' => 
    array (
      'name' => 'lRemove',
      'class' => 'Redis',
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
        'count' => 
        array (
          'position' => 2,
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
    'lSet' => 
    array (
      'name' => 'lSet',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lSize' => 
    array (
      'name' => 'lSize',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lastSave' => 
    array (
      'name' => 'lastSave',
      'class' => 'Redis',
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
    'listTrim' => 
    array (
      'name' => 'listTrim',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'migrate' => 
    array (
      'name' => 'migrate',
      'class' => 'Redis',
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
        'db' => 
        array (
          'position' => 3,
          'name' => 'db',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timeout' => 
        array (
          'position' => 4,
          'name' => 'timeout',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'copy' => 
        array (
          'position' => 5,
          'name' => 'copy',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'replace' => 
        array (
          'position' => 6,
          'name' => 'replace',
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
    'move' => 
    array (
      'name' => 'move',
      'class' => 'Redis',
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
        'dbindex' => 
        array (
          'position' => 1,
          'name' => 'dbindex',
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
    'mset' => 
    array (
      'name' => 'mset',
      'class' => 'Redis',
      'parameters' => 
      array (
        'pairs' => 
        array (
          'position' => 0,
          'name' => 'pairs',
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
    'msetnx' => 
    array (
      'name' => 'msetnx',
      'class' => 'Redis',
      'parameters' => 
      array (
        'pairs' => 
        array (
          'position' => 0,
          'name' => 'pairs',
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
    'multi' => 
    array (
      'name' => 'multi',
      'class' => 'Redis',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
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
    'object' => 
    array (
      'name' => 'object',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pconnect' => 
    array (
      'name' => 'pconnect',
      'class' => 'Redis',
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
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'persist' => 
    array (
      'name' => 'persist',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pexpire' => 
    array (
      'name' => 'pexpire',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pexpireAt' => 
    array (
      'name' => 'pexpireAt',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pfadd' => 
    array (
      'name' => 'pfadd',
      'class' => 'Redis',
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
    'pfcount' => 
    array (
      'name' => 'pfcount',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pfmerge' => 
    array (
      'name' => 'pfmerge',
      'class' => 'Redis',
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
    'ping' => 
    array (
      'name' => 'ping',
      'class' => 'Redis',
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
    'pipeline' => 
    array (
      'name' => 'pipeline',
      'class' => 'Redis',
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
    'psetex' => 
    array (
      'name' => 'psetex',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'psubscribe' => 
    array (
      'name' => 'psubscribe',
      'class' => 'Redis',
      'parameters' => 
      array (
        'patterns' => 
        array (
          'position' => 0,
          'name' => 'patterns',
          'type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pttl' => 
    array (
      'name' => 'pttl',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'publish' => 
    array (
      'name' => 'publish',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pubsub' => 
    array (
      'name' => 'pubsub',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'punsubscribe' => 
    array (
      'name' => 'punsubscribe',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rPop' => 
    array (
      'name' => 'rPop',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rPush' => 
    array (
      'name' => 'rPush',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rPushx' => 
    array (
      'name' => 'rPushx',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'randomKey' => 
    array (
      'name' => 'randomKey',
      'class' => 'Redis',
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
    'rawcommand' => 
    array (
      'name' => 'rawcommand',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'renameKey' => 
    array (
      'name' => 'renameKey',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'renameNx' => 
    array (
      'name' => 'renameNx',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'restore' => 
    array (
      'name' => 'restore',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'role' => 
    array (
      'name' => 'role',
      'class' => 'Redis',
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
    'rpoplpush' => 
    array (
      'name' => 'rpoplpush',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sAdd' => 
    array (
      'name' => 'sAdd',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sAddArray' => 
    array (
      'name' => 'sAddArray',
      'class' => 'Redis',
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
    'sContains' => 
    array (
      'name' => 'sContains',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sDiff' => 
    array (
      'name' => 'sDiff',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sDiffStore' => 
    array (
      'name' => 'sDiffStore',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sInter' => 
    array (
      'name' => 'sInter',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sInterStore' => 
    array (
      'name' => 'sInterStore',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sMembers' => 
    array (
      'name' => 'sMembers',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sMove' => 
    array (
      'name' => 'sMove',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sPop' => 
    array (
      'name' => 'sPop',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sRandMember' => 
    array (
      'name' => 'sRandMember',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sRemove' => 
    array (
      'name' => 'sRemove',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sSize' => 
    array (
      'name' => 'sSize',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sUnion' => 
    array (
      'name' => 'sUnion',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sUnionStore' => 
    array (
      'name' => 'sUnionStore',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'save' => 
    array (
      'name' => 'save',
      'class' => 'Redis',
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
    'scan' => 
    array (
      'name' => 'scan',
      'class' => 'Redis',
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
        'str_pattern' => 
        array (
          'position' => 1,
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
          'position' => 2,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'script' => 
    array (
      'name' => 'script',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'select' => 
    array (
      'name' => 'select',
      'class' => 'Redis',
      'parameters' => 
      array (
        'dbindex' => 
        array (
          'position' => 0,
          'name' => 'dbindex',
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
    'set' => 
    array (
      'name' => 'set',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setBit' => 
    array (
      'name' => 'setBit',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setOption' => 
    array (
      'name' => 'setOption',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setRange' => 
    array (
      'name' => 'setRange',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setTimeout' => 
    array (
      'name' => 'setTimeout',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setex' => 
    array (
      'name' => 'setex',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setnx' => 
    array (
      'name' => 'setnx',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'slaveof' => 
    array (
      'name' => 'slaveof',
      'class' => 'Redis',
      'parameters' => 
      array (
        'host' => 
        array (
          'position' => 0,
          'name' => 'host',
          'type' => NULL,
          'is_optional' => true,
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
    'slowlog' => 
    array (
      'name' => 'slowlog',
      'class' => 'Redis',
      'parameters' => 
      array (
        'arg' => 
        array (
          'position' => 0,
          'name' => 'arg',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sort' => 
    array (
      'name' => 'sort',
      'class' => 'Redis',
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
    'sortAsc' => 
    array (
      'name' => 'sortAsc',
      'class' => 'Redis',
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
        'pattern' => 
        array (
          'position' => 1,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'get' => 
        array (
          'position' => 2,
          'name' => 'get',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 3,
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
          'position' => 4,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'getList' => 
        array (
          'position' => 5,
          'name' => 'getList',
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
    'sortAscAlpha' => 
    array (
      'name' => 'sortAscAlpha',
      'class' => 'Redis',
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
        'pattern' => 
        array (
          'position' => 1,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'get' => 
        array (
          'position' => 2,
          'name' => 'get',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 3,
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
          'position' => 4,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'getList' => 
        array (
          'position' => 5,
          'name' => 'getList',
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
    'sortDesc' => 
    array (
      'name' => 'sortDesc',
      'class' => 'Redis',
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
        'pattern' => 
        array (
          'position' => 1,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'get' => 
        array (
          'position' => 2,
          'name' => 'get',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 3,
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
          'position' => 4,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'getList' => 
        array (
          'position' => 5,
          'name' => 'getList',
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
    'sortDescAlpha' => 
    array (
      'name' => 'sortDescAlpha',
      'class' => 'Redis',
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
        'pattern' => 
        array (
          'position' => 1,
          'name' => 'pattern',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'get' => 
        array (
          'position' => 2,
          'name' => 'get',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'start' => 
        array (
          'position' => 3,
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
          'position' => 4,
          'name' => 'end',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'getList' => 
        array (
          'position' => 5,
          'name' => 'getList',
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
    'sscan' => 
    array (
      'name' => 'sscan',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'strlen' => 
    array (
      'name' => 'strlen',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'subscribe' => 
    array (
      'name' => 'subscribe',
      'class' => 'Redis',
      'parameters' => 
      array (
        'channels' => 
        array (
          'position' => 0,
          'name' => 'channels',
          'type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'swapdb' => 
    array (
      'name' => 'swapdb',
      'class' => 'Redis',
      'parameters' => 
      array (
        'srcdb' => 
        array (
          'position' => 0,
          'name' => 'srcdb',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dstdb' => 
        array (
          'position' => 1,
          'name' => 'dstdb',
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
    'time' => 
    array (
      'name' => 'time',
      'class' => 'Redis',
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
    'ttl' => 
    array (
      'name' => 'ttl',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unlink' => 
    array (
      'name' => 'unlink',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unsubscribe' => 
    array (
      'name' => 'unsubscribe',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unwatch' => 
    array (
      'name' => 'unwatch',
      'class' => 'Redis',
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
    'wait' => 
    array (
      'name' => 'wait',
      'class' => 'Redis',
      'parameters' => 
      array (
        'numslaves' => 
        array (
          'position' => 0,
          'name' => 'numslaves',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'watch' => 
    array (
      'name' => 'watch',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xack' => 
    array (
      'name' => 'xack',
      'class' => 'Redis',
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
    'xadd' => 
    array (
      'name' => 'xadd',
      'class' => 'Redis',
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
          'type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xclaim' => 
    array (
      'name' => 'xclaim',
      'class' => 'Redis',
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
          'type' => NULL,
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
    'xdel' => 
    array (
      'name' => 'xdel',
      'class' => 'Redis',
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
    'xgroup' => 
    array (
      'name' => 'xgroup',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xinfo' => 
    array (
      'name' => 'xinfo',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xlen' => 
    array (
      'name' => 'xlen',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xpending' => 
    array (
      'name' => 'xpending',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xrange' => 
    array (
      'name' => 'xrange',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xread' => 
    array (
      'name' => 'xread',
      'class' => 'Redis',
      'parameters' => 
      array (
        'arr_streams' => 
        array (
          'position' => 0,
          'name' => 'arr_streams',
          'type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xreadgroup' => 
    array (
      'name' => 'xreadgroup',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xrevrange' => 
    array (
      'name' => 'xrevrange',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'xtrim' => 
    array (
      'name' => 'xtrim',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zAdd' => 
    array (
      'name' => 'zAdd',
      'class' => 'Redis',
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
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zCard' => 
    array (
      'name' => 'zCard',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zCount' => 
    array (
      'name' => 'zCount',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zDelete' => 
    array (
      'name' => 'zDelete',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zDeleteRangeByRank' => 
    array (
      'name' => 'zDeleteRangeByRank',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zDeleteRangeByScore' => 
    array (
      'name' => 'zDeleteRangeByScore',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zIncrBy' => 
    array (
      'name' => 'zIncrBy',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zInter' => 
    array (
      'name' => 'zInter',
      'class' => 'Redis',
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
          'type' => NULL,
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
          'type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zLexCount' => 
    array (
      'name' => 'zLexCount',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRange' => 
    array (
      'name' => 'zRange',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRangeByLex' => 
    array (
      'name' => 'zRangeByLex',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRangeByScore' => 
    array (
      'name' => 'zRangeByScore',
      'class' => 'Redis',
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
    'zRank' => 
    array (
      'name' => 'zRank',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRemRangeByLex' => 
    array (
      'name' => 'zRemRangeByLex',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRevRange' => 
    array (
      'name' => 'zRevRange',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRevRangeByLex' => 
    array (
      'name' => 'zRevRangeByLex',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRevRangeByScore' => 
    array (
      'name' => 'zRevRangeByScore',
      'class' => 'Redis',
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
    'zRevRank' => 
    array (
      'name' => 'zRevRank',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zScore' => 
    array (
      'name' => 'zScore',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zUnion' => 
    array (
      'name' => 'zUnion',
      'class' => 'Redis',
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
          'type' => NULL,
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
          'type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zscan' => 
    array (
      'name' => 'zscan',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zPopMax' => 
    array (
      'name' => 'zPopMax',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zPopMin' => 
    array (
      'name' => 'zPopMin',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'del' => 
    array (
      'name' => 'del',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'evaluate' => 
    array (
      'name' => 'evaluate',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'evaluateSha' => 
    array (
      'name' => 'evaluateSha',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'expire' => 
    array (
      'name' => 'expire',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'keys' => 
    array (
      'name' => 'keys',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lLen' => 
    array (
      'name' => 'lLen',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lindex' => 
    array (
      'name' => 'lindex',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lrange' => 
    array (
      'name' => 'lrange',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'lrem' => 
    array (
      'name' => 'lrem',
      'class' => 'Redis',
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
        'count' => 
        array (
          'position' => 2,
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
    'ltrim' => 
    array (
      'name' => 'ltrim',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mget' => 
    array (
      'name' => 'mget',
      'class' => 'Redis',
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
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'open' => 
    array (
      'name' => 'open',
      'class' => 'Redis',
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
        'retry_interval' => 
        array (
          'position' => 3,
          'name' => 'retry_interval',
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
    'popen' => 
    array (
      'name' => 'popen',
      'class' => 'Redis',
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
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rename' => 
    array (
      'name' => 'rename',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sGetMembers' => 
    array (
      'name' => 'sGetMembers',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'scard' => 
    array (
      'name' => 'scard',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sendEcho' => 
    array (
      'name' => 'sendEcho',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sismember' => 
    array (
      'name' => 'sismember',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'srem' => 
    array (
      'name' => 'srem',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'substr' => 
    array (
      'name' => 'substr',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRem' => 
    array (
      'name' => 'zRem',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRemRangeByRank' => 
    array (
      'name' => 'zRemRangeByRank',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRemRangeByScore' => 
    array (
      'name' => 'zRemRangeByScore',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRemove' => 
    array (
      'name' => 'zRemove',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zRemoveRangeByScore' => 
    array (
      'name' => 'zRemoveRangeByScore',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zReverseRange' => 
    array (
      'name' => 'zReverseRange',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zSize' => 
    array (
      'name' => 'zSize',
      'class' => 'Redis',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zinterstore' => 
    array (
      'name' => 'zinterstore',
      'class' => 'Redis',
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
          'type' => NULL,
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
          'type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zunionstore' => 
    array (
      'name' => 'zunionstore',
      'class' => 'Redis',
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
          'type' => NULL,
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
          'type' => NULL,
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
  'toString' => 'Class [ <internal:redis> class Redis ] {

  - Constants [24] {
    Constant [ integer REDIS_NOT_FOUND ] { 0 }
    Constant [ integer REDIS_STRING ] { 1 }
    Constant [ integer REDIS_SET ] { 2 }
    Constant [ integer REDIS_LIST ] { 3 }
    Constant [ integer REDIS_ZSET ] { 4 }
    Constant [ integer REDIS_HASH ] { 5 }
    Constant [ integer PIPELINE ] { 2 }
    Constant [ integer ATOMIC ] { 0 }
    Constant [ integer MULTI ] { 1 }
    Constant [ integer OPT_SERIALIZER ] { 1 }
    Constant [ integer OPT_PREFIX ] { 2 }
    Constant [ integer OPT_READ_TIMEOUT ] { 3 }
    Constant [ integer OPT_TCP_KEEPALIVE ] { 6 }
    Constant [ integer OPT_COMPRESSION ] { 7 }
    Constant [ integer SERIALIZER_NONE ] { 0 }
    Constant [ integer SERIALIZER_PHP ] { 1 }
    Constant [ integer SERIALIZER_IGBINARY ] { 2 }
    Constant [ integer COMPRESSION_NONE ] { 0 }
    Constant [ integer COMPRESSION_LZF ] { 1 }
    Constant [ integer OPT_SCAN ] { 4 }
    Constant [ integer SCAN_RETRY ] { 1 }
    Constant [ integer SCAN_NORETRY ] { 0 }
    Constant [ string AFTER ] { after }
    Constant [ string BEFORE ] { before }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [234] {
    Method [ <internal:redis, ctor> public method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis, dtor> public method __destruct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method _prefix ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
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

    Method [ <internal:redis> public method append ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method auth ] {

      - Parameters [1] {
        Parameter #0 [ <required> $password ]
      }
    }

    Method [ <internal:redis> public method bgSave ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method bgrewriteaof ] {

      - Parameters [0] {
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

    Method [ <internal:redis> public method blPop ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout_or_key ]
        Parameter #2 [ <optional> ...$extra_args ]
      }
    }

    Method [ <internal:redis> public method brPop ] {

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

    Method [ <internal:redis> public method bzPopMax ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout_or_key ]
        Parameter #2 [ <optional> ...$extra_args ]
      }
    }

    Method [ <internal:redis> public method bzPopMin ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout_or_key ]
        Parameter #2 [ <optional> ...$extra_args ]
      }
    }

    Method [ <internal:redis> public method clearLastError ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method client ] {

      - Parameters [2] {
        Parameter #0 [ <required> $cmd ]
        Parameter #1 [ <optional> ...$args ]
      }
    }

    Method [ <internal:redis> public method close ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method command ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ...$args ]
      }
    }

    Method [ <internal:redis> public method config ] {

      - Parameters [3] {
        Parameter #0 [ <required> $cmd ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> $value ]
      }
    }

    Method [ <internal:redis> public method connect ] {

      - Parameters [4] {
        Parameter #0 [ <required> $host ]
        Parameter #1 [ <optional> $port ]
        Parameter #2 [ <optional> $timeout ]
        Parameter #3 [ <optional> $retry_interval ]
      }
    }

    Method [ <internal:redis> public method dbSize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method debug ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method decr ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method decrBy ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method delete ] {

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

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method expireAt ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timestamp ]
      }
    }

    Method [ <internal:redis> public method flushAll ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $async ]
      }
    }

    Method [ <internal:redis> public method flushDB ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $async ]
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

    Method [ <internal:redis> public method getAuth ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getBit ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $offset ]
      }
    }

    Method [ <internal:redis> public method getDBNum ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getHost ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getKeys ] {

      - Parameters [1] {
        Parameter #0 [ <required> $pattern ]
      }
    }

    Method [ <internal:redis> public method getLastError ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getMode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getMultiple ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $keys ]
      }
    }

    Method [ <internal:redis> public method getOption ] {

      - Parameters [1] {
        Parameter #0 [ <required> $option ]
      }
    }

    Method [ <internal:redis> public method getPersistentID ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getPort ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getRange ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
      }
    }

    Method [ <internal:redis> public method getReadTimeout ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method getSet ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method getTimeout ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method hDel ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method hExists ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method hGet ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method hGetAll ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method hIncrBy ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method hIncrByFloat ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method hKeys ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method hLen ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method hMget ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $keys ]
      }
    }

    Method [ <internal:redis> public method hMset ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $pairs ]
      }
    }

    Method [ <internal:redis> public method hSet ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method hSetNx ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method hStrLen ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method hVals ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
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

    Method [ <internal:redis> public method incr ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method incrBy ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method incrByFloat ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method info ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $option ]
      }
    }

    Method [ <internal:redis> public method isConnected ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method lGet ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $index ]
      }
    }

    Method [ <internal:redis> public method lGetRange ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
      }
    }

    Method [ <internal:redis> public method lInsert ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $position ]
        Parameter #2 [ <required> $pivot ]
        Parameter #3 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method lPop ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method lPush ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method lPushx ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method lRemove ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
        Parameter #2 [ <required> $count ]
      }
    }

    Method [ <internal:redis> public method lSet ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $index ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method lSize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method lastSave ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method listTrim ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $stop ]
      }
    }

    Method [ <internal:redis> public method migrate ] {

      - Parameters [7] {
        Parameter #0 [ <required> $host ]
        Parameter #1 [ <required> $port ]
        Parameter #2 [ <required> $key ]
        Parameter #3 [ <required> $db ]
        Parameter #4 [ <required> $timeout ]
        Parameter #5 [ <optional> $copy ]
        Parameter #6 [ <optional> $replace ]
      }
    }

    Method [ <internal:redis> public method move ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $dbindex ]
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

      - Parameters [1] {
        Parameter #0 [ <optional> $mode ]
      }
    }

    Method [ <internal:redis> public method object ] {

      - Parameters [2] {
        Parameter #0 [ <required> $field ]
        Parameter #1 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method pconnect ] {

      - Parameters [3] {
        Parameter #0 [ <required> $host ]
        Parameter #1 [ <optional> $port ]
        Parameter #2 [ <optional> $timeout ]
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

    Method [ <internal:redis> public method pexpireAt ] {

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

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method pipeline ] {

      - Parameters [0] {
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

      - Parameters [2] {
        Parameter #0 [ <required> $cmd ]
        Parameter #1 [ <optional> ...$args ]
      }
    }

    Method [ <internal:redis> public method punsubscribe ] {

      - Parameters [2] {
        Parameter #0 [ <required> $pattern ]
        Parameter #1 [ <optional> ...$other_patterns ]
      }
    }

    Method [ <internal:redis> public method rPop ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method rPush ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method rPushx ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method randomKey ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method rawcommand ] {

      - Parameters [2] {
        Parameter #0 [ <required> $cmd ]
        Parameter #1 [ <optional> ...$args ]
      }
    }

    Method [ <internal:redis> public method renameKey ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $newkey ]
      }
    }

    Method [ <internal:redis> public method renameNx ] {

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

    Method [ <internal:redis> public method rpoplpush ] {

      - Parameters [2] {
        Parameter #0 [ <required> $src ]
        Parameter #1 [ <required> $dst ]
      }
    }

    Method [ <internal:redis> public method sAdd ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method sAddArray ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $options ]
      }
    }

    Method [ <internal:redis> public method sContains ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method sDiff ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method sDiffStore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $dst ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method sInter ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method sInterStore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $dst ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method sMembers ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method sMove ] {

      - Parameters [3] {
        Parameter #0 [ <required> $src ]
        Parameter #1 [ <required> $dst ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method sPop ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method sRandMember ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $count ]
      }
    }

    Method [ <internal:redis> public method sRemove ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method sSize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method sUnion ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method sUnionStore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $dst ]
        Parameter #1 [ <required> $key ]
        Parameter #2 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method save ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method scan ] {

      - Parameters [3] {
        Parameter #0 [ <required> &$i_iterator ]
        Parameter #1 [ <optional> $str_pattern ]
        Parameter #2 [ <optional> $i_count ]
      }
    }

    Method [ <internal:redis> public method script ] {

      - Parameters [2] {
        Parameter #0 [ <required> $cmd ]
        Parameter #1 [ <optional> ...$args ]
      }
    }

    Method [ <internal:redis> public method select ] {

      - Parameters [1] {
        Parameter #0 [ <required> $dbindex ]
      }
    }

    Method [ <internal:redis> public method set ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
        Parameter #2 [ <optional> $opts ]
      }
    }

    Method [ <internal:redis> public method setBit ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $offset ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method setOption ] {

      - Parameters [2] {
        Parameter #0 [ <required> $option ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method setRange ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $offset ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method setTimeout ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout ]
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

    Method [ <internal:redis> public method slaveof ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $host ]
        Parameter #1 [ <optional> $port ]
      }
    }

    Method [ <internal:redis> public method slowlog ] {

      - Parameters [2] {
        Parameter #0 [ <required> $arg ]
        Parameter #1 [ <optional> $option ]
      }
    }

    Method [ <internal:redis> public method sort ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> array $options ]
      }
    }

    Method [ <internal:redis> public method sortAsc ] {

      - Parameters [6] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $pattern ]
        Parameter #2 [ <optional> $get ]
        Parameter #3 [ <optional> $start ]
        Parameter #4 [ <optional> $end ]
        Parameter #5 [ <optional> $getList ]
      }
    }

    Method [ <internal:redis> public method sortAscAlpha ] {

      - Parameters [6] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $pattern ]
        Parameter #2 [ <optional> $get ]
        Parameter #3 [ <optional> $start ]
        Parameter #4 [ <optional> $end ]
        Parameter #5 [ <optional> $getList ]
      }
    }

    Method [ <internal:redis> public method sortDesc ] {

      - Parameters [6] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $pattern ]
        Parameter #2 [ <optional> $get ]
        Parameter #3 [ <optional> $start ]
        Parameter #4 [ <optional> $end ]
        Parameter #5 [ <optional> $getList ]
      }
    }

    Method [ <internal:redis> public method sortDescAlpha ] {

      - Parameters [6] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $pattern ]
        Parameter #2 [ <optional> $get ]
        Parameter #3 [ <optional> $start ]
        Parameter #4 [ <optional> $end ]
        Parameter #5 [ <optional> $getList ]
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

    Method [ <internal:redis> public method swapdb ] {

      - Parameters [2] {
        Parameter #0 [ <required> $srcdb ]
        Parameter #1 [ <required> $dstdb ]
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

    Method [ <internal:redis> public method unlink ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method unsubscribe ] {

      - Parameters [2] {
        Parameter #0 [ <required> $channel ]
        Parameter #1 [ <optional> ...$other_channels ]
      }
    }

    Method [ <internal:redis> public method unwatch ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:redis> public method wait ] {

      - Parameters [2] {
        Parameter #0 [ <required> $numslaves ]
        Parameter #1 [ <required> $timeout ]
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

    Method [ <internal:redis> public method zAdd ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $score ]
        Parameter #2 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method zCard ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method zCount ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zDelete ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method zDeleteRangeByRank ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
      }
    }

    Method [ <internal:redis> public method zDeleteRangeByScore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zIncrBy ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
        Parameter #2 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method zInter ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $keys ]
        Parameter #2 [ <optional> array or NULL $weights ]
        Parameter #3 [ <optional> $aggregate ]
      }
    }

    Method [ <internal:redis> public method zLexCount ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zRange ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
        Parameter #3 [ <optional> $scores ]
      }
    }

    Method [ <internal:redis> public method zRangeByLex ] {

      - Parameters [5] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
        Parameter #3 [ <optional> $offset ]
        Parameter #4 [ <optional> $limit ]
      }
    }

    Method [ <internal:redis> public method zRangeByScore ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
        Parameter #3 [ <optional> array $options ]
      }
    }

    Method [ <internal:redis> public method zRank ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method zRemRangeByLex ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zRevRange ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
        Parameter #3 [ <optional> $scores ]
      }
    }

    Method [ <internal:redis> public method zRevRangeByLex ] {

      - Parameters [5] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
        Parameter #3 [ <optional> $offset ]
        Parameter #4 [ <optional> $limit ]
      }
    }

    Method [ <internal:redis> public method zRevRangeByScore ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
        Parameter #3 [ <optional> array $options ]
      }
    }

    Method [ <internal:redis> public method zRevRank ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method zScore ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
      }
    }

    Method [ <internal:redis> public method zUnion ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> array $keys ]
        Parameter #2 [ <optional> array or NULL $weights ]
        Parameter #3 [ <optional> $aggregate ]
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

    Method [ <internal:redis> public method zPopMax ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method zPopMin ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method del ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> ...$other_keys ]
      }
    }

    Method [ <internal:redis> public method evaluate ] {

      - Parameters [3] {
        Parameter #0 [ <required> $script ]
        Parameter #1 [ <optional> $args ]
        Parameter #2 [ <optional> $num_keys ]
      }
    }

    Method [ <internal:redis> public method evaluateSha ] {

      - Parameters [3] {
        Parameter #0 [ <required> $script_sha ]
        Parameter #1 [ <optional> $args ]
        Parameter #2 [ <optional> $num_keys ]
      }
    }

    Method [ <internal:redis> public method expire ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $timeout ]
      }
    }

    Method [ <internal:redis> public method keys ] {

      - Parameters [1] {
        Parameter #0 [ <required> $pattern ]
      }
    }

    Method [ <internal:redis> public method lLen ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method lindex ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $index ]
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

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
        Parameter #2 [ <required> $count ]
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

    Method [ <internal:redis> public method open ] {

      - Parameters [4] {
        Parameter #0 [ <required> $host ]
        Parameter #1 [ <optional> $port ]
        Parameter #2 [ <optional> $timeout ]
        Parameter #3 [ <optional> $retry_interval ]
      }
    }

    Method [ <internal:redis> public method popen ] {

      - Parameters [3] {
        Parameter #0 [ <required> $host ]
        Parameter #1 [ <optional> $port ]
        Parameter #2 [ <optional> $timeout ]
      }
    }

    Method [ <internal:redis> public method rename ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $newkey ]
      }
    }

    Method [ <internal:redis> public method sGetMembers ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method scard ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:redis> public method sendEcho ] {

      - Parameters [1] {
        Parameter #0 [ <required> $msg ]
      }
    }

    Method [ <internal:redis> public method sismember ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:redis> public method srem ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method substr ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
      }
    }

    Method [ <internal:redis> public method zRem ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method zRemRangeByRank ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zRemRangeByScore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zRemove ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $member ]
        Parameter #2 [ <optional> ...$other_members ]
      }
    }

    Method [ <internal:redis> public method zRemoveRangeByScore ] {

      - Parameters [3] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $min ]
        Parameter #2 [ <required> $max ]
      }
    }

    Method [ <internal:redis> public method zReverseRange ] {

      - Parameters [4] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $start ]
        Parameter #2 [ <required> $end ]
        Parameter #3 [ <optional> $scores ]
      }
    }

    Method [ <internal:redis> public method zSize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
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
