<?php

return array (
  'type' => 'function',
  'name' => 'zip_entry_compressedsize',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'zip_entry_compressedsize',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'zip_entry_compressedsize function (php.net)',
        'url' => 'https://www.php.net/manual/function.zip-entry-compressedsize.php',
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
  'extension' => 'zip',
  'toString' => 'Function [ <internal, deprecated:zip> function zip_entry_compressedsize ] {

  - Parameters [1] {
    Parameter #0 [ <required> $zip_entry ]
  }
  - Return [ int|false ]
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
          'message' => 'use ZipArchive::statIndex() instead',
        ),
      ),
    ),
  ),
);
