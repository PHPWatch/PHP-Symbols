<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_execute',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_execute',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_execute function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-execute.php',
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
  'toString' => 'Function [ <internal, deprecated:mysqli> function mysqli_execute ] {

  - Parameters [2] {
    Parameter #0 [ <required> mysqli_stmt $statement ]
    Parameter #1 [ <optional> ?array $params = null ]
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
          'since' => '8.5',
          'message' => 'use mysqli_stmt_execute() instead',
        ),
      ),
    ),
  ),
);
