<?php

return array (
  'type' => 'function',
  'name' => 'memcache_decrement',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'memcache_decrement',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache_decrement function (php.net)',
        'url' => 'https://www.php.net/manual/function.memcache-decrement.php',
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
  'toString' => 'Function [ <internal:memcache> function memcache_decrement ] {

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
