<?php

return array (
  'type' => 'function',
  'name' => 'memcache_get',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'memcache_get',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'memcache_get function (php.net)',
        'url' => 'https://www.php.net/manual/function.memcache-get.php',
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
    'nullable' => true,
  ),
  'extension' => 'memcache',
  'toString' => 'Function [ <internal:memcache> function memcache_get ] {

  - Parameters [4] {
    Parameter #0 [ <required> MemcachePool $memcache ]
    Parameter #1 [ <required> $key ]
    Parameter #2 [ <optional> &$flags = <default> ]
    Parameter #3 [ <optional> &$cas = <default> ]
  }
  - Return [ mixed ]
}
',
);
