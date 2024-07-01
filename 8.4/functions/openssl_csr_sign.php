<?php

return array (
  'type' => 'function',
  'name' => 'openssl_csr_sign',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_csr_sign',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_csr_sign function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-csr-sign.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_csr_sign ] {

  - Parameters [7] {
    Parameter #0 [ <required> OpenSSLCertificateSigningRequest|string $csr ]
    Parameter #1 [ <required> OpenSSLCertificate|string|null $ca_certificate ]
    Parameter #2 [ <required> $private_key ]
    Parameter #3 [ <required> int $days ]
    Parameter #4 [ <optional> ?array $options = null ]
    Parameter #5 [ <optional> int $serial = 0 ]
    Parameter #6 [ <optional> ?string $serial_hex = null ]
  }
  - Return [ OpenSSLCertificate|false ]
}
',
);
