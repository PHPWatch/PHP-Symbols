<?php

return array (
  'type' => 'function',
  'name' => 'ftp_append',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ftp_append',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ftp_append function (php.net)',
        'url' => 'https://www.php.net/manual/function.ftp-append.php',
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
  'extension' => 'ftp',
  'toString' => 'Function [ <internal:ftp> function ftp_append ] {

  - Parameters [4] {
    Parameter #0 [ <required> FTP\\Connection $ftp ]
    Parameter #1 [ <required> string $remote_filename ]
    Parameter #2 [ <required> string $local_filename ]
    Parameter #3 [ <optional> int $mode = FTP_BINARY ]
  }
  - Return [ bool ]
}
',
);
