<?php

return array (
  'type' => 'extension',
  'name' => 'openssl',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'openssl',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'openssl',
    )),
    'removed' => NULL,
    'version' => '8.2.20',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'openssl extension (php.net)',
        'url' => 'https://www.php.net/manual/book.openssl.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'OpenSSLCertificate',
    1 => 'OpenSSLCertificateSigningRequest',
    2 => 'OpenSSLAsymmetricKey',
  ),
  'functions' => 
  array (
    'openssl_x509_export_to_file' => 'openssl_x509_export_to_file',
    'openssl_x509_export' => 'openssl_x509_export',
    'openssl_x509_fingerprint' => 'openssl_x509_fingerprint',
    'openssl_x509_check_private_key' => 'openssl_x509_check_private_key',
    'openssl_x509_verify' => 'openssl_x509_verify',
    'openssl_x509_parse' => 'openssl_x509_parse',
    'openssl_x509_checkpurpose' => 'openssl_x509_checkpurpose',
    'openssl_x509_read' => 'openssl_x509_read',
    'openssl_x509_free' => 'openssl_x509_free',
    'openssl_pkcs12_export_to_file' => 'openssl_pkcs12_export_to_file',
    'openssl_pkcs12_export' => 'openssl_pkcs12_export',
    'openssl_pkcs12_read' => 'openssl_pkcs12_read',
    'openssl_csr_export_to_file' => 'openssl_csr_export_to_file',
    'openssl_csr_export' => 'openssl_csr_export',
    'openssl_csr_sign' => 'openssl_csr_sign',
    'openssl_csr_new' => 'openssl_csr_new',
    'openssl_csr_get_subject' => 'openssl_csr_get_subject',
    'openssl_csr_get_public_key' => 'openssl_csr_get_public_key',
    'openssl_pkey_new' => 'openssl_pkey_new',
    'openssl_pkey_export_to_file' => 'openssl_pkey_export_to_file',
    'openssl_pkey_export' => 'openssl_pkey_export',
    'openssl_pkey_get_public' => 'openssl_pkey_get_public',
    'openssl_get_publickey' => 'openssl_get_publickey',
    'openssl_pkey_free' => 'openssl_pkey_free',
    'openssl_free_key' => 'openssl_free_key',
    'openssl_pkey_get_private' => 'openssl_pkey_get_private',
    'openssl_get_privatekey' => 'openssl_get_privatekey',
    'openssl_pkey_get_details' => 'openssl_pkey_get_details',
    'openssl_pbkdf2' => 'openssl_pbkdf2',
    'openssl_pkcs7_verify' => 'openssl_pkcs7_verify',
    'openssl_pkcs7_encrypt' => 'openssl_pkcs7_encrypt',
    'openssl_pkcs7_sign' => 'openssl_pkcs7_sign',
    'openssl_pkcs7_decrypt' => 'openssl_pkcs7_decrypt',
    'openssl_pkcs7_read' => 'openssl_pkcs7_read',
    'openssl_cms_verify' => 'openssl_cms_verify',
    'openssl_cms_encrypt' => 'openssl_cms_encrypt',
    'openssl_cms_sign' => 'openssl_cms_sign',
    'openssl_cms_decrypt' => 'openssl_cms_decrypt',
    'openssl_cms_read' => 'openssl_cms_read',
    'openssl_private_encrypt' => 'openssl_private_encrypt',
    'openssl_private_decrypt' => 'openssl_private_decrypt',
    'openssl_public_encrypt' => 'openssl_public_encrypt',
    'openssl_public_decrypt' => 'openssl_public_decrypt',
    'openssl_error_string' => 'openssl_error_string',
    'openssl_sign' => 'openssl_sign',
    'openssl_verify' => 'openssl_verify',
    'openssl_seal' => 'openssl_seal',
    'openssl_open' => 'openssl_open',
    'openssl_get_md_methods' => 'openssl_get_md_methods',
    'openssl_get_cipher_methods' => 'openssl_get_cipher_methods',
    'openssl_get_curve_names' => 'openssl_get_curve_names',
    'openssl_digest' => 'openssl_digest',
    'openssl_encrypt' => 'openssl_encrypt',
    'openssl_decrypt' => 'openssl_decrypt',
    'openssl_cipher_iv_length' => 'openssl_cipher_iv_length',
    'openssl_cipher_key_length' => 'openssl_cipher_key_length',
    'openssl_dh_compute_key' => 'openssl_dh_compute_key',
    'openssl_pkey_derive' => 'openssl_pkey_derive',
    'openssl_random_pseudo_bytes' => 'openssl_random_pseudo_bytes',
    'openssl_spki_new' => 'openssl_spki_new',
    'openssl_spki_verify' => 'openssl_spki_verify',
    'openssl_spki_export' => 'openssl_spki_export',
    'openssl_spki_export_challenge' => 'openssl_spki_export_challenge',
    'openssl_get_cert_locations' => 'openssl_get_cert_locations',
  ),
  'constants' => 
  array (
    'OPENSSL_VERSION_TEXT' => 'OpenSSL 3.0.2 15 Mar 2022',
    'OPENSSL_VERSION_NUMBER' => 805306400,
    'X509_PURPOSE_SSL_CLIENT' => 1,
    'X509_PURPOSE_SSL_SERVER' => 2,
    'X509_PURPOSE_NS_SSL_SERVER' => 3,
    'X509_PURPOSE_SMIME_SIGN' => 4,
    'X509_PURPOSE_SMIME_ENCRYPT' => 5,
    'X509_PURPOSE_CRL_SIGN' => 6,
    'X509_PURPOSE_ANY' => 7,
    'OPENSSL_ALGO_SHA1' => 1,
    'OPENSSL_ALGO_MD5' => 2,
    'OPENSSL_ALGO_MD4' => 3,
    'OPENSSL_ALGO_SHA224' => 6,
    'OPENSSL_ALGO_SHA256' => 7,
    'OPENSSL_ALGO_SHA384' => 8,
    'OPENSSL_ALGO_SHA512' => 9,
    'OPENSSL_ALGO_RMD160' => 10,
    'PKCS7_DETACHED' => 64,
    'PKCS7_TEXT' => 1,
    'PKCS7_NOINTERN' => 16,
    'PKCS7_NOVERIFY' => 32,
    'PKCS7_NOCHAIN' => 8,
    'PKCS7_NOCERTS' => 2,
    'PKCS7_NOATTR' => 256,
    'PKCS7_BINARY' => 128,
    'PKCS7_NOSIGS' => 4,
    'OPENSSL_CMS_DETACHED' => 64,
    'OPENSSL_CMS_TEXT' => 1,
    'OPENSSL_CMS_NOINTERN' => 16,
    'OPENSSL_CMS_NOVERIFY' => 32,
    'OPENSSL_CMS_NOCERTS' => 2,
    'OPENSSL_CMS_NOATTR' => 256,
    'OPENSSL_CMS_BINARY' => 128,
    'OPENSSL_CMS_NOSIGS' => 12,
    'OPENSSL_PKCS1_PADDING' => 1,
    'OPENSSL_NO_PADDING' => 3,
    'OPENSSL_PKCS1_OAEP_PADDING' => 4,
    'OPENSSL_DEFAULT_STREAM_CIPHERS' => 'ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES256-GCM-SHA384:DHE-RSA-AES128-GCM-SHA256:DHE-DSS-AES128-GCM-SHA256:kEDH+AESGCM:ECDHE-RSA-AES128-SHA256:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA:ECDHE-ECDSA-AES128-SHA:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA:ECDHE-ECDSA-AES256-SHA:DHE-RSA-AES128-SHA256:DHE-RSA-AES128-SHA:DHE-DSS-AES128-SHA256:DHE-RSA-AES256-SHA256:DHE-DSS-AES256-SHA:DHE-RSA-AES256-SHA:AES128-GCM-SHA256:AES256-GCM-SHA384:AES128:AES256:HIGH:!SSLv2:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!RC4:!ADH',
    'OPENSSL_CIPHER_RC2_40' => 0,
    'OPENSSL_CIPHER_RC2_128' => 1,
    'OPENSSL_CIPHER_RC2_64' => 2,
    'OPENSSL_CIPHER_DES' => 3,
    'OPENSSL_CIPHER_3DES' => 4,
    'OPENSSL_CIPHER_AES_128_CBC' => 5,
    'OPENSSL_CIPHER_AES_192_CBC' => 6,
    'OPENSSL_CIPHER_AES_256_CBC' => 7,
    'OPENSSL_KEYTYPE_RSA' => 0,
    'OPENSSL_KEYTYPE_DSA' => 1,
    'OPENSSL_KEYTYPE_DH' => 2,
    'OPENSSL_KEYTYPE_EC' => 3,
    'OPENSSL_RAW_DATA' => 1,
    'OPENSSL_ZERO_PADDING' => 2,
    'OPENSSL_DONT_ZERO_PAD_KEY' => 4,
    'OPENSSL_TLSEXT_SERVER_NAME' => 1,
    'OPENSSL_ENCODING_DER' => 0,
    'OPENSSL_ENCODING_SMIME' => 1,
    'OPENSSL_ENCODING_PEM' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'openssl.cafile' => NULL,
    'openssl.capath' => NULL,
  ),
);
