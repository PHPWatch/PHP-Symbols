<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_kill',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_kill',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_kill function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-kill.php',
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
  'toString' => 'Function [ <internal, deprecated:mysqli> function mysqli_kill ] {

  - Parameters [2] {
    Parameter #0 [ <required> mysqli $mysql ]
    Parameter #1 [ <required> int $process_id ]
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
          'message' => 'use KILL CONNECTION/QUERY SQL statement instead',
        ),
      ),
    ),
  ),
);
