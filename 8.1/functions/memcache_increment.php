<?php

return array (
  'type' => 'function',
  'name' => 'memcache_increment',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'memcache_increment',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache_increment function (php.net)',
        'url' => 'https://www.php.net/manual/function.memcache-increment.php',
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
  'toString' => 'Function [ <internal:memcache> function memcache_increment ] {

  - Parameters [5] {
    Parameter #0 [ <required> MemcachePool $memcache ]
    Parameter #1 [ <required> array|string $key ]
    Parameter #2 [ <optional> int $value = <default> ]
    Parameter #3 [ <optional> int $defval = <default> ]
    Parameter #4 [ <optional> int $exptime = <default> ]
  }
  - Return [ array|int|bool ]
}
',
);
