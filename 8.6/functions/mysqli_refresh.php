<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_refresh',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_refresh',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_refresh function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-refresh.php',
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
  'toString' => 'Function [ <internal, deprecated:mysqli> function mysqli_refresh ] {

  - Parameters [2] {
    Parameter #0 [ <required> mysqli $mysql ]
    Parameter #1 [ <required> int $flags ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    '__self' => 
    array (
      0 => 
      array (
        'attribute' => 'Deprecated',
        'params' => 
        array (
          'since' => '8.4',
          'message' => 'use FLUSH SQL statement instead',
        ),
      ),
    ),
  ),
);
