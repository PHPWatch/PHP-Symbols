<?php

return array (
  'type' => 'function',
  'name' => 'ftp_fget',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ftp_fget',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ftp_fget function (php.net)',
        'url' => 'https://www.php.net/manual/function.ftp-fget.php',
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
  'toString' => 'Function [ <internal:ftp> function ftp_fget ] {

  - Parameters [5] {
    Parameter #0 [ <required> FTP\\Connection $ftp ]
    Parameter #1 [ <required> $stream ]
    Parameter #2 [ <required> string $remote_filename ]
    Parameter #3 [ <optional> int $mode = FTP_BINARY ]
    Parameter #4 [ <optional> int $offset = 0 ]
  }
  - Return [ bool ]
}
',
);
