<?php

return array (
  'type' => 'function',
  'name' => 'ftp_get',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ftp_get',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ftp_get function (php.net)',
        'url' => 'https://www.php.net/manual/function.ftp-get.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 
    ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'ftp',
  'toString' => 'Function [ <internal:ftp> function ftp_get ] {

  - Parameters [5] {
    Parameter #0 [ <required> $ftp ]
    Parameter #1 [ <required> string $local_filename ]
    Parameter #2 [ <required> string $remote_filename ]
    Parameter #3 [ <optional> int $mode = FTP_BINARY ]
    Parameter #4 [ <optional> int $offset = 0 ]
  }
  - Return [ bool ]
}
',
);
