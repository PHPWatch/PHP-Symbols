<?php

return array (
  'type' => 'function',
  'name' => 'memcache_add_server',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'memcache_add_server',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache_add_server function (php.net)',
        'url' => 'https://www.php.net/manual/function.memcache-add-server.php',
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
  'toString' => 'Function [ <internal:memcache> function memcache_add_server ] {

  - Parameters [10] {
    Parameter #0 [ <required> MemcachePool $memcache ]
    Parameter #1 [ <required> $host ]
    Parameter #2 [ <optional> $port = <default> ]
    Parameter #3 [ <optional> $tcp_port = <default> ]
    Parameter #4 [ <optional> $persistent = <default> ]
    Parameter #5 [ <optional> $weight = <default> ]
    Parameter #6 [ <optional> $timeout = <default> ]
    Parameter #7 [ <optional> $retry_interval = <default> ]
    Parameter #8 [ <optional> $status = <default> ]
    Parameter #9 [ <optional> $failure_callback = <default> ]
  }
  - Return [ bool ]
}
',
);
