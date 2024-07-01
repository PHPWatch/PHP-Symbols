<?php

return array (
  'type' => 'function',
  'name' => 'openssl_cms_encrypt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_cms_encrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_cms_encrypt function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-cms-encrypt.php',
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
    \ReflectionNamedType::__set_state(array(
    )),
    'nullable' => false,
  ),
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_cms_encrypt ] {

  - Parameters [7] {
    Parameter #0 [ <required> string $input_filename ]
    Parameter #1 [ <required> string $output_filename ]
    Parameter #2 [ <required> $certificate ]
    Parameter #3 [ <required> ?array $headers ]
    Parameter #4 [ <optional> int $flags = 0 ]
    Parameter #5 [ <optional> int $encoding = OPENSSL_ENCODING_SMIME ]
    Parameter #6 [ <optional> int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC ]
  }
  - Return [ bool ]
}
',
);
