<?php

return array (
  'type' => 'extension',
  'name' => 'iconv',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'iconv',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'iconv',
    )),
    'removed' => NULL,
    'version' => '7.3.33-21+ubuntu24.04.1+deb.sury.org+1',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'iconv extension (php.net)',
        'url' => 'https://www.php.net/manual/book.iconv.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'iconv' => 'iconv',
    'iconv_get_encoding' => 'iconv_get_encoding',
    'iconv_set_encoding' => 'iconv_set_encoding',
    'iconv_strlen' => 'iconv_strlen',
    'iconv_substr' => 'iconv_substr',
    'iconv_strpos' => 'iconv_strpos',
    'iconv_strrpos' => 'iconv_strrpos',
    'iconv_mime_encode' => 'iconv_mime_encode',
    'iconv_mime_decode' => 'iconv_mime_decode',
    'iconv_mime_decode_headers' => 'iconv_mime_decode_headers',
  ),
  'constants' => 
  array (
    'ICONV_IMPL' => 'glibc',
    'ICONV_VERSION' => '2.39',
    'ICONV_MIME_DECODE_STRICT' => 1,
    'ICONV_MIME_DECODE_CONTINUE_ON_ERROR' => 2,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'iconv.input_encoding' => '',
    'iconv.internal_encoding' => '',
    'iconv.output_encoding' => '',
  ),
);
