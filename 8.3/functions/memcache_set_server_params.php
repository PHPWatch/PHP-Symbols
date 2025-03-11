<?php

return array (
  'type' => 'function',
  'name' => 'memcache_set_server_params',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'memcache_set_server_params',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache_set_server_params function (php.net)',
        'url' => 'https://www.php.net/manual/function.memcache-set-server-params.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'memcache',
  'toString' => 'Function [ <internal:memcache> function memcache_set_server_params ] {

  - Parameters [7] {
    Parameter #0 [ <required> MemcachePool $memcache ]
    Parameter #1 [ <required> string $host ]
    Parameter #2 [ <optional> int $tcp_port = <default> ]
    Parameter #3 [ <optional> float $timeout = <default> ]
    Parameter #4 [ <optional> int $retry_interval = <default> ]
    Parameter #5 [ <optional> bool $status = <default> ]
    Parameter #6 [ <optional> $failure_callback = <default> ]
  }
  - Return [ bool ]
}
',
);
