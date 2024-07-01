<?php

return array (
  'type' => 'function',
  'name' => 'openssl_cms_decrypt',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_cms_decrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_cms_decrypt function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-cms-decrypt.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_cms_decrypt ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $input_filename ]
    Parameter #1 [ <required> string $output_filename ]
    Parameter #2 [ <required> $certificate ]
    Parameter #3 [ <optional> $private_key = null ]
    Parameter #4 [ <optional> int $encoding = OPENSSL_ENCODING_SMIME ]
  }
  - Return [ bool ]
}
',
);
