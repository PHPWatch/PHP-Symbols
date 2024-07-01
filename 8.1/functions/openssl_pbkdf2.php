<?php

return array (
  'type' => 'function',
  'name' => 'openssl_pbkdf2',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_pbkdf2',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_pbkdf2 function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-pbkdf2.php',
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
    ReflectionUnionType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_pbkdf2 ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $password ]
    Parameter #1 [ <required> string $salt ]
    Parameter #2 [ <required> int $key_length ]
    Parameter #3 [ <required> int $iterations ]
    Parameter #4 [ <optional> string $digest_algo = "sha1" ]
  }
  - Return [ string|false ]
}
',
);
