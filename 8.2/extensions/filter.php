<?php

return array (
  'type' => 'extension',
  'name' => 'filter',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'filter',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'filter',
    )),
    'removed' => NULL,
    'version' => '8.2.28',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'filter extension (php.net)',
        'url' => 'https://www.php.net/manual/book.filter.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'filter_has_var' => 'filter_has_var',
    'filter_input' => 'filter_input',
    'filter_var' => 'filter_var',
    'filter_input_array' => 'filter_input_array',
    'filter_var_array' => 'filter_var_array',
    'filter_list' => 'filter_list',
    'filter_id' => 'filter_id',
  ),
  'constants' => 
  array (
    'INPUT_POST' => 0,
    'INPUT_GET' => 1,
    'INPUT_COOKIE' => 2,
    'INPUT_ENV' => 4,
    'INPUT_SERVER' => 5,
    'FILTER_FLAG_NONE' => 0,
    'FILTER_REQUIRE_SCALAR' => 33554432,
    'FILTER_REQUIRE_ARRAY' => 16777216,
    'FILTER_FORCE_ARRAY' => 67108864,
    'FILTER_NULL_ON_FAILURE' => 134217728,
    'FILTER_VALIDATE_INT' => 257,
    'FILTER_VALIDATE_BOOLEAN' => 258,
    'FILTER_VALIDATE_BOOL' => 258,
    'FILTER_VALIDATE_FLOAT' => 259,
    'FILTER_VALIDATE_REGEXP' => 272,
    'FILTER_VALIDATE_DOMAIN' => 277,
    'FILTER_VALIDATE_URL' => 273,
    'FILTER_VALIDATE_EMAIL' => 274,
    'FILTER_VALIDATE_IP' => 275,
    'FILTER_VALIDATE_MAC' => 276,
    'FILTER_DEFAULT' => 516,
    'FILTER_UNSAFE_RAW' => 516,
    'FILTER_SANITIZE_STRING' => 513,
    'FILTER_SANITIZE_STRIPPED' => 513,
    'FILTER_SANITIZE_ENCODED' => 514,
    'FILTER_SANITIZE_SPECIAL_CHARS' => 515,
    'FILTER_SANITIZE_FULL_SPECIAL_CHARS' => 522,
    'FILTER_SANITIZE_EMAIL' => 517,
    'FILTER_SANITIZE_URL' => 518,
    'FILTER_SANITIZE_NUMBER_INT' => 519,
    'FILTER_SANITIZE_NUMBER_FLOAT' => 520,
    'FILTER_SANITIZE_ADD_SLASHES' => 523,
    'FILTER_CALLBACK' => 1024,
    'FILTER_FLAG_ALLOW_OCTAL' => 1,
    'FILTER_FLAG_ALLOW_HEX' => 2,
    'FILTER_FLAG_STRIP_LOW' => 4,
    'FILTER_FLAG_STRIP_HIGH' => 8,
    'FILTER_FLAG_STRIP_BACKTICK' => 512,
    'FILTER_FLAG_ENCODE_LOW' => 16,
    'FILTER_FLAG_ENCODE_HIGH' => 32,
    'FILTER_FLAG_ENCODE_AMP' => 64,
    'FILTER_FLAG_NO_ENCODE_QUOTES' => 128,
    'FILTER_FLAG_EMPTY_STRING_NULL' => 256,
    'FILTER_FLAG_ALLOW_FRACTION' => 4096,
    'FILTER_FLAG_ALLOW_THOUSAND' => 8192,
    'FILTER_FLAG_ALLOW_SCIENTIFIC' => 16384,
    'FILTER_FLAG_PATH_REQUIRED' => 262144,
    'FILTER_FLAG_QUERY_REQUIRED' => 524288,
    'FILTER_FLAG_IPV4' => 1048576,
    'FILTER_FLAG_IPV6' => 2097152,
    'FILTER_FLAG_NO_RES_RANGE' => 4194304,
    'FILTER_FLAG_NO_PRIV_RANGE' => 8388608,
    'FILTER_FLAG_GLOBAL_RANGE' => 268435456,
    'FILTER_FLAG_HOSTNAME' => 1048576,
    'FILTER_FLAG_EMAIL_UNICODE' => 1048576,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'filter.default' => 'unsafe_raw',
    'filter.default_flags' => NULL,
  ),
);
