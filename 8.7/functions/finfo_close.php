<?php

return array (
  'type' => 'function',
  'name' => 'finfo_close',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'finfo_close',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'finfo_close function (php.net)',
        'url' => 'https://www.php.net/manual/function.finfo-close.php',
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
  'extension' => 'fileinfo',
  'toString' => 'Function [ <internal, deprecated:fileinfo> function finfo_close ] {

  - Parameters [1] {
    Parameter #0 [ <required> finfo $finfo ]
  }
  - Return [ true ]
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
          'message' => 'as finfo objects are freed automatically',
        ),
      ),
    ),
  ),
);
