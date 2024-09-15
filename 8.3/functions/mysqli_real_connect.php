<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_real_connect',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_real_connect',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_real_connect function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-real-connect.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => false,
  ),
  'extension' => 'mysqli',
  'toString' => 'Function [ <internal:mysqli> function mysqli_real_connect ] {

  - Parameters [8] {
    Parameter #0 [ <required> mysqli $mysql ]
    Parameter #1 [ <optional> ?string $hostname = null ]
    Parameter #2 [ <optional> ?string $username = null ]
    Parameter #3 [ <optional> ?string $password = null ]
    Parameter #4 [ <optional> ?string $database = null ]
    Parameter #5 [ <optional> ?int $port = null ]
    Parameter #6 [ <optional> ?string $socket = null ]
    Parameter #7 [ <optional> int $flags = 0 ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'password' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
    ),
  ),
);
