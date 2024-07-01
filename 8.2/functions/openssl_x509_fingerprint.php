<?php

return array (
  'type' => 'function',
  'name' => 'openssl_x509_fingerprint',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_x509_fingerprint',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_x509_fingerprint function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-x509-fingerprint.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_x509_fingerprint ] {

  - Parameters [3] {
    Parameter #0 [ <required> OpenSSLCertificate|string $certificate ]
    Parameter #1 [ <optional> string $digest_algo = "sha1" ]
    Parameter #2 [ <optional> bool $binary = false ]
  }
  - Return [ string|false ]
}
',
);
