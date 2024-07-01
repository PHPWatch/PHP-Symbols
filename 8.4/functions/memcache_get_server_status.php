<?php

return array (
  'type' => 'function',
  'name' => 'memcache_get_server_status',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'memcache_get_server_status',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache_get_server_status function (php.net)',
        'url' => 'https://www.php.net/manual/function.memcache-get-server-status.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'memcache',
  'toString' => 'Function [ <internal:memcache> function memcache_get_server_status ] {

  - Parameters [3] {
    Parameter #0 [ <required> MemcachePool $memcache ]
    Parameter #1 [ <required> string $host ]
    Parameter #2 [ <optional> int $tcp_port = <default> ]
  }
  - Return [ int|bool ]
}
',
);
