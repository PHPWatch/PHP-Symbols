<?php

return array (
  'type' => 'function',
  'name' => 'memcache_delete',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'memcache_delete',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache_delete function (php.net)',
        'url' => 'https://www.php.net/manual/function.memcache-delete.php',
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
  'toString' => 'Function [ <internal:memcache> function memcache_delete ] {

  - Parameters [3] {
    Parameter #0 [ <required> MemcachePool $memcache ]
    Parameter #1 [ <required> $key ]
    Parameter #2 [ <optional> $exptime = <default> ]
  }
  - Return [ array|bool ]
}
',
);
