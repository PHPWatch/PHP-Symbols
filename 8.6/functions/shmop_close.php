<?php

return array (
  'type' => 'function',
  'name' => 'shmop_close',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'shmop_close',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'shmop_close function (php.net)',
        'url' => 'https://www.php.net/manual/function.shmop-close.php',
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
  'extension' => 'shmop',
  'toString' => 'Function [ <internal, deprecated:shmop> function shmop_close ] {

  - Parameters [1] {
    Parameter #0 [ <required> Shmop $shmop ]
  }
  - Return [ void ]
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
          'since' => '8.0',
          'message' => 'as Shmop objects are freed automatically',
        ),
      ),
    ),
  ),
);
