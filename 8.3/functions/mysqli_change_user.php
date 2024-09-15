<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_change_user',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_change_user',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_change_user function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-change-user.php',
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
  'toString' => 'Function [ <internal:mysqli> function mysqli_change_user ] {

  - Parameters [4] {
    Parameter #0 [ <required> mysqli $mysql ]
    Parameter #1 [ <required> string $username ]
    Parameter #2 [ <required> string $password ]
    Parameter #3 [ <required> ?string $database ]
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
