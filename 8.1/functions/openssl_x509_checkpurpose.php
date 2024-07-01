<?php

return array (
  'type' => 'function',
  'name' => 'openssl_x509_checkpurpose',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_x509_checkpurpose',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_x509_checkpurpose function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-x509-checkpurpose.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_x509_checkpurpose ] {

  - Parameters [4] {
    Parameter #0 [ <required> OpenSSLCertificate|string $certificate ]
    Parameter #1 [ <required> int $purpose ]
    Parameter #2 [ <optional> array $ca_info = [] ]
    Parameter #3 [ <optional> ?string $untrusted_certificates_file = null ]
  }
  - Return [ int|bool ]
}
',
);
