<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_ping',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_ping',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_ping function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-ping.php',
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
  'toString' => 'Function [ <internal, deprecated:mysqli> function mysqli_ping ] {

  - Parameters [1] {
    Parameter #0 [ <required> mysqli $mysql ]
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
          'message' => 'because the reconnect feature has been removed in PHP 8.2 and this function is now redundant',
        ),
      ),
    ),
  ),
);
