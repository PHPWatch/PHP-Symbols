<?php

return array (
  'type' => 'function',
  'name' => 'ftp_put',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ftp_put',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ftp_put function (php.net)',
        'url' => 'https://www.php.net/manual/function.ftp-put.php',
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
  'toString' => 'Function [ <internal:ftp> function ftp_put ] {

  - Parameters [5] {
    Parameter #0 [ <required> FTP\\Connection $ftp ]
    Parameter #1 [ <required> string $remote_filename ]
    Parameter #2 [ <required> string $local_filename ]
    Parameter #3 [ <optional> int $mode = FTP_BINARY ]
    Parameter #4 [ <optional> int $offset = 0 ]
  }
  - Return [ bool ]
}
',
);
