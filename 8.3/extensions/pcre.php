<?php

return array (
  'type' => 'extension',
  'name' => 'pcre',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'pcre',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'pcre',
    )),
    'removed' => NULL,
    'version' => '8.3.8',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcre extension (php.net)',
        'url' => 'https://www.php.net/manual/book.pcre.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'preg_match' => 'preg_match',
    'preg_match_all' => 'preg_match_all',
    'preg_replace' => 'preg_replace',
    'preg_filter' => 'preg_filter',
    'preg_replace_callback' => 'preg_replace_callback',
    'preg_replace_callback_array' => 'preg_replace_callback_array',
    'preg_split' => 'preg_split',
    'preg_quote' => 'preg_quote',
    'preg_grep' => 'preg_grep',
    'preg_last_error' => 'preg_last_error',
    'preg_last_error_msg' => 'preg_last_error_msg',
  ),
  'constants' => 
  array (
    'PREG_PATTERN_ORDER' => 1,
    'PREG_SET_ORDER' => 2,
    'PREG_OFFSET_CAPTURE' => 256,
    'PREG_UNMATCHED_AS_NULL' => 512,
    'PREG_SPLIT_NO_EMPTY' => 1,
    'PREG_SPLIT_DELIM_CAPTURE' => 2,
    'PREG_SPLIT_OFFSET_CAPTURE' => 4,
    'PREG_GREP_INVERT' => 1,
    'PREG_NO_ERROR' => 0,
    'PREG_INTERNAL_ERROR' => 1,
    'PREG_BACKTRACK_LIMIT_ERROR' => 2,
    'PREG_RECURSION_LIMIT_ERROR' => 3,
    'PREG_BAD_UTF8_ERROR' => 4,
    'PREG_BAD_UTF8_OFFSET_ERROR' => 5,
    'PREG_JIT_STACKLIMIT_ERROR' => 6,
    'PCRE_VERSION' => '10.42 2022-12-11',
    'PCRE_VERSION_MAJOR' => 10,
    'PCRE_VERSION_MINOR' => 42,
    'PCRE_JIT_SUPPORT' => true,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'pcre.backtrack_limit' => '1000000',
    'pcre.jit' => '1',
    'pcre.recursion_limit' => '100000',
  ),
);
