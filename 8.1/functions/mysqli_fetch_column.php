<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_fetch_column',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_fetch_column',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_fetch_column function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-fetch-column.php',
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
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => true,
  ),
  'extension' => 'mysqli',
  'toString' => 'Function [ <internal:mysqli> function mysqli_fetch_column ] {

  - Parameters [2] {
    Parameter #0 [ <required> mysqli_result $result ]
    Parameter #1 [ <optional> int $column = 0 ]
  }
  - Return [ string|int|float|false|null ]
}
',
);
