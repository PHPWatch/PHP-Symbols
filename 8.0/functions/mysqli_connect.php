<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_connect',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_connect',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_connect function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-connect.php',
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
  'toString' => 'Function [ <internal:mysqli> function mysqli_connect ] {

  - Parameters [6] {
    Parameter #0 [ <optional> ?string $hostname = null ]
    Parameter #1 [ <optional> ?string $username = null ]
    Parameter #2 [ <optional> ?string $password = null ]
    Parameter #3 [ <optional> ?string $database = null ]
    Parameter #4 [ <optional> ?int $port = null ]
    Parameter #5 [ <optional> ?string $socket = null ]
  }
  - Return [ mysqli|false ]
}
',
);
