<?php

return array (
  'type' => 'function',
  'name' => 'memcache_get_extended_stats',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'memcache_get_extended_stats',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache_get_extended_stats function (php.net)',
        'url' => 'https://www.php.net/manual/function.memcache-get-extended-stats.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionUnionType',
    'nullable' => false,
  ),
  'extension' => 'memcache',
  'toString' => 'Function [ <internal:memcache> function memcache_get_extended_stats ] {

  - Parameters [4] {
    Parameter #0 [ <required> MemcachePool $memcache ]
    Parameter #1 [ <optional> string $type = <default> ]
    Parameter #2 [ <optional> int $slabid = <default> ]
    Parameter #3 [ <optional> int $limit = <default> ]
  }
  - Return [ array|bool ]
}
',
);
