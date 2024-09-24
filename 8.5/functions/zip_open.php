<?php

return array (
  'type' => 'function',
  'name' => 'zip_open',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'zip_open',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'zip_open function (php.net)',
        'url' => 'https://www.php.net/manual/function.zip-open.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => NULL,
  'extension' => 'zip',
  'toString' => 'Function [ <internal, deprecated:zip> function zip_open ] {

  - Parameters [1] {
    Parameter #0 [ <required> string $filename ]
  }
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
          'message' => 'use ZipArchive::open() instead',
        ),
      ),
    ),
  ),
);
