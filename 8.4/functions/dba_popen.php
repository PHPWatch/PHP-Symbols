<?php

return array (
  'type' => 'function',
  'name' => 'dba_popen',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'dba_popen',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'dba_popen function (php.net)',
        'url' => 'https://www.php.net/manual/function.dba-popen.php',
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
  'extension' => 'dba',
  'toString' => 'Function [ <internal:dba> function dba_popen ] {

  - Parameters [6] {
    Parameter #0 [ <required> string $path ]
    Parameter #1 [ <required> string $mode ]
    Parameter #2 [ <optional> ?string $handler = null ]
    Parameter #3 [ <optional> int $permission = 0644 ]
    Parameter #4 [ <optional> int $map_size = 0 ]
    Parameter #5 [ <optional> ?int $flags = null ]
  }
  - Return [ Dba\\Connection|false ]
}
',
);
