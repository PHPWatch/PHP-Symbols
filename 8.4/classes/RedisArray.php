<?php

return array (
  'type' => 'class',
  'name' => 'RedisArray',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'RedisArray',
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
        'name' => 'RedisArray class (php.net)',
        'url' => 'https://www.php.net/manual/class.redisarray.php',
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
  ),
  'methods' => 
  array (
    '__call' => 
    array (
      'name' => '__call',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'function_name' => 
        array (
          'position' => 0,
          'name' => 'function_name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arguments' => 
        array (
          'position' => 1,
          'name' => 'arguments',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'name_or_hosts' => 
        array (
          'position' => 0,
          'name' => 'name_or_hosts',
          'type' => 'array|string',
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
          'type' => '?array',
          'is_optional' => true,
          'has_default_value' => true,
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
    '_continuum' => 
    array (
      'name' => '_continuum',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '_distributor' => 
    array (
      'name' => '_distributor',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => 'callable|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '_function' => 
    array (
      'name' => '_function',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => 'callable|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '_hosts' => 
    array (
      'name' => '_hosts',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '_instance' => 
    array (
      'name' => '_instance',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'host' => 
        array (
          'position' => 0,
          'name' => 'host',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Redis|bool|null',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '_rehash' => 
    array (
      'name' => '_rehash',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'fn' => 
        array (
          'position' => 0,
          'name' => 'fn',
          'type' => '?callable',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '_target' => 
    array (
      'name' => '_target',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string|bool|null',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bgsave' => 
    array (
      'name' => 'bgsave',
      'class' => 'RedisArray',
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
    'del' => 
    array (
      'name' => 'del',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'array|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'otherkeys' => 
        array (
          'position' => 1,
          'name' => 'otherkeys',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'discard' => 
    array (
      'name' => 'discard',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => '?bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'exec' => 
    array (
      'name' => 'exec',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => '?bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flushall' => 
    array (
      'name' => 'flushall',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flushdb' => 
    array (
      'name' => 'flushdb',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getOption' => 
    array (
      'name' => 'getOption',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'opt' => 
        array (
          'position' => 0,
          'name' => 'opt',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hscan' => 
    array (
      'name' => 'hscan',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'iterator' => 
        array (
          'position' => 1,
          'name' => 'iterator',
          'type' => '?int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 2,
          'name' => 'pattern',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'count' => 
        array (
          'position' => 3,
          'name' => 'count',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'info' => 
    array (
      'name' => 'info',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'keys' => 
    array (
      'name' => 'keys',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'pattern' => 
        array (
          'position' => 0,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mget' => 
    array (
      'name' => 'mget',
      'class' => 'RedisArray',
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
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mset' => 
    array (
      'name' => 'mset',
      'class' => 'RedisArray',
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
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'multi' => 
    array (
      'name' => 'multi',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'host' => 
        array (
          'position' => 0,
          'name' => 'host',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mode' => 
        array (
          'position' => 1,
          'name' => 'mode',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'RedisArray|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'ping' => 
    array (
      'name' => 'ping',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'save' => 
    array (
      'name' => 'save',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'scan' => 
    array (
      'name' => 'scan',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => '?int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'node' => 
        array (
          'position' => 1,
          'name' => 'node',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 2,
          'name' => 'pattern',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'count' => 
        array (
          'position' => 3,
          'name' => 'count',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'select' => 
    array (
      'name' => 'select',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setOption' => 
    array (
      'name' => 'setOption',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'opt' => 
        array (
          'position' => 0,
          'name' => 'opt',
          'type' => 'int',
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
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sscan' => 
    array (
      'name' => 'sscan',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'iterator' => 
        array (
          'position' => 1,
          'name' => 'iterator',
          'type' => '?int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 2,
          'name' => 'pattern',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'count' => 
        array (
          'position' => 3,
          'name' => 'count',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unlink' => 
    array (
      'name' => 'unlink',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'array|string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'otherkeys' => 
        array (
          'position' => 1,
          'name' => 'otherkeys',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int|bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unwatch' => 
    array (
      'name' => 'unwatch',
      'class' => 'RedisArray',
      'parameters' => 
      array (
      ),
      'return_type' => '?bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'zscan' => 
    array (
      'name' => 'zscan',
      'class' => 'RedisArray',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'iterator' => 
        array (
          'position' => 1,
          'name' => 'iterator',
          'type' => '?int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 2,
          'name' => 'pattern',
          'type' => '?string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'count' => 
        array (
          'position' => 3,
          'name' => 'count',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array|bool',
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
  'toString' => 'Class [ <internal:redis> class RedisArray ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [31] {
    Method [ <internal:redis> public method __call ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $function_name ]
        Parameter #1 [ <required> array $arguments ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:redis, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> array|string $name_or_hosts ]
        Parameter #1 [ <optional> ?array $options = null ]
      }
    }

    Method [ <internal:redis> public method _continuum ] {

      - Parameters [0] {
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method _distributor ] {

      - Parameters [0] {
      }
      - Return [ callable|bool ]
    }

    Method [ <internal:redis> public method _function ] {

      - Parameters [0] {
      }
      - Return [ callable|bool ]
    }

    Method [ <internal:redis> public method _hosts ] {

      - Parameters [0] {
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method _instance ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $host ]
      }
      - Return [ Redis|bool|null ]
    }

    Method [ <internal:redis> public method _rehash ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?callable $fn = null ]
      }
      - Return [ ?bool ]
    }

    Method [ <internal:redis> public method _target ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $key ]
      }
      - Return [ string|bool|null ]
    }

    Method [ <internal:redis> public method bgsave ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:redis> public method del ] {

      - Parameters [2] {
        Parameter #0 [ <required> array|string $key ]
        Parameter #1 [ <optional> string ...$otherkeys ]
      }
      - Return [ int|bool ]
    }

    Method [ <internal:redis> public method discard ] {

      - Parameters [0] {
      }
      - Return [ ?bool ]
    }

    Method [ <internal:redis> public method exec ] {

      - Parameters [0] {
      }
      - Return [ ?bool ]
    }

    Method [ <internal:redis> public method flushall ] {

      - Parameters [0] {
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method flushdb ] {

      - Parameters [0] {
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method getOption ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $opt ]
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method hscan ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $key ]
        Parameter #1 [ <required> ?int &$iterator ]
        Parameter #2 [ <optional> ?string $pattern = null ]
        Parameter #3 [ <optional> int $count = 0 ]
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method info ] {

      - Parameters [0] {
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method keys ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $pattern ]
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method mget ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $keys ]
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method mset ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $pairs ]
      }
      - Return [ bool ]
    }

    Method [ <internal:redis> public method multi ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $host ]
        Parameter #1 [ <optional> ?int $mode = null ]
      }
      - Return [ RedisArray|bool ]
    }

    Method [ <internal:redis> public method ping ] {

      - Parameters [0] {
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method save ] {

      - Parameters [0] {
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method scan ] {

      - Parameters [4] {
        Parameter #0 [ <required> ?int &$iterator ]
        Parameter #1 [ <required> string $node ]
        Parameter #2 [ <optional> ?string $pattern = null ]
        Parameter #3 [ <optional> int $count = 0 ]
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method select ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method setOption ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $opt ]
        Parameter #1 [ <required> string $value ]
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method sscan ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $key ]
        Parameter #1 [ <required> ?int &$iterator ]
        Parameter #2 [ <optional> ?string $pattern = null ]
        Parameter #3 [ <optional> int $count = 0 ]
      }
      - Return [ array|bool ]
    }

    Method [ <internal:redis> public method unlink ] {

      - Parameters [2] {
        Parameter #0 [ <required> array|string $key ]
        Parameter #1 [ <optional> string ...$otherkeys ]
      }
      - Return [ int|bool ]
    }

    Method [ <internal:redis> public method unwatch ] {

      - Parameters [0] {
      }
      - Return [ ?bool ]
    }

    Method [ <internal:redis> public method zscan ] {

      - Parameters [4] {
        Parameter #0 [ <required> string $key ]
        Parameter #1 [ <required> ?int &$iterator ]
        Parameter #2 [ <optional> ?string $pattern = null ]
        Parameter #3 [ <optional> int $count = 0 ]
      }
      - Return [ array|bool ]
    }
  }
}
',
);
