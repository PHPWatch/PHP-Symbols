<?php

return array (
  'type' => 'function',
  'name' => 'zip_entry_compressionmethod',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'zip_entry_compressionmethod',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'zip_entry_compressionmethod function (php.net)',
        'url' => 'https://www.php.net/manual/function.zip-entry-compressionmethod.php',
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
  'toString' => 'Function [ <internal, deprecated:zip> function zip_entry_compressionmethod ] {

  - Parameters [1] {
    Parameter #0 [ <required> $zip_entry ]
  }
  - Return [ string|false ]
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
