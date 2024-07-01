<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_prepare',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_prepare',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_prepare function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-prepare.php',
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
  'extension' => 'mysqli',
  'toString' => 'Function [ <internal:mysqli> function mysqli_prepare ] {

  - Parameters [2] {
    Parameter #0 [ <required> mysqli $mysql ]
    Parameter #1 [ <required> string $query ]
  }
  - Return [ mysqli_stmt|false ]
}
',
);
