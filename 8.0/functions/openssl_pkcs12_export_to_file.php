<?php

return array (
  'type' => 'function',
  'name' => 'openssl_pkcs12_export_to_file',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_pkcs12_export_to_file',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_pkcs12_export_to_file function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-pkcs12-export-to-file.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_pkcs12_export_to_file ] {

  - Parameters [5] {
    Parameter #0 [ <required> OpenSSLCertificate|string $certificate ]
    Parameter #1 [ <required> string $output_filename ]
    Parameter #2 [ <required> $private_key ]
    Parameter #3 [ <required> string $passphrase ]
    Parameter #4 [ <optional> array $options = [] ]
  }
  - Return [ bool ]
}
',
);
