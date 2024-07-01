<?php

return array (
  'type' => 'function',
  'name' => 'posix_mknod',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'posix_mknod',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'posix_mknod function (php.net)',
        'url' => 'https://www.php.net/manual/function.posix-mknod.php',
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
  'extension' => 'posix',
  'toString' => 'Function [ <internal:posix> function posix_mknod ] {

  - Parameters [4] {
    Parameter #0 [ <required> string $filename ]
    Parameter #1 [ <required> int $flags ]
    Parameter #2 [ <optional> int $major = 0 ]
    Parameter #3 [ <optional> int $minor = 0 ]
  }
  - Return [ bool ]
}
',
);
