<?php

return array (
  'type' => 'function',
  'name' => 'openssl_csr_get_subject',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_csr_get_subject',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_csr_get_subject function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-csr-get-subject.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_csr_get_subject ] {

  - Parameters [2] {
    Parameter #0 [ <required> OpenSSLCertificateSigningRequest|string $csr ]
    Parameter #1 [ <optional> bool $short_names = true ]
  }
  - Return [ array|false ]
}
',
);
