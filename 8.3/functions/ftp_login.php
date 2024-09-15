<?php

return array (
  'type' => 'function',
  'name' => 'ftp_login',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ftp_login',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ftp_login function (php.net)',
        'url' => 'https://www.php.net/manual/function.ftp-login.php',
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
  'toString' => 'Function [ <internal:ftp> function ftp_login ] {

  - Parameters [3] {
    Parameter #0 [ <required> FTP\\Connection $ftp ]
    Parameter #1 [ <required> string $username ]
    Parameter #2 [ <required> string $password ]
  }
  - Return [ bool ]
}
',
  'attributes' => 
  array (
    'params' => 
    array (
      'password' => 
      array (
        0 => 
        array (
          'attribute' => 'SensitiveParameter',
          'params' => 
          array (
          ),
        ),
      ),
    ),
  ),
);
