<?php

return array (
  'type' => 'function',
  'name' => 'openssl_cms_sign',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_cms_sign',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_cms_sign function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-cms-sign.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_cms_sign ] {

  - Parameters [8] {
    Parameter #0 [ <required> string $input_filename ]
    Parameter #1 [ <required> string $output_filename ]
    Parameter #2 [ <required> OpenSSLCertificate|string $certificate ]
    Parameter #3 [ <required> $private_key ]
    Parameter #4 [ <required> ?array $headers ]
    Parameter #5 [ <optional> int $flags = 0 ]
    Parameter #6 [ <optional> int $encoding = OPENSSL_ENCODING_SMIME ]
    Parameter #7 [ <optional> ?string $untrusted_certificates_filename = null ]
  }
  - Return [ bool ]
}
',
);
