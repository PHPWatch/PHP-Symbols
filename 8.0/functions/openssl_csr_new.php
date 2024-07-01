<?php

return array (
  'type' => 'function',
  'name' => 'openssl_csr_new',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'openssl_csr_new',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl_csr_new function (php.net)',
        'url' => 'https://www.php.net/manual/function.openssl-csr-new.php',
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
  'toString' => 'Function [ <internal:openssl> function openssl_csr_new ] {

  - Parameters [4] {
    Parameter #0 [ <required> array $distinguished_names ]
    Parameter #1 [ <required> &$private_key ]
    Parameter #2 [ <optional> ?array $options = null ]
    Parameter #3 [ <optional> ?array $extra_attributes = null ]
  }
  - Return [ OpenSSLCertificateSigningRequest|false ]
}
',
);
