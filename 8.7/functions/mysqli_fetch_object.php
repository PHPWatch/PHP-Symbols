<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_fetch_object',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_fetch_object',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_fetch_object function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-fetch-object.php',
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
    'nullable' => true,
  ),
  'extension' => 'mysqli',
  'toString' => 'Function [ <internal:mysqli> function mysqli_fetch_object ] {

  - Parameters [3] {
    Parameter #0 [ <required> mysqli_result $result ]
    Parameter #1 [ <optional> string $class = "stdClass" ]
    Parameter #2 [ <optional> array $constructor_args = [] ]
  }
  - Return [ object|false|null ]
}
',
);
