<?php

return array (
  'type' => 'function',
  'name' => 'ftp_chmod',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ftp_chmod',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ftp_chmod function (php.net)',
        'url' => 'https://www.php.net/manual/function.ftp-chmod.php',
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
  'extension' => 'ftp',
  'toString' => 'Function [ <internal:ftp> function ftp_chmod ] {

  - Parameters [3] {
    Parameter #0 [ <required> $ftp ]
    Parameter #1 [ <required> int $permissions ]
    Parameter #2 [ <required> string $filename ]
  }
  - Return [ int|false ]
}
',
);
