<?php

return array (
  'type' => 'function',
  'name' => 'shmop_open',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'shmop_open',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'shmop_open function (php.net)',
        'url' => 'https://www.php.net/manual/function.shmop-open.php',
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
  'extension' => 'shmop',
  'toString' => 'Function [ <internal:shmop> function shmop_open ] {

  - Parameters [4] {
    Parameter #0 [ <required> int $key ]
    Parameter #1 [ <required> string $mode ]
    Parameter #2 [ <required> int $permissions ]
    Parameter #3 [ <required> int $size ]
  }
  - Return [ Shmop|false ]
}
',
);
