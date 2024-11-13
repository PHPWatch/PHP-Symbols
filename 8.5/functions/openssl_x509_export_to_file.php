<?php

return array (
  'type' => 'function',
  'name' => 'openssl_x509_export_to_file',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_x509_export_to_file',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_x509_export_to_file function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-x509-export-to-file.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_x509_export_to_file ] {

  - Parameters [3] {
    Parameter #0 [ <required> OpenSSLCertificate|string $certificate ]
    Parameter #1 [ <required> string $output_filename ]
    Parameter #2 [ <optional> bool $no_text = true ]
  }
  - Return [ bool ]
}
',
);
