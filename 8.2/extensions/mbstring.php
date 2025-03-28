<?php

return array (
  'type' => 'extension',
  'name' => 'mbstring',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'mbstring',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'mbstring',
    )),
    'removed' => NULL,
    'version' => '__DYNAMIC__PHP Version',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'mbstring extension (php.net)',
        'url' => 'https://www.php.net/manual/book.mbstring.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'mb_language' => 'mb_language',
    'mb_internal_encoding' => 'mb_internal_encoding',
    'mb_http_input' => 'mb_http_input',
    'mb_http_output' => 'mb_http_output',
    'mb_detect_order' => 'mb_detect_order',
    'mb_substitute_character' => 'mb_substitute_character',
    'mb_preferred_mime_name' => 'mb_preferred_mime_name',
    'mb_parse_str' => 'mb_parse_str',
    'mb_output_handler' => 'mb_output_handler',
    'mb_str_split' => 'mb_str_split',
    'mb_strlen' => 'mb_strlen',
    'mb_strpos' => 'mb_strpos',
    'mb_strrpos' => 'mb_strrpos',
    'mb_stripos' => 'mb_stripos',
    'mb_strripos' => 'mb_strripos',
    'mb_strstr' => 'mb_strstr',
    'mb_strrchr' => 'mb_strrchr',
    'mb_stristr' => 'mb_stristr',
    'mb_strrichr' => 'mb_strrichr',
    'mb_substr_count' => 'mb_substr_count',
    'mb_substr' => 'mb_substr',
    'mb_strcut' => 'mb_strcut',
    'mb_strwidth' => 'mb_strwidth',
    'mb_strimwidth' => 'mb_strimwidth',
    'mb_convert_encoding' => 'mb_convert_encoding',
    'mb_convert_case' => 'mb_convert_case',
    'mb_strtoupper' => 'mb_strtoupper',
    'mb_strtolower' => 'mb_strtolower',
    'mb_detect_encoding' => 'mb_detect_encoding',
    'mb_list_encodings' => 'mb_list_encodings',
    'mb_encoding_aliases' => 'mb_encoding_aliases',
    'mb_encode_mimeheader' => 'mb_encode_mimeheader',
    'mb_decode_mimeheader' => 'mb_decode_mimeheader',
    'mb_convert_kana' => 'mb_convert_kana',
    'mb_convert_variables' => 'mb_convert_variables',
    'mb_encode_numericentity' => 'mb_encode_numericentity',
    'mb_decode_numericentity' => 'mb_decode_numericentity',
    'mb_send_mail' => 'mb_send_mail',
    'mb_get_info' => 'mb_get_info',
    'mb_check_encoding' => 'mb_check_encoding',
    'mb_scrub' => 'mb_scrub',
    'mb_ord' => 'mb_ord',
    'mb_chr' => 'mb_chr',
    'mb_regex_encoding' => 'mb_regex_encoding',
    'mb_ereg' => 'mb_ereg',
    'mb_eregi' => 'mb_eregi',
    'mb_ereg_replace' => 'mb_ereg_replace',
    'mb_eregi_replace' => 'mb_eregi_replace',
    'mb_ereg_replace_callback' => 'mb_ereg_replace_callback',
    'mb_split' => 'mb_split',
    'mb_ereg_match' => 'mb_ereg_match',
    'mb_ereg_search' => 'mb_ereg_search',
    'mb_ereg_search_pos' => 'mb_ereg_search_pos',
    'mb_ereg_search_regs' => 'mb_ereg_search_regs',
    'mb_ereg_search_init' => 'mb_ereg_search_init',
    'mb_ereg_search_getregs' => 'mb_ereg_search_getregs',
    'mb_ereg_search_getpos' => 'mb_ereg_search_getpos',
    'mb_ereg_search_setpos' => 'mb_ereg_search_setpos',
    'mb_regex_set_options' => 'mb_regex_set_options',
  ),
  'constants' => 
  array (
    'MB_ONIGURUMA_VERSION' => '6.9.9',
    'MB_CASE_UPPER' => 0,
    'MB_CASE_LOWER' => 1,
    'MB_CASE_TITLE' => 2,
    'MB_CASE_FOLD' => 3,
    'MB_CASE_UPPER_SIMPLE' => 4,
    'MB_CASE_LOWER_SIMPLE' => 5,
    'MB_CASE_TITLE_SIMPLE' => 6,
    'MB_CASE_FOLD_SIMPLE' => 7,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'mbstring.detect_order' => NULL,
    'mbstring.encoding_translation' => '0',
    'mbstring.http_input' => NULL,
    'mbstring.http_output' => NULL,
    'mbstring.http_output_conv_mimetypes' => '^(text/|application/xhtml\\+xml)',
    'mbstring.internal_encoding' => NULL,
    'mbstring.language' => 'neutral',
    'mbstring.regex_retry_limit' => '1000000',
    'mbstring.regex_stack_limit' => '100000',
    'mbstring.strict_detection' => '0',
    'mbstring.substitute_character' => NULL,
  ),
);
