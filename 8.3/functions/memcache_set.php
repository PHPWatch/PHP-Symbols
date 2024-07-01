<?php

return array (
  'type' => 'function',
  'name' => 'memcache_set',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'memcache_set',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache_set function (php.net)',
        'url' => 'https://www.php.net/manual/function.memcache-set.php',
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
    \ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'memcache',
  'toString' => 'Function [ <internal:memcache> function memcache_set ] {

  - Parameters [6] {
    Parameter #0 [ <required> MemcachePool $memcache ]
    Parameter #1 [ <required> array|string $key ]
    Parameter #2 [ <optional> mixed $value = <default> ]
    Parameter #3 [ <optional> int $flags = <default> ]
    Parameter #4 [ <optional> int $exptime = <default> ]
    Parameter #5 [ <optional> int $cas = <default> ]
  }
  - Return [ bool ]
}
',
);
