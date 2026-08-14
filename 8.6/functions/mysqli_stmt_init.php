<?php

return array (
  'type' => 'function',
  'name' => 'mysqli_stmt_init',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'mysqli_stmt_init',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mysqli_stmt_init function (php.net)',
        'url' => 'https://www.php.net/manual/function.mysqli-stmt-init.php',
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
  'toString' => 'Function [ <internal, deprecated:mysqli> function mysqli_stmt_init ] {

  - Parameters [1] {
    Parameter #0 [ <required> mysqli $mysql ]
  }
  - Return [ mysqli_stmt|false ]
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
          'since' => '8.6',
          'message' => 'use mysqli_prepare() instead',
        ),
      ),
    ),
  ),
);
