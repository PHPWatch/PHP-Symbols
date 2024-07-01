<?php

return array (
  'type' => 'function',
  'name' => 'ftp_ssl_connect',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ftp_ssl_connect',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ftp_ssl_connect function (php.net)',
        'url' => 'https://www.php.net/manual/function.ftp-ssl-connect.php',
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
    \ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'ftp',
  'toString' => 'Function [ <internal:ftp> function ftp_ssl_connect ] {

  - Parameters [3] {
    Parameter #0 [ <required> string $hostname ]
    Parameter #1 [ <optional> int $port = 21 ]
    Parameter #2 [ <optional> int $timeout = 90 ]
  }
  - Return [ FTP\\Connection|false ]
}
',
);
