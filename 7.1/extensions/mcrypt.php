<?php

return array (
  'type' => 'extension',
  'name' => 'mcrypt',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'mcrypt',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'mcrypt',
    )),
    'removed' => NULL,
    'version' => '7.1.33-63+ubuntu22.04.1+deb.sury.org+1',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mcrypt extension (php.net)',
        'url' => 'https://www.php.net/manual/book.mcrypt.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'mcrypt_get_key_size' => 'mcrypt_get_key_size',
    'mcrypt_get_block_size' => 'mcrypt_get_block_size',
    'mcrypt_get_cipher_name' => 'mcrypt_get_cipher_name',
    'mcrypt_create_iv' => 'mcrypt_create_iv',
    'mcrypt_list_algorithms' => 'mcrypt_list_algorithms',
    'mcrypt_list_modes' => 'mcrypt_list_modes',
    'mcrypt_get_iv_size' => 'mcrypt_get_iv_size',
    'mcrypt_encrypt' => 'mcrypt_encrypt',
    'mcrypt_decrypt' => 'mcrypt_decrypt',
    'mcrypt_module_open' => 'mcrypt_module_open',
    'mcrypt_generic_init' => 'mcrypt_generic_init',
    'mcrypt_generic' => 'mcrypt_generic',
    'mdecrypt_generic' => 'mdecrypt_generic',
    'mcrypt_generic_deinit' => 'mcrypt_generic_deinit',
    'mcrypt_enc_self_test' => 'mcrypt_enc_self_test',
    'mcrypt_enc_is_block_algorithm_mode' => 'mcrypt_enc_is_block_algorithm_mode',
    'mcrypt_enc_is_block_algorithm' => 'mcrypt_enc_is_block_algorithm',
    'mcrypt_enc_is_block_mode' => 'mcrypt_enc_is_block_mode',
    'mcrypt_enc_get_block_size' => 'mcrypt_enc_get_block_size',
    'mcrypt_enc_get_key_size' => 'mcrypt_enc_get_key_size',
    'mcrypt_enc_get_supported_key_sizes' => 'mcrypt_enc_get_supported_key_sizes',
    'mcrypt_enc_get_iv_size' => 'mcrypt_enc_get_iv_size',
    'mcrypt_enc_get_algorithms_name' => 'mcrypt_enc_get_algorithms_name',
    'mcrypt_enc_get_modes_name' => 'mcrypt_enc_get_modes_name',
    'mcrypt_module_self_test' => 'mcrypt_module_self_test',
    'mcrypt_module_is_block_algorithm_mode' => 'mcrypt_module_is_block_algorithm_mode',
    'mcrypt_module_is_block_algorithm' => 'mcrypt_module_is_block_algorithm',
    'mcrypt_module_is_block_mode' => 'mcrypt_module_is_block_mode',
    'mcrypt_module_get_algo_block_size' => 'mcrypt_module_get_algo_block_size',
    'mcrypt_module_get_algo_key_size' => 'mcrypt_module_get_algo_key_size',
    'mcrypt_module_get_supported_key_sizes' => 'mcrypt_module_get_supported_key_sizes',
    'mcrypt_module_close' => 'mcrypt_module_close',
  ),
  'constants' => 
  array (
    'MCRYPT_ENCRYPT' => 0,
    'MCRYPT_DECRYPT' => 1,
    'MCRYPT_DEV_RANDOM' => 0,
    'MCRYPT_DEV_URANDOM' => 1,
    'MCRYPT_RAND' => 2,
    'MCRYPT_3DES' => 'tripledes',
    'MCRYPT_ARCFOUR_IV' => 'arcfour-iv',
    'MCRYPT_ARCFOUR' => 'arcfour',
    'MCRYPT_BLOWFISH' => 'blowfish',
    'MCRYPT_BLOWFISH_COMPAT' => 'blowfish-compat',
    'MCRYPT_CAST_128' => 'cast-128',
    'MCRYPT_CAST_256' => 'cast-256',
    'MCRYPT_CRYPT' => 'crypt',
    'MCRYPT_DES' => 'des',
    'MCRYPT_ENIGNA' => 'crypt',
    'MCRYPT_GOST' => 'gost',
    'MCRYPT_LOKI97' => 'loki97',
    'MCRYPT_PANAMA' => 'panama',
    'MCRYPT_RC2' => 'rc2',
    'MCRYPT_RIJNDAEL_128' => 'rijndael-128',
    'MCRYPT_RIJNDAEL_192' => 'rijndael-192',
    'MCRYPT_RIJNDAEL_256' => 'rijndael-256',
    'MCRYPT_SAFER64' => 'safer-sk64',
    'MCRYPT_SAFER128' => 'safer-sk128',
    'MCRYPT_SAFERPLUS' => 'saferplus',
    'MCRYPT_SERPENT' => 'serpent',
    'MCRYPT_THREEWAY' => 'threeway',
    'MCRYPT_TRIPLEDES' => 'tripledes',
    'MCRYPT_TWOFISH' => 'twofish',
    'MCRYPT_WAKE' => 'wake',
    'MCRYPT_XTEA' => 'xtea',
    'MCRYPT_IDEA' => 'idea',
    'MCRYPT_MARS' => 'mars',
    'MCRYPT_RC6' => 'rc6',
    'MCRYPT_SKIPJACK' => 'skipjack',
    'MCRYPT_MODE_CBC' => 'cbc',
    'MCRYPT_MODE_CFB' => 'cfb',
    'MCRYPT_MODE_ECB' => 'ecb',
    'MCRYPT_MODE_NOFB' => 'nofb',
    'MCRYPT_MODE_OFB' => 'ofb',
    'MCRYPT_MODE_STREAM' => 'stream',
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'mcrypt.algorithms_dir' => NULL,
    'mcrypt.modes_dir' => NULL,
  ),
);
