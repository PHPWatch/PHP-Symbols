<?php

return array (
  'type' => 'function',
  'name' => 'openssl_pkey_derive',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_pkey_derive',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_pkey_derive function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-pkey-derive.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_pkey_derive ] {

  - Parameters [3] {
    Parameter #0 [ <required> $public_key ]
    Parameter #1 [ <required> $private_key ]
    Parameter #2 [ <optional> int $key_length = 0 ]
  }
  - Return [ string|false ]
}
',
);
