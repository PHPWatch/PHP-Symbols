<?php

return array (
  'type' => 'function',
  'name' => 'zip_close',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'zip_close',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'zip_close function (php.net)',
        'url' => 'https://www.php.net/manual/function.zip-close.php',
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
  'extension' => 'zip',
  'toString' => 'Function [ <internal, deprecated:zip> function zip_close ] {

  - Parameters [1] {
    Parameter #0 [ <required> $zip ]
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
          'message' => 'use ZipArchive::close() instead',
        ),
      ),
    ),
  ),
);
