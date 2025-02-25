<?php

return array (
  'type' => 'extension',
  'name' => 'intl',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'intl',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'intl',
    )),
    'removed' => NULL,
    'version' => '8.4.6-dev',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'intl extension (php.net)',
        'url' => 'https://www.php.net/manual/book.intl.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'Collator',
    1 => 'NumberFormatter',
    2 => 'Normalizer',
    3 => 'Locale',
    4 => 'MessageFormatter',
    5 => 'IntlDateFormatter',
    6 => 'IntlDatePatternGenerator',
    7 => 'ResourceBundle',
    8 => 'Transliterator',
    9 => 'IntlTimeZone',
    10 => 'IntlCalendar',
    11 => 'IntlGregorianCalendar',
    12 => 'Spoofchecker',
    13 => 'IntlException',
    14 => 'IntlIterator',
    15 => 'IntlBreakIterator',
    16 => 'IntlRuleBasedBreakIterator',
    17 => 'IntlCodePointBreakIterator',
    18 => 'IntlPartsIterator',
    19 => 'UConverter',
    20 => 'IntlChar',
  ),
  'functions' => 
  array (
    'intlcal_create_instance' => 'intlcal_create_instance',
    'intlcal_get_keyword_values_for_locale' => 'intlcal_get_keyword_values_for_locale',
    'intlcal_get_now' => 'intlcal_get_now',
    'intlcal_get_available_locales' => 'intlcal_get_available_locales',
    'intlcal_get' => 'intlcal_get',
    'intlcal_get_time' => 'intlcal_get_time',
    'intlcal_set_time' => 'intlcal_set_time',
    'intlcal_add' => 'intlcal_add',
    'intlcal_set_time_zone' => 'intlcal_set_time_zone',
    'intlcal_after' => 'intlcal_after',
    'intlcal_before' => 'intlcal_before',
    'intlcal_set' => 'intlcal_set',
    'intlcal_roll' => 'intlcal_roll',
    'intlcal_clear' => 'intlcal_clear',
    'intlcal_field_difference' => 'intlcal_field_difference',
    'intlcal_get_actual_maximum' => 'intlcal_get_actual_maximum',
    'intlcal_get_actual_minimum' => 'intlcal_get_actual_minimum',
    'intlcal_get_day_of_week_type' => 'intlcal_get_day_of_week_type',
    'intlcal_get_first_day_of_week' => 'intlcal_get_first_day_of_week',
    'intlcal_get_least_maximum' => 'intlcal_get_least_maximum',
    'intlcal_get_greatest_minimum' => 'intlcal_get_greatest_minimum',
    'intlcal_get_locale' => 'intlcal_get_locale',
    'intlcal_get_maximum' => 'intlcal_get_maximum',
    'intlcal_get_minimal_days_in_first_week' => 'intlcal_get_minimal_days_in_first_week',
    'intlcal_set_minimal_days_in_first_week' => 'intlcal_set_minimal_days_in_first_week',
    'intlcal_get_minimum' => 'intlcal_get_minimum',
    'intlcal_get_time_zone' => 'intlcal_get_time_zone',
    'intlcal_get_type' => 'intlcal_get_type',
    'intlcal_get_weekend_transition' => 'intlcal_get_weekend_transition',
    'intlcal_in_daylight_time' => 'intlcal_in_daylight_time',
    'intlcal_is_lenient' => 'intlcal_is_lenient',
    'intlcal_is_set' => 'intlcal_is_set',
    'intlcal_is_equivalent_to' => 'intlcal_is_equivalent_to',
    'intlcal_is_weekend' => 'intlcal_is_weekend',
    'intlcal_set_first_day_of_week' => 'intlcal_set_first_day_of_week',
    'intlcal_set_lenient' => 'intlcal_set_lenient',
    'intlcal_get_repeated_wall_time_option' => 'intlcal_get_repeated_wall_time_option',
    'intlcal_equals' => 'intlcal_equals',
    'intlcal_get_skipped_wall_time_option' => 'intlcal_get_skipped_wall_time_option',
    'intlcal_set_repeated_wall_time_option' => 'intlcal_set_repeated_wall_time_option',
    'intlcal_set_skipped_wall_time_option' => 'intlcal_set_skipped_wall_time_option',
    'intlcal_from_date_time' => 'intlcal_from_date_time',
    'intlcal_to_date_time' => 'intlcal_to_date_time',
    'intlcal_get_error_code' => 'intlcal_get_error_code',
    'intlcal_get_error_message' => 'intlcal_get_error_message',
    'intlgregcal_create_instance' => 'intlgregcal_create_instance',
    'intlgregcal_set_gregorian_change' => 'intlgregcal_set_gregorian_change',
    'intlgregcal_get_gregorian_change' => 'intlgregcal_get_gregorian_change',
    'intlgregcal_is_leap_year' => 'intlgregcal_is_leap_year',
    'collator_create' => 'collator_create',
    'collator_compare' => 'collator_compare',
    'collator_get_attribute' => 'collator_get_attribute',
    'collator_set_attribute' => 'collator_set_attribute',
    'collator_get_strength' => 'collator_get_strength',
    'collator_set_strength' => 'collator_set_strength',
    'collator_sort' => 'collator_sort',
    'collator_sort_with_sort_keys' => 'collator_sort_with_sort_keys',
    'collator_asort' => 'collator_asort',
    'collator_get_locale' => 'collator_get_locale',
    'collator_get_error_code' => 'collator_get_error_code',
    'collator_get_error_message' => 'collator_get_error_message',
    'collator_get_sort_key' => 'collator_get_sort_key',
    'intl_get_error_code' => 'intl_get_error_code',
    'intl_get_error_message' => 'intl_get_error_message',
    'intl_is_failure' => 'intl_is_failure',
    'intl_error_name' => 'intl_error_name',
    'datefmt_create' => 'datefmt_create',
    'datefmt_get_datetype' => 'datefmt_get_datetype',
    'datefmt_get_timetype' => 'datefmt_get_timetype',
    'datefmt_get_calendar' => 'datefmt_get_calendar',
    'datefmt_set_calendar' => 'datefmt_set_calendar',
    'datefmt_get_timezone_id' => 'datefmt_get_timezone_id',
    'datefmt_get_calendar_object' => 'datefmt_get_calendar_object',
    'datefmt_get_timezone' => 'datefmt_get_timezone',
    'datefmt_set_timezone' => 'datefmt_set_timezone',
    'datefmt_set_pattern' => 'datefmt_set_pattern',
    'datefmt_get_pattern' => 'datefmt_get_pattern',
    'datefmt_get_locale' => 'datefmt_get_locale',
    'datefmt_set_lenient' => 'datefmt_set_lenient',
    'datefmt_is_lenient' => 'datefmt_is_lenient',
    'datefmt_format' => 'datefmt_format',
    'datefmt_format_object' => 'datefmt_format_object',
    'datefmt_parse' => 'datefmt_parse',
    'datefmt_localtime' => 'datefmt_localtime',
    'datefmt_get_error_code' => 'datefmt_get_error_code',
    'datefmt_get_error_message' => 'datefmt_get_error_message',
    'numfmt_create' => 'numfmt_create',
    'numfmt_format' => 'numfmt_format',
    'numfmt_parse' => 'numfmt_parse',
    'numfmt_format_currency' => 'numfmt_format_currency',
    'numfmt_parse_currency' => 'numfmt_parse_currency',
    'numfmt_set_attribute' => 'numfmt_set_attribute',
    'numfmt_get_attribute' => 'numfmt_get_attribute',
    'numfmt_set_text_attribute' => 'numfmt_set_text_attribute',
    'numfmt_get_text_attribute' => 'numfmt_get_text_attribute',
    'numfmt_set_symbol' => 'numfmt_set_symbol',
    'numfmt_get_symbol' => 'numfmt_get_symbol',
    'numfmt_set_pattern' => 'numfmt_set_pattern',
    'numfmt_get_pattern' => 'numfmt_get_pattern',
    'numfmt_get_locale' => 'numfmt_get_locale',
    'numfmt_get_error_code' => 'numfmt_get_error_code',
    'numfmt_get_error_message' => 'numfmt_get_error_message',
    'grapheme_strlen' => 'grapheme_strlen',
    'grapheme_strpos' => 'grapheme_strpos',
    'grapheme_stripos' => 'grapheme_stripos',
    'grapheme_strrpos' => 'grapheme_strrpos',
    'grapheme_strripos' => 'grapheme_strripos',
    'grapheme_substr' => 'grapheme_substr',
    'grapheme_strstr' => 'grapheme_strstr',
    'grapheme_stristr' => 'grapheme_stristr',
    'grapheme_str_split' => 'grapheme_str_split',
    'grapheme_extract' => 'grapheme_extract',
    'idn_to_ascii' => 'idn_to_ascii',
    'idn_to_utf8' => 'idn_to_utf8',
    'locale_get_default' => 'locale_get_default',
    'locale_set_default' => 'locale_set_default',
    'locale_get_primary_language' => 'locale_get_primary_language',
    'locale_get_script' => 'locale_get_script',
    'locale_get_region' => 'locale_get_region',
    'locale_get_keywords' => 'locale_get_keywords',
    'locale_get_display_script' => 'locale_get_display_script',
    'locale_get_display_region' => 'locale_get_display_region',
    'locale_get_display_name' => 'locale_get_display_name',
    'locale_get_display_language' => 'locale_get_display_language',
    'locale_get_display_variant' => 'locale_get_display_variant',
    'locale_compose' => 'locale_compose',
    'locale_parse' => 'locale_parse',
    'locale_get_all_variants' => 'locale_get_all_variants',
    'locale_filter_matches' => 'locale_filter_matches',
    'locale_canonicalize' => 'locale_canonicalize',
    'locale_lookup' => 'locale_lookup',
    'locale_accept_from_http' => 'locale_accept_from_http',
    'msgfmt_create' => 'msgfmt_create',
    'msgfmt_format' => 'msgfmt_format',
    'msgfmt_format_message' => 'msgfmt_format_message',
    'msgfmt_parse' => 'msgfmt_parse',
    'msgfmt_parse_message' => 'msgfmt_parse_message',
    'msgfmt_set_pattern' => 'msgfmt_set_pattern',
    'msgfmt_get_pattern' => 'msgfmt_get_pattern',
    'msgfmt_get_locale' => 'msgfmt_get_locale',
    'msgfmt_get_error_code' => 'msgfmt_get_error_code',
    'msgfmt_get_error_message' => 'msgfmt_get_error_message',
    'normalizer_normalize' => 'normalizer_normalize',
    'normalizer_is_normalized' => 'normalizer_is_normalized',
    'normalizer_get_raw_decomposition' => 'normalizer_get_raw_decomposition',
    'resourcebundle_create' => 'resourcebundle_create',
    'resourcebundle_get' => 'resourcebundle_get',
    'resourcebundle_count' => 'resourcebundle_count',
    'resourcebundle_locales' => 'resourcebundle_locales',
    'resourcebundle_get_error_code' => 'resourcebundle_get_error_code',
    'resourcebundle_get_error_message' => 'resourcebundle_get_error_message',
    'intltz_count_equivalent_ids' => 'intltz_count_equivalent_ids',
    'intltz_create_default' => 'intltz_create_default',
    'intltz_create_enumeration' => 'intltz_create_enumeration',
    'intltz_create_time_zone' => 'intltz_create_time_zone',
    'intltz_create_time_zone_id_enumeration' => 'intltz_create_time_zone_id_enumeration',
    'intltz_from_date_time_zone' => 'intltz_from_date_time_zone',
    'intltz_get_canonical_id' => 'intltz_get_canonical_id',
    'intltz_get_display_name' => 'intltz_get_display_name',
    'intltz_get_dst_savings' => 'intltz_get_dst_savings',
    'intltz_get_equivalent_id' => 'intltz_get_equivalent_id',
    'intltz_get_error_code' => 'intltz_get_error_code',
    'intltz_get_error_message' => 'intltz_get_error_message',
    'intltz_get_gmt' => 'intltz_get_gmt',
    'intltz_get_id' => 'intltz_get_id',
    'intltz_get_offset' => 'intltz_get_offset',
    'intltz_get_raw_offset' => 'intltz_get_raw_offset',
    'intltz_get_region' => 'intltz_get_region',
    'intltz_get_tz_data_version' => 'intltz_get_tz_data_version',
    'intltz_get_unknown' => 'intltz_get_unknown',
    'intltz_get_windows_id' => 'intltz_get_windows_id',
    'intltz_get_id_for_windows_id' => 'intltz_get_id_for_windows_id',
    'intltz_has_same_rules' => 'intltz_has_same_rules',
    'intltz_to_date_time_zone' => 'intltz_to_date_time_zone',
    'intltz_use_daylight_time' => 'intltz_use_daylight_time',
    'intltz_get_iana_id' => 'intltz_get_iana_id',
    'transliterator_create' => 'transliterator_create',
    'transliterator_create_from_rules' => 'transliterator_create_from_rules',
    'transliterator_list_ids' => 'transliterator_list_ids',
    'transliterator_create_inverse' => 'transliterator_create_inverse',
    'transliterator_transliterate' => 'transliterator_transliterate',
    'transliterator_get_error_code' => 'transliterator_get_error_code',
    'transliterator_get_error_message' => 'transliterator_get_error_message',
  ),
  'constants' => 
  array (
    'INTL_MAX_LOCALE_LEN' => 156,
    'INTL_ICU_VERSION' => '74.2',
    'INTL_ICU_DATA_VERSION' => '74.2',
    'GRAPHEME_EXTR_COUNT' => 0,
    'GRAPHEME_EXTR_MAXBYTES' => 1,
    'GRAPHEME_EXTR_MAXCHARS' => 2,
    'IDNA_DEFAULT' => 0,
    'IDNA_ALLOW_UNASSIGNED' => 1,
    'IDNA_USE_STD3_RULES' => 2,
    'IDNA_CHECK_BIDI' => 4,
    'IDNA_CHECK_CONTEXTJ' => 8,
    'IDNA_NONTRANSITIONAL_TO_ASCII' => 16,
    'IDNA_NONTRANSITIONAL_TO_UNICODE' => 32,
    'INTL_IDNA_VARIANT_UTS46' => 1,
    'IDNA_ERROR_EMPTY_LABEL' => 1,
    'IDNA_ERROR_LABEL_TOO_LONG' => 2,
    'IDNA_ERROR_DOMAIN_NAME_TOO_LONG' => 4,
    'IDNA_ERROR_LEADING_HYPHEN' => 8,
    'IDNA_ERROR_TRAILING_HYPHEN' => 16,
    'IDNA_ERROR_HYPHEN_3_4' => 32,
    'IDNA_ERROR_LEADING_COMBINING_MARK' => 64,
    'IDNA_ERROR_DISALLOWED' => 128,
    'IDNA_ERROR_PUNYCODE' => 256,
    'IDNA_ERROR_LABEL_HAS_DOT' => 512,
    'IDNA_ERROR_INVALID_ACE_LABEL' => 1024,
    'IDNA_ERROR_BIDI' => 2048,
    'IDNA_ERROR_CONTEXTJ' => 4096,
    'ULOC_ACTUAL_LOCALE' => 0,
    'ULOC_VALID_LOCALE' => 1,
    'U_USING_FALLBACK_WARNING' => -128,
    'U_ERROR_WARNING_START' => -128,
    'U_USING_DEFAULT_WARNING' => -127,
    'U_SAFECLONE_ALLOCATED_WARNING' => -126,
    'U_STATE_OLD_WARNING' => -125,
    'U_STRING_NOT_TERMINATED_WARNING' => -124,
    'U_SORT_KEY_TOO_SHORT_WARNING' => -123,
    'U_AMBIGUOUS_ALIAS_WARNING' => -122,
    'U_DIFFERENT_UCA_VERSION' => -121,
    'U_ERROR_WARNING_LIMIT' => -119,
    'U_ZERO_ERROR' => 0,
    'U_ILLEGAL_ARGUMENT_ERROR' => 1,
    'U_MISSING_RESOURCE_ERROR' => 2,
    'U_INVALID_FORMAT_ERROR' => 3,
    'U_FILE_ACCESS_ERROR' => 4,
    'U_INTERNAL_PROGRAM_ERROR' => 5,
    'U_MESSAGE_PARSE_ERROR' => 6,
    'U_MEMORY_ALLOCATION_ERROR' => 7,
    'U_INDEX_OUTOFBOUNDS_ERROR' => 8,
    'U_PARSE_ERROR' => 9,
    'U_INVALID_CHAR_FOUND' => 10,
    'U_TRUNCATED_CHAR_FOUND' => 11,
    'U_ILLEGAL_CHAR_FOUND' => 12,
    'U_INVALID_TABLE_FORMAT' => 13,
    'U_INVALID_TABLE_FILE' => 14,
    'U_BUFFER_OVERFLOW_ERROR' => 15,
    'U_UNSUPPORTED_ERROR' => 16,
    'U_RESOURCE_TYPE_MISMATCH' => 17,
    'U_ILLEGAL_ESCAPE_SEQUENCE' => 18,
    'U_UNSUPPORTED_ESCAPE_SEQUENCE' => 19,
    'U_NO_SPACE_AVAILABLE' => 20,
    'U_CE_NOT_FOUND_ERROR' => 21,
    'U_PRIMARY_TOO_LONG_ERROR' => 22,
    'U_STATE_TOO_OLD_ERROR' => 23,
    'U_TOO_MANY_ALIASES_ERROR' => 24,
    'U_ENUM_OUT_OF_SYNC_ERROR' => 25,
    'U_INVARIANT_CONVERSION_ERROR' => 26,
    'U_INVALID_STATE_ERROR' => 27,
    'U_COLLATOR_VERSION_MISMATCH' => 28,
    'U_USELESS_COLLATOR_ERROR' => 29,
    'U_NO_WRITE_PERMISSION' => 30,
    'U_STANDARD_ERROR_LIMIT' => 32,
    'U_BAD_VARIABLE_DEFINITION' => 65536,
    'U_PARSE_ERROR_START' => 65536,
    'U_MALFORMED_RULE' => 65537,
    'U_MALFORMED_SET' => 65538,
    'U_MALFORMED_SYMBOL_REFERENCE' => 65539,
    'U_MALFORMED_UNICODE_ESCAPE' => 65540,
    'U_MALFORMED_VARIABLE_DEFINITION' => 65541,
    'U_MALFORMED_VARIABLE_REFERENCE' => 65542,
    'U_MISMATCHED_SEGMENT_DELIMITERS' => 65543,
    'U_MISPLACED_ANCHOR_START' => 65544,
    'U_MISPLACED_CURSOR_OFFSET' => 65545,
    'U_MISPLACED_QUANTIFIER' => 65546,
    'U_MISSING_OPERATOR' => 65547,
    'U_MISSING_SEGMENT_CLOSE' => 65548,
    'U_MULTIPLE_ANTE_CONTEXTS' => 65549,
    'U_MULTIPLE_CURSORS' => 65550,
    'U_MULTIPLE_POST_CONTEXTS' => 65551,
    'U_TRAILING_BACKSLASH' => 65552,
    'U_UNDEFINED_SEGMENT_REFERENCE' => 65553,
    'U_UNDEFINED_VARIABLE' => 65554,
    'U_UNQUOTED_SPECIAL' => 65555,
    'U_UNTERMINATED_QUOTE' => 65556,
    'U_RULE_MASK_ERROR' => 65557,
    'U_MISPLACED_COMPOUND_FILTER' => 65558,
    'U_MULTIPLE_COMPOUND_FILTERS' => 65559,
    'U_INVALID_RBT_SYNTAX' => 65560,
    'U_INVALID_PROPERTY_PATTERN' => 65561,
    'U_MALFORMED_PRAGMA' => 65562,
    'U_UNCLOSED_SEGMENT' => 65563,
    'U_ILLEGAL_CHAR_IN_SEGMENT' => 65564,
    'U_VARIABLE_RANGE_EXHAUSTED' => 65565,
    'U_VARIABLE_RANGE_OVERLAP' => 65566,
    'U_ILLEGAL_CHARACTER' => 65567,
    'U_INTERNAL_TRANSLITERATOR_ERROR' => 65568,
    'U_INVALID_ID' => 65569,
    'U_INVALID_FUNCTION' => 65570,
    'U_PARSE_ERROR_LIMIT' => 65571,
    'U_UNEXPECTED_TOKEN' => 65792,
    'U_FMT_PARSE_ERROR_START' => 65792,
    'U_MULTIPLE_DECIMAL_SEPARATORS' => 65793,
    'U_MULTIPLE_DECIMAL_SEPERATORS' => 65793,
    'U_MULTIPLE_EXPONENTIAL_SYMBOLS' => 65794,
    'U_MALFORMED_EXPONENTIAL_PATTERN' => 65795,
    'U_MULTIPLE_PERCENT_SYMBOLS' => 65796,
    'U_MULTIPLE_PERMILL_SYMBOLS' => 65797,
    'U_MULTIPLE_PAD_SPECIFIERS' => 65798,
    'U_PATTERN_SYNTAX_ERROR' => 65799,
    'U_ILLEGAL_PAD_POSITION' => 65800,
    'U_UNMATCHED_BRACES' => 65801,
    'U_UNSUPPORTED_PROPERTY' => 65802,
    'U_UNSUPPORTED_ATTRIBUTE' => 65803,
    'U_FMT_PARSE_ERROR_LIMIT' => 65812,
    'U_BRK_INTERNAL_ERROR' => 66048,
    'U_BRK_ERROR_START' => 66048,
    'U_BRK_HEX_DIGITS_EXPECTED' => 66049,
    'U_BRK_SEMICOLON_EXPECTED' => 66050,
    'U_BRK_RULE_SYNTAX' => 66051,
    'U_BRK_UNCLOSED_SET' => 66052,
    'U_BRK_ASSIGN_ERROR' => 66053,
    'U_BRK_VARIABLE_REDFINITION' => 66054,
    'U_BRK_MISMATCHED_PAREN' => 66055,
    'U_BRK_NEW_LINE_IN_QUOTED_STRING' => 66056,
    'U_BRK_UNDEFINED_VARIABLE' => 66057,
    'U_BRK_INIT_ERROR' => 66058,
    'U_BRK_RULE_EMPTY_SET' => 66059,
    'U_BRK_UNRECOGNIZED_OPTION' => 66060,
    'U_BRK_MALFORMED_RULE_TAG' => 66061,
    'U_BRK_ERROR_LIMIT' => 66062,
    'U_REGEX_INTERNAL_ERROR' => 66304,
    'U_REGEX_ERROR_START' => 66304,
    'U_REGEX_RULE_SYNTAX' => 66305,
    'U_REGEX_INVALID_STATE' => 66306,
    'U_REGEX_BAD_ESCAPE_SEQUENCE' => 66307,
    'U_REGEX_PROPERTY_SYNTAX' => 66308,
    'U_REGEX_UNIMPLEMENTED' => 66309,
    'U_REGEX_MISMATCHED_PAREN' => 66310,
    'U_REGEX_NUMBER_TOO_BIG' => 66311,
    'U_REGEX_BAD_INTERVAL' => 66312,
    'U_REGEX_MAX_LT_MIN' => 66313,
    'U_REGEX_INVALID_BACK_REF' => 66314,
    'U_REGEX_INVALID_FLAG' => 66315,
    'U_REGEX_LOOK_BEHIND_LIMIT' => 66316,
    'U_REGEX_SET_CONTAINS_STRING' => 66317,
    'U_REGEX_ERROR_LIMIT' => 66326,
    'U_IDNA_PROHIBITED_ERROR' => 66560,
    'U_IDNA_ERROR_START' => 66560,
    'U_IDNA_UNASSIGNED_ERROR' => 66561,
    'U_IDNA_CHECK_BIDI_ERROR' => 66562,
    'U_IDNA_STD3_ASCII_RULES_ERROR' => 66563,
    'U_IDNA_ACE_PREFIX_ERROR' => 66564,
    'U_IDNA_VERIFICATION_ERROR' => 66565,
    'U_IDNA_LABEL_TOO_LONG_ERROR' => 66566,
    'U_IDNA_ZERO_LENGTH_LABEL_ERROR' => 66567,
    'U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR' => 66568,
    'U_IDNA_ERROR_LIMIT' => 66569,
    'U_STRINGPREP_PROHIBITED_ERROR' => 66560,
    'U_STRINGPREP_UNASSIGNED_ERROR' => 66561,
    'U_STRINGPREP_CHECK_BIDI_ERROR' => 66562,
    'U_ERROR_LIMIT' => 66818,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'intl.default_locale' => NULL,
    'intl.error_level' => '0',
    'intl.use_exceptions' => '0',
  ),
);
