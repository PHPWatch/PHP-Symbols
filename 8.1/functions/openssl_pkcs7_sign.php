<?php

return array (
  'type' => 'function',
  'name' => 'openssl_pkcs7_sign',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_pkcs7_sign',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_pkcs7_sign function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-pkcs7-sign.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_pkcs7_sign ] {

  - Parameters [7] {
    Parameter #0 [ <required> string $input_filename ]
    Parameter #1 [ <required> string $output_filename ]
    Parameter #2 [ <required> OpenSSLCertificate|string $certificate ]
    Parameter #3 [ <required> $private_key ]
    Parameter #4 [ <required> ?array $headers ]
    Parameter #5 [ <optional> int $flags = PKCS7_DETACHED ]
    Parameter #6 [ <optional> ?string $untrusted_certificates_filename = null ]
  }
  - Return [ bool ]
}
',
);
