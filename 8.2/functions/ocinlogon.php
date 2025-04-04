<?php

return array (
  'type' => 'function',
  'name' => 'ocinlogon',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'ocinlogon',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => true,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ocinlogon function (php.net)',
        'url' => 'https://www.php.net/manual/function.ocinlogon.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => NULL,
  'extension' => 'oci8',
  'toString' => 'Function [ <internal, deprecated:oci8> function ocinlogon ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $username ]
    Parameter #1 [ <required> string $password ]
    Parameter #2 [ <optional> ?string $connection_string = null ]
    Parameter #3 [ <optional> string $encoding = "" ]
    Parameter #4 [ <optional> int $session_mode = OCI_DEFAULT ]
  }
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
