<?php

return array (
  'type' => 'function',
  'name' => 'openssl_csr_get_public_key',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_csr_get_public_key',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_csr_get_public_key function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-csr-get-public-key.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_csr_get_public_key ] {

  - Parameters [2] {
    Parameter #0 [ <required> OpenSSLCertificateSigningRequest|string $csr ]
    Parameter #1 [ <optional> bool $short_names = true ]
  }
  - Return [ OpenSSLAsymmetricKey|false ]
}
',
);
