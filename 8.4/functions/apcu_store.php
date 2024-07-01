<?php

return array (
  'type' => 'function',
  'name' => 'apcu_store',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'apcu_store',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'apcu_store function (php.net)',
        'url' => 'https://www.php.net/manual/function.apcu-store.php',
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
  'extension' => 'apcu',
  'toString' => 'Function [ <internal:apcu> function apcu_store ] {

  - Parameters [3] {
    Parameter #0 [ <required> $key ]
    Parameter #1 [ <optional> mixed $value = <default> ]
    Parameter #2 [ <optional> int $ttl = 0 ]
  }
  - Return [ array|bool ]
}
',
);
