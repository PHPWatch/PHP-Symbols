<?php

return array (
  'type' => 'extension',
  'name' => 'json',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'json',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'json',
    )),
    'removed' => NULL,
    'version' => '1.7.0',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'json extension (php.net)',
        'url' => 'https://www.php.net/manual/book.json.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'JsonSerializable',
    1 => 'JsonException',
  ),
  'functions' => 
  array (
    'json_encode' => 'json_encode',
    'json_decode' => 'json_decode',
    'json_last_error' => 'json_last_error',
    'json_last_error_msg' => 'json_last_error_msg',
  ),
  'constants' => 
  array (
    'JSON_HEX_TAG' => 1,
    'JSON_HEX_AMP' => 2,
    'JSON_HEX_APOS' => 4,
    'JSON_HEX_QUOT' => 8,
    'JSON_FORCE_OBJECT' => 16,
    'JSON_NUMERIC_CHECK' => 32,
    'JSON_UNESCAPED_SLASHES' => 64,
    'JSON_PRETTY_PRINT' => 128,
    'JSON_UNESCAPED_UNICODE' => 256,
    'JSON_PARTIAL_OUTPUT_ON_ERROR' => 512,
    'JSON_PRESERVE_ZERO_FRACTION' => 1024,
    'JSON_UNESCAPED_LINE_TERMINATORS' => 2048,
    'JSON_OBJECT_AS_ARRAY' => 1,
    'JSON_BIGINT_AS_STRING' => 2,
    'JSON_INVALID_UTF8_IGNORE' => 1048576,
    'JSON_INVALID_UTF8_SUBSTITUTE' => 2097152,
    'JSON_THROW_ON_ERROR' => 4194304,
    'JSON_ERROR_NONE' => 0,
    'JSON_ERROR_DEPTH' => 1,
    'JSON_ERROR_STATE_MISMATCH' => 2,
    'JSON_ERROR_CTRL_CHAR' => 3,
    'JSON_ERROR_SYNTAX' => 4,
    'JSON_ERROR_UTF8' => 5,
    'JSON_ERROR_RECURSION' => 6,
    'JSON_ERROR_INF_OR_NAN' => 7,
    'JSON_ERROR_UNSUPPORTED_TYPE' => 8,
    'JSON_ERROR_INVALID_PROPERTY_NAME' => 9,
    'JSON_ERROR_UTF16' => 10,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
