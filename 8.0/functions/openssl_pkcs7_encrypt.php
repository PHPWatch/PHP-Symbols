<?php

return array (
  'type' => 'function',
  'name' => 'openssl_pkcs7_encrypt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_pkcs7_encrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_pkcs7_encrypt function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-pkcs7-encrypt.php',
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
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_pkcs7_encrypt ] {

  - Parameters [6] {
    Parameter #0 [ <required> string $input_filename ]
    Parameter #1 [ <required> string $output_filename ]
    Parameter #2 [ <required> $certificate ]
    Parameter #3 [ <required> ?array $headers ]
    Parameter #4 [ <optional> int $flags = 0 ]
    Parameter #5 [ <optional> int $cipher_algo = OPENSSL_CIPHER_RC2_40 ]
  }
  - Return [ bool ]
}
',
);
