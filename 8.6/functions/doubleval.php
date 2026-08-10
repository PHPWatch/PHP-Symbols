<?php

return array (
  'type' => 'function',
  'name' => 'doubleval',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'doubleval',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'doubleval function (php.net)',
        'url' => 'https://www.php.net/manual/function.doubleval.php',
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
  'extension' => 'standard',
  'toString' => 'Function [ <internal, deprecated:standard> function doubleval ] {

  - Parameters [1] {
    Parameter #0 [ <required> mixed $value ]
  }
  - Return [ float ]
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
          'message' => 'use floatval() instead',
          'since' => '8.6',
        ),
      ),
    ),
  ),
);
