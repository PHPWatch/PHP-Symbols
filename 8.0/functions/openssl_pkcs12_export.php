<?php

return array (
  'type' => 'function',
  'name' => 'openssl_pkcs12_export',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_pkcs12_export',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_pkcs12_export function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-pkcs12-export.php',
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
  'extension' => 'openssl',
  'toString' => 'Function [ <internal:openssl> function openssl_pkcs12_export ] {

  - Parameters [5] {
    Parameter #0 [ <required> OpenSSLCertificate|string $certificate ]
    Parameter #1 [ <required> &$output ]
    Parameter #2 [ <required> $private_key ]
    Parameter #3 [ <required> string $passphrase ]
    Parameter #4 [ <optional> array $options = [] ]
  }
  - Return [ bool ]
}
',
);
