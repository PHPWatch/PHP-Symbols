<?php

return array (
  'type' => 'function',
  'name' => 'openssl_get_privatekey',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_get_privatekey',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_get_privatekey function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-get-privatekey.php',
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
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_get_privatekey ] {

  - Parameters [2] {
    Parameter #0 [ <required> $private_key ]
    Parameter #1 [ <optional> ?string $passphrase = null ]
  }
  - Return [ OpenSSLAsymmetricKey|false ]
}
',
);
