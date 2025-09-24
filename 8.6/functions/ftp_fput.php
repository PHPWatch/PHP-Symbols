<?php

return array (
  'type' => 'function',
  'name' => 'ftp_fput',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ftp_fput',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ftp_fput function (php.net)',
        'url' => 'https://www.php.net/manual/function.ftp-fput.php',
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
  'toString' => 'Function [ <internal:ftp> function ftp_fput ] {

  - Parameters [5] {
    Parameter #0 [ <required> FTP\\Connection $ftp ]
    Parameter #1 [ <required> string $remote_filename ]
    Parameter #2 [ <required> $stream ]
    Parameter #3 [ <optional> int $mode = FTP_BINARY ]
    Parameter #4 [ <optional> int $offset = 0 ]
  }
  - Return [ bool ]
}
',
);
