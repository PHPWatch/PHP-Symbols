<?php

return array (
  'type' => 'class',
  'name' => 'IntlChar',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'IntlChar',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'IntlChar class (php.net)',
        'url' => 'https://www.php.net/manual/class.intlchar.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'UNICODE_VERSION' => '15.1',
    'CODEPOINT_MIN' => 0,
    'CODEPOINT_MAX' => 1114111,
    'NO_NUMERIC_VALUE' => -123456789.0,
    'PROPERTY_ALPHABETIC' => 0,
    'PROPERTY_BINARY_START' => 0,
    'PROPERTY_ASCII_HEX_DIGIT' => 1,
    'PROPERTY_BIDI_CONTROL' => 2,
    'PROPERTY_BIDI_MIRRORED' => 3,
    'PROPERTY_DASH' => 4,
    'PROPERTY_DEFAULT_IGNORABLE_CODE_POINT' => 5,
    'PROPERTY_DEPRECATED' => 6,
    'PROPERTY_DIACRITIC' => 7,
    'PROPERTY_EXTENDER' => 8,
    'PROPERTY_FULL_COMPOSITION_EXCLUSION' => 9,
    'PROPERTY_GRAPHEME_BASE' => 10,
    'PROPERTY_GRAPHEME_EXTEND' => 11,
    'PROPERTY_GRAPHEME_LINK' => 12,
    'PROPERTY_HEX_DIGIT' => 13,
    'PROPERTY_HYPHEN' => 14,
    'PROPERTY_ID_CONTINUE' => 15,
    'PROPERTY_ID_START' => 16,
    'PROPERTY_IDEOGRAPHIC' => 17,
    'PROPERTY_IDS_BINARY_OPERATOR' => 18,
    'PROPERTY_IDS_TRINARY_OPERATOR' => 19,
    'PROPERTY_JOIN_CONTROL' => 20,
    'PROPERTY_LOGICAL_ORDER_EXCEPTION' => 21,
    'PROPERTY_LOWERCASE' => 22,
    'PROPERTY_MATH' => 23,
    'PROPERTY_NONCHARACTER_CODE_POINT' => 24,
    'PROPERTY_QUOTATION_MARK' => 25,
    'PROPERTY_RADICAL' => 26,
    'PROPERTY_SOFT_DOTTED' => 27,
    'PROPERTY_TERMINAL_PUNCTUATION' => 28,
    'PROPERTY_UNIFIED_IDEOGRAPH' => 29,
    'PROPERTY_UPPERCASE' => 30,
    'PROPERTY_WHITE_SPACE' => 31,
    'PROPERTY_XID_CONTINUE' => 32,
    'PROPERTY_XID_START' => 33,
    'PROPERTY_CASE_SENSITIVE' => 34,
    'PROPERTY_S_TERM' => 35,
    'PROPERTY_VARIATION_SELECTOR' => 36,
    'PROPERTY_NFD_INERT' => 37,
    'PROPERTY_NFKD_INERT' => 38,
    'PROPERTY_NFC_INERT' => 39,
    'PROPERTY_NFKC_INERT' => 40,
    'PROPERTY_SEGMENT_STARTER' => 41,
    'PROPERTY_PATTERN_SYNTAX' => 42,
    'PROPERTY_PATTERN_WHITE_SPACE' => 43,
    'PROPERTY_POSIX_ALNUM' => 44,
    'PROPERTY_POSIX_BLANK' => 45,
    'PROPERTY_POSIX_GRAPH' => 46,
    'PROPERTY_POSIX_PRINT' => 47,
    'PROPERTY_POSIX_XDIGIT' => 48,
    'PROPERTY_CASED' => 49,
    'PROPERTY_CASE_IGNORABLE' => 50,
    'PROPERTY_CHANGES_WHEN_LOWERCASED' => 51,
    'PROPERTY_CHANGES_WHEN_UPPERCASED' => 52,
    'PROPERTY_CHANGES_WHEN_TITLECASED' => 53,
    'PROPERTY_CHANGES_WHEN_CASEFOLDED' => 54,
    'PROPERTY_CHANGES_WHEN_CASEMAPPED' => 55,
    'PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED' => 56,
    'PROPERTY_BINARY_LIMIT' => 75,
    'PROPERTY_BIDI_CLASS' => 4096,
    'PROPERTY_INT_START' => 4096,
    'PROPERTY_BLOCK' => 4097,
    'PROPERTY_CANONICAL_COMBINING_CLASS' => 4098,
    'PROPERTY_DECOMPOSITION_TYPE' => 4099,
    'PROPERTY_EAST_ASIAN_WIDTH' => 4100,
    'PROPERTY_GENERAL_CATEGORY' => 4101,
    'PROPERTY_JOINING_GROUP' => 4102,
    'PROPERTY_JOINING_TYPE' => 4103,
    'PROPERTY_LINE_BREAK' => 4104,
    'PROPERTY_NUMERIC_TYPE' => 4105,
    'PROPERTY_SCRIPT' => 4106,
    'PROPERTY_HANGUL_SYLLABLE_TYPE' => 4107,
    'PROPERTY_NFD_QUICK_CHECK' => 4108,
    'PROPERTY_NFKD_QUICK_CHECK' => 4109,
    'PROPERTY_NFC_QUICK_CHECK' => 4110,
    'PROPERTY_NFKC_QUICK_CHECK' => 4111,
    'PROPERTY_LEAD_CANONICAL_COMBINING_CLASS' => 4112,
    'PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS' => 4113,
    'PROPERTY_GRAPHEME_CLUSTER_BREAK' => 4114,
    'PROPERTY_SENTENCE_BREAK' => 4115,
    'PROPERTY_WORD_BREAK' => 4116,
    'PROPERTY_BIDI_PAIRED_BRACKET_TYPE' => 4117,
    'PROPERTY_INT_LIMIT' => 4121,
    'PROPERTY_GENERAL_CATEGORY_MASK' => 8192,
    'PROPERTY_MASK_START' => 8192,
    'PROPERTY_MASK_LIMIT' => 8193,
    'PROPERTY_NUMERIC_VALUE' => 12288,
    'PROPERTY_DOUBLE_START' => 12288,
    'PROPERTY_DOUBLE_LIMIT' => 12289,
    'PROPERTY_AGE' => 16384,
    'PROPERTY_STRING_START' => 16384,
    'PROPERTY_BIDI_MIRRORING_GLYPH' => 16385,
    'PROPERTY_CASE_FOLDING' => 16386,
    'PROPERTY_ISO_COMMENT' => 16387,
    'PROPERTY_LOWERCASE_MAPPING' => 16388,
    'PROPERTY_NAME' => 16389,
    'PROPERTY_SIMPLE_CASE_FOLDING' => 16390,
    'PROPERTY_SIMPLE_LOWERCASE_MAPPING' => 16391,
    'PROPERTY_SIMPLE_TITLECASE_MAPPING' => 16392,
    'PROPERTY_SIMPLE_UPPERCASE_MAPPING' => 16393,
    'PROPERTY_TITLECASE_MAPPING' => 16394,
    'PROPERTY_UNICODE_1_NAME' => 16395,
    'PROPERTY_UPPERCASE_MAPPING' => 16396,
    'PROPERTY_BIDI_PAIRED_BRACKET' => 16397,
    'PROPERTY_STRING_LIMIT' => 16398,
    'PROPERTY_SCRIPT_EXTENSIONS' => 28672,
    'PROPERTY_OTHER_PROPERTY_START' => 28672,
    'PROPERTY_OTHER_PROPERTY_LIMIT' => 28673,
    'PROPERTY_INVALID_CODE' => -1,
    'CHAR_CATEGORY_UNASSIGNED' => 0,
    'CHAR_CATEGORY_GENERAL_OTHER_TYPES' => 0,
    'CHAR_CATEGORY_UPPERCASE_LETTER' => 1,
    'CHAR_CATEGORY_LOWERCASE_LETTER' => 2,
    'CHAR_CATEGORY_TITLECASE_LETTER' => 3,
    'CHAR_CATEGORY_MODIFIER_LETTER' => 4,
    'CHAR_CATEGORY_OTHER_LETTER' => 5,
    'CHAR_CATEGORY_NON_SPACING_MARK' => 6,
    'CHAR_CATEGORY_ENCLOSING_MARK' => 7,
    'CHAR_CATEGORY_COMBINING_SPACING_MARK' => 8,
    'CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER' => 9,
    'CHAR_CATEGORY_LETTER_NUMBER' => 10,
    'CHAR_CATEGORY_OTHER_NUMBER' => 11,
    'CHAR_CATEGORY_SPACE_SEPARATOR' => 12,
    'CHAR_CATEGORY_LINE_SEPARATOR' => 13,
    'CHAR_CATEGORY_PARAGRAPH_SEPARATOR' => 14,
    'CHAR_CATEGORY_CONTROL_CHAR' => 15,
    'CHAR_CATEGORY_FORMAT_CHAR' => 16,
    'CHAR_CATEGORY_PRIVATE_USE_CHAR' => 17,
    'CHAR_CATEGORY_SURROGATE' => 18,
    'CHAR_CATEGORY_DASH_PUNCTUATION' => 19,
    'CHAR_CATEGORY_START_PUNCTUATION' => 20,
    'CHAR_CATEGORY_END_PUNCTUATION' => 21,
    'CHAR_CATEGORY_CONNECTOR_PUNCTUATION' => 22,
    'CHAR_CATEGORY_OTHER_PUNCTUATION' => 23,
    'CHAR_CATEGORY_MATH_SYMBOL' => 24,
    'CHAR_CATEGORY_CURRENCY_SYMBOL' => 25,
    'CHAR_CATEGORY_MODIFIER_SYMBOL' => 26,
    'CHAR_CATEGORY_OTHER_SYMBOL' => 27,
    'CHAR_CATEGORY_INITIAL_PUNCTUATION' => 28,
    'CHAR_CATEGORY_FINAL_PUNCTUATION' => 29,
    'CHAR_CATEGORY_CHAR_CATEGORY_COUNT' => 30,
    'CHAR_DIRECTION_LEFT_TO_RIGHT' => 0,
    'CHAR_DIRECTION_RIGHT_TO_LEFT' => 1,
    'CHAR_DIRECTION_EUROPEAN_NUMBER' => 2,
    'CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR' => 3,
    'CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR' => 4,
    'CHAR_DIRECTION_ARABIC_NUMBER' => 5,
    'CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR' => 6,
    'CHAR_DIRECTION_BLOCK_SEPARATOR' => 7,
    'CHAR_DIRECTION_SEGMENT_SEPARATOR' => 8,
    'CHAR_DIRECTION_WHITE_SPACE_NEUTRAL' => 9,
    'CHAR_DIRECTION_OTHER_NEUTRAL' => 10,
    'CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING' => 11,
    'CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE' => 12,
    'CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC' => 13,
    'CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING' => 14,
    'CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE' => 15,
    'CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT' => 16,
    'CHAR_DIRECTION_DIR_NON_SPACING_MARK' => 17,
    'CHAR_DIRECTION_BOUNDARY_NEUTRAL' => 18,
    'CHAR_DIRECTION_FIRST_STRONG_ISOLATE' => 19,
    'CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE' => 20,
    'CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE' => 21,
    'CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE' => 22,
    'CHAR_DIRECTION_CHAR_DIRECTION_COUNT' => 23,
    'BLOCK_CODE_NO_BLOCK' => 0,
    'BLOCK_CODE_BASIC_LATIN' => 1,
    'BLOCK_CODE_LATIN_1_SUPPLEMENT' => 2,
    'BLOCK_CODE_LATIN_EXTENDED_A' => 3,
    'BLOCK_CODE_LATIN_EXTENDED_B' => 4,
    'BLOCK_CODE_IPA_EXTENSIONS' => 5,
    'BLOCK_CODE_SPACING_MODIFIER_LETTERS' => 6,
    'BLOCK_CODE_COMBINING_DIACRITICAL_MARKS' => 7,
    'BLOCK_CODE_GREEK' => 8,
    'BLOCK_CODE_CYRILLIC' => 9,
    'BLOCK_CODE_ARMENIAN' => 10,
    'BLOCK_CODE_HEBREW' => 11,
    'BLOCK_CODE_ARABIC' => 12,
    'BLOCK_CODE_SYRIAC' => 13,
    'BLOCK_CODE_THAANA' => 14,
    'BLOCK_CODE_DEVANAGARI' => 15,
    'BLOCK_CODE_BENGALI' => 16,
    'BLOCK_CODE_GURMUKHI' => 17,
    'BLOCK_CODE_GUJARATI' => 18,
    'BLOCK_CODE_ORIYA' => 19,
    'BLOCK_CODE_TAMIL' => 20,
    'BLOCK_CODE_TELUGU' => 21,
    'BLOCK_CODE_KANNADA' => 22,
    'BLOCK_CODE_MALAYALAM' => 23,
    'BLOCK_CODE_SINHALA' => 24,
    'BLOCK_CODE_THAI' => 25,
    'BLOCK_CODE_LAO' => 26,
    'BLOCK_CODE_TIBETAN' => 27,
    'BLOCK_CODE_MYANMAR' => 28,
    'BLOCK_CODE_GEORGIAN' => 29,
    'BLOCK_CODE_HANGUL_JAMO' => 30,
    'BLOCK_CODE_ETHIOPIC' => 31,
    'BLOCK_CODE_CHEROKEE' => 32,
    'BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS' => 33,
    'BLOCK_CODE_OGHAM' => 34,
    'BLOCK_CODE_RUNIC' => 35,
    'BLOCK_CODE_KHMER' => 36,
    'BLOCK_CODE_MONGOLIAN' => 37,
    'BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL' => 38,
    'BLOCK_CODE_GREEK_EXTENDED' => 39,
    'BLOCK_CODE_GENERAL_PUNCTUATION' => 40,
    'BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS' => 41,
    'BLOCK_CODE_CURRENCY_SYMBOLS' => 42,
    'BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS' => 43,
    'BLOCK_CODE_LETTERLIKE_SYMBOLS' => 44,
    'BLOCK_CODE_NUMBER_FORMS' => 45,
    'BLOCK_CODE_ARROWS' => 46,
    'BLOCK_CODE_MATHEMATICAL_OPERATORS' => 47,
    'BLOCK_CODE_MISCELLANEOUS_TECHNICAL' => 48,
    'BLOCK_CODE_CONTROL_PICTURES' => 49,
    'BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION' => 50,
    'BLOCK_CODE_ENCLOSED_ALPHANUMERICS' => 51,
    'BLOCK_CODE_BOX_DRAWING' => 52,
    'BLOCK_CODE_BLOCK_ELEMENTS' => 53,
    'BLOCK_CODE_GEOMETRIC_SHAPES' => 54,
    'BLOCK_CODE_MISCELLANEOUS_SYMBOLS' => 55,
    'BLOCK_CODE_DINGBATS' => 56,
    'BLOCK_CODE_BRAILLE_PATTERNS' => 57,
    'BLOCK_CODE_CJK_RADICALS_SUPPLEMENT' => 58,
    'BLOCK_CODE_KANGXI_RADICALS' => 59,
    'BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS' => 60,
    'BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION' => 61,
    'BLOCK_CODE_HIRAGANA' => 62,
    'BLOCK_CODE_KATAKANA' => 63,
    'BLOCK_CODE_BOPOMOFO' => 64,
    'BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO' => 65,
    'BLOCK_CODE_KANBUN' => 66,
    'BLOCK_CODE_BOPOMOFO_EXTENDED' => 67,
    'BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS' => 68,
    'BLOCK_CODE_CJK_COMPATIBILITY' => 69,
    'BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A' => 70,
    'BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS' => 71,
    'BLOCK_CODE_YI_SYLLABLES' => 72,
    'BLOCK_CODE_YI_RADICALS' => 73,
    'BLOCK_CODE_HANGUL_SYLLABLES' => 74,
    'BLOCK_CODE_HIGH_SURROGATES' => 75,
    'BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES' => 76,
    'BLOCK_CODE_LOW_SURROGATES' => 77,
    'BLOCK_CODE_PRIVATE_USE_AREA' => 78,
    'BLOCK_CODE_PRIVATE_USE' => 78,
    'BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS' => 79,
    'BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS' => 80,
    'BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A' => 81,
    'BLOCK_CODE_COMBINING_HALF_MARKS' => 82,
    'BLOCK_CODE_CJK_COMPATIBILITY_FORMS' => 83,
    'BLOCK_CODE_SMALL_FORM_VARIANTS' => 84,
    'BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B' => 85,
    'BLOCK_CODE_SPECIALS' => 86,
    'BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS' => 87,
    'BLOCK_CODE_OLD_ITALIC' => 88,
    'BLOCK_CODE_GOTHIC' => 89,
    'BLOCK_CODE_DESERET' => 90,
    'BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS' => 91,
    'BLOCK_CODE_MUSICAL_SYMBOLS' => 92,
    'BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS' => 93,
    'BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B' => 94,
    'BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT' => 95,
    'BLOCK_CODE_TAGS' => 96,
    'BLOCK_CODE_CYRILLIC_SUPPLEMENT' => 97,
    'BLOCK_CODE_CYRILLIC_SUPPLEMENTARY' => 97,
    'BLOCK_CODE_TAGALOG' => 98,
    'BLOCK_CODE_HANUNOO' => 99,
    'BLOCK_CODE_BUHID' => 100,
    'BLOCK_CODE_TAGBANWA' => 101,
    'BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A' => 102,
    'BLOCK_CODE_SUPPLEMENTAL_ARROWS_A' => 103,
    'BLOCK_CODE_SUPPLEMENTAL_ARROWS_B' => 104,
    'BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B' => 105,
    'BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS' => 106,
    'BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS' => 107,
    'BLOCK_CODE_VARIATION_SELECTORS' => 108,
    'BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A' => 109,
    'BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B' => 110,
    'BLOCK_CODE_LIMBU' => 111,
    'BLOCK_CODE_TAI_LE' => 112,
    'BLOCK_CODE_KHMER_SYMBOLS' => 113,
    'BLOCK_CODE_PHONETIC_EXTENSIONS' => 114,
    'BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS' => 115,
    'BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS' => 116,
    'BLOCK_CODE_LINEAR_B_SYLLABARY' => 117,
    'BLOCK_CODE_LINEAR_B_IDEOGRAMS' => 118,
    'BLOCK_CODE_AEGEAN_NUMBERS' => 119,
    'BLOCK_CODE_UGARITIC' => 120,
    'BLOCK_CODE_SHAVIAN' => 121,
    'BLOCK_CODE_OSMANYA' => 122,
    'BLOCK_CODE_CYPRIOT_SYLLABARY' => 123,
    'BLOCK_CODE_TAI_XUAN_JING_SYMBOLS' => 124,
    'BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT' => 125,
    'BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION' => 126,
    'BLOCK_CODE_ANCIENT_GREEK_NUMBERS' => 127,
    'BLOCK_CODE_ARABIC_SUPPLEMENT' => 128,
    'BLOCK_CODE_BUGINESE' => 129,
    'BLOCK_CODE_CJK_STROKES' => 130,
    'BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT' => 131,
    'BLOCK_CODE_COPTIC' => 132,
    'BLOCK_CODE_ETHIOPIC_EXTENDED' => 133,
    'BLOCK_CODE_ETHIOPIC_SUPPLEMENT' => 134,
    'BLOCK_CODE_GEORGIAN_SUPPLEMENT' => 135,
    'BLOCK_CODE_GLAGOLITIC' => 136,
    'BLOCK_CODE_KHAROSHTHI' => 137,
    'BLOCK_CODE_MODIFIER_TONE_LETTERS' => 138,
    'BLOCK_CODE_NEW_TAI_LUE' => 139,
    'BLOCK_CODE_OLD_PERSIAN' => 140,
    'BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT' => 141,
    'BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION' => 142,
    'BLOCK_CODE_SYLOTI_NAGRI' => 143,
    'BLOCK_CODE_TIFINAGH' => 144,
    'BLOCK_CODE_VERTICAL_FORMS' => 145,
    'BLOCK_CODE_NKO' => 146,
    'BLOCK_CODE_BALINESE' => 147,
    'BLOCK_CODE_LATIN_EXTENDED_C' => 148,
    'BLOCK_CODE_LATIN_EXTENDED_D' => 149,
    'BLOCK_CODE_PHAGS_PA' => 150,
    'BLOCK_CODE_PHOENICIAN' => 151,
    'BLOCK_CODE_CUNEIFORM' => 152,
    'BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION' => 153,
    'BLOCK_CODE_COUNTING_ROD_NUMERALS' => 154,
    'BLOCK_CODE_SUNDANESE' => 155,
    'BLOCK_CODE_LEPCHA' => 156,
    'BLOCK_CODE_OL_CHIKI' => 157,
    'BLOCK_CODE_CYRILLIC_EXTENDED_A' => 158,
    'BLOCK_CODE_VAI' => 159,
    'BLOCK_CODE_CYRILLIC_EXTENDED_B' => 160,
    'BLOCK_CODE_SAURASHTRA' => 161,
    'BLOCK_CODE_KAYAH_LI' => 162,
    'BLOCK_CODE_REJANG' => 163,
    'BLOCK_CODE_CHAM' => 164,
    'BLOCK_CODE_ANCIENT_SYMBOLS' => 165,
    'BLOCK_CODE_PHAISTOS_DISC' => 166,
    'BLOCK_CODE_LYCIAN' => 167,
    'BLOCK_CODE_CARIAN' => 168,
    'BLOCK_CODE_LYDIAN' => 169,
    'BLOCK_CODE_MAHJONG_TILES' => 170,
    'BLOCK_CODE_DOMINO_TILES' => 171,
    'BLOCK_CODE_SAMARITAN' => 172,
    'BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED' => 173,
    'BLOCK_CODE_TAI_THAM' => 174,
    'BLOCK_CODE_VEDIC_EXTENSIONS' => 175,
    'BLOCK_CODE_LISU' => 176,
    'BLOCK_CODE_BAMUM' => 177,
    'BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS' => 178,
    'BLOCK_CODE_DEVANAGARI_EXTENDED' => 179,
    'BLOCK_CODE_HANGUL_JAMO_EXTENDED_A' => 180,
    'BLOCK_CODE_JAVANESE' => 181,
    'BLOCK_CODE_MYANMAR_EXTENDED_A' => 182,
    'BLOCK_CODE_TAI_VIET' => 183,
    'BLOCK_CODE_MEETEI_MAYEK' => 184,
    'BLOCK_CODE_HANGUL_JAMO_EXTENDED_B' => 185,
    'BLOCK_CODE_IMPERIAL_ARAMAIC' => 186,
    'BLOCK_CODE_OLD_SOUTH_ARABIAN' => 187,
    'BLOCK_CODE_AVESTAN' => 188,
    'BLOCK_CODE_INSCRIPTIONAL_PARTHIAN' => 189,
    'BLOCK_CODE_INSCRIPTIONAL_PAHLAVI' => 190,
    'BLOCK_CODE_OLD_TURKIC' => 191,
    'BLOCK_CODE_RUMI_NUMERAL_SYMBOLS' => 192,
    'BLOCK_CODE_KAITHI' => 193,
    'BLOCK_CODE_EGYPTIAN_HIEROGLYPHS' => 194,
    'BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT' => 195,
    'BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT' => 196,
    'BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C' => 197,
    'BLOCK_CODE_MANDAIC' => 198,
    'BLOCK_CODE_BATAK' => 199,
    'BLOCK_CODE_ETHIOPIC_EXTENDED_A' => 200,
    'BLOCK_CODE_BRAHMI' => 201,
    'BLOCK_CODE_BAMUM_SUPPLEMENT' => 202,
    'BLOCK_CODE_KANA_SUPPLEMENT' => 203,
    'BLOCK_CODE_PLAYING_CARDS' => 204,
    'BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS' => 205,
    'BLOCK_CODE_EMOTICONS' => 206,
    'BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS' => 207,
    'BLOCK_CODE_ALCHEMICAL_SYMBOLS' => 208,
    'BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D' => 209,
    'BLOCK_CODE_ARABIC_EXTENDED_A' => 210,
    'BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS' => 211,
    'BLOCK_CODE_CHAKMA' => 212,
    'BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS' => 213,
    'BLOCK_CODE_MEROITIC_CURSIVE' => 214,
    'BLOCK_CODE_MEROITIC_HIEROGLYPHS' => 215,
    'BLOCK_CODE_MIAO' => 216,
    'BLOCK_CODE_SHARADA' => 217,
    'BLOCK_CODE_SORA_SOMPENG' => 218,
    'BLOCK_CODE_SUNDANESE_SUPPLEMENT' => 219,
    'BLOCK_CODE_TAKRI' => 220,
    'BLOCK_CODE_BASSA_VAH' => 221,
    'BLOCK_CODE_CAUCASIAN_ALBANIAN' => 222,
    'BLOCK_CODE_COPTIC_EPACT_NUMBERS' => 223,
    'BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_EXTENDED' => 224,
    'BLOCK_CODE_DUPLOYAN' => 225,
    'BLOCK_CODE_ELBASAN' => 226,
    'BLOCK_CODE_GEOMETRIC_SHAPES_EXTENDED' => 227,
    'BLOCK_CODE_GRANTHA' => 228,
    'BLOCK_CODE_KHOJKI' => 229,
    'BLOCK_CODE_KHUDAWADI' => 230,
    'BLOCK_CODE_LATIN_EXTENDED_E' => 231,
    'BLOCK_CODE_LINEAR_A' => 232,
    'BLOCK_CODE_MAHAJANI' => 233,
    'BLOCK_CODE_MANICHAEAN' => 234,
    'BLOCK_CODE_MENDE_KIKAKUI' => 235,
    'BLOCK_CODE_MODI' => 236,
    'BLOCK_CODE_MRO' => 237,
    'BLOCK_CODE_MYANMAR_EXTENDED_B' => 238,
    'BLOCK_CODE_NABATAEAN' => 239,
    'BLOCK_CODE_OLD_NORTH_ARABIAN' => 240,
    'BLOCK_CODE_OLD_PERMIC' => 241,
    'BLOCK_CODE_ORNAMENTAL_DINGBATS' => 242,
    'BLOCK_CODE_PAHAWH_HMONG' => 243,
    'BLOCK_CODE_PALMYRENE' => 244,
    'BLOCK_CODE_PAU_CIN_HAU' => 245,
    'BLOCK_CODE_PSALTER_PAHLAVI' => 246,
    'BLOCK_CODE_SHORTHAND_FORMAT_CONTROLS' => 247,
    'BLOCK_CODE_SIDDHAM' => 248,
    'BLOCK_CODE_SINHALA_ARCHAIC_NUMBERS' => 249,
    'BLOCK_CODE_SUPPLEMENTAL_ARROWS_C' => 250,
    'BLOCK_CODE_TIRHUTA' => 251,
    'BLOCK_CODE_WARANG_CITI' => 252,
    'BLOCK_CODE_COUNT' => 329,
    'BLOCK_CODE_INVALID_CODE' => -1,
    'BPT_NONE' => 0,
    'BPT_OPEN' => 1,
    'BPT_CLOSE' => 2,
    'BPT_COUNT' => 3,
    'EA_NEUTRAL' => 0,
    'EA_AMBIGUOUS' => 1,
    'EA_HALFWIDTH' => 2,
    'EA_FULLWIDTH' => 3,
    'EA_NARROW' => 4,
    'EA_WIDE' => 5,
    'EA_COUNT' => 6,
    'UNICODE_CHAR_NAME' => 0,
    'UNICODE_10_CHAR_NAME' => 1,
    'EXTENDED_CHAR_NAME' => 2,
    'CHAR_NAME_ALIAS' => 3,
    'CHAR_NAME_CHOICE_COUNT' => 4,
    'SHORT_PROPERTY_NAME' => 0,
    'LONG_PROPERTY_NAME' => 1,
    'PROPERTY_NAME_CHOICE_COUNT' => 2,
    'DT_NONE' => 0,
    'DT_CANONICAL' => 1,
    'DT_COMPAT' => 2,
    'DT_CIRCLE' => 3,
    'DT_FINAL' => 4,
    'DT_FONT' => 5,
    'DT_FRACTION' => 6,
    'DT_INITIAL' => 7,
    'DT_ISOLATED' => 8,
    'DT_MEDIAL' => 9,
    'DT_NARROW' => 10,
    'DT_NOBREAK' => 11,
    'DT_SMALL' => 12,
    'DT_SQUARE' => 13,
    'DT_SUB' => 14,
    'DT_SUPER' => 15,
    'DT_VERTICAL' => 16,
    'DT_WIDE' => 17,
    'DT_COUNT' => 18,
    'JT_NON_JOINING' => 0,
    'JT_JOIN_CAUSING' => 1,
    'JT_DUAL_JOINING' => 2,
    'JT_LEFT_JOINING' => 3,
    'JT_RIGHT_JOINING' => 4,
    'JT_TRANSPARENT' => 5,
    'JT_COUNT' => 6,
    'JG_NO_JOINING_GROUP' => 0,
    'JG_AIN' => 1,
    'JG_ALAPH' => 2,
    'JG_ALEF' => 3,
    'JG_BEH' => 4,
    'JG_BETH' => 5,
    'JG_DAL' => 6,
    'JG_DALATH_RISH' => 7,
    'JG_E' => 8,
    'JG_FEH' => 9,
    'JG_FINAL_SEMKATH' => 10,
    'JG_GAF' => 11,
    'JG_GAMAL' => 12,
    'JG_HAH' => 13,
    'JG_TEH_MARBUTA_GOAL' => 14,
    'JG_HAMZA_ON_HEH_GOAL' => 14,
    'JG_HE' => 15,
    'JG_HEH' => 16,
    'JG_HEH_GOAL' => 17,
    'JG_HETH' => 18,
    'JG_KAF' => 19,
    'JG_KAPH' => 20,
    'JG_KNOTTED_HEH' => 21,
    'JG_LAM' => 22,
    'JG_LAMADH' => 23,
    'JG_MEEM' => 24,
    'JG_MIM' => 25,
    'JG_NOON' => 26,
    'JG_NUN' => 27,
    'JG_PE' => 28,
    'JG_QAF' => 29,
    'JG_QAPH' => 30,
    'JG_REH' => 31,
    'JG_REVERSED_PE' => 32,
    'JG_SAD' => 33,
    'JG_SADHE' => 34,
    'JG_SEEN' => 35,
    'JG_SEMKATH' => 36,
    'JG_SHIN' => 37,
    'JG_SWASH_KAF' => 38,
    'JG_SYRIAC_WAW' => 39,
    'JG_TAH' => 40,
    'JG_TAW' => 41,
    'JG_TEH_MARBUTA' => 42,
    'JG_TETH' => 43,
    'JG_WAW' => 44,
    'JG_YEH' => 45,
    'JG_YEH_BARREE' => 46,
    'JG_YEH_WITH_TAIL' => 47,
    'JG_YUDH' => 48,
    'JG_YUDH_HE' => 49,
    'JG_ZAIN' => 50,
    'JG_FE' => 51,
    'JG_KHAPH' => 52,
    'JG_ZHAIN' => 53,
    'JG_BURUSHASKI_YEH_BARREE' => 54,
    'JG_FARSI_YEH' => 55,
    'JG_NYA' => 56,
    'JG_ROHINGYA_YEH' => 57,
    'JG_MANICHAEAN_ALEPH' => 58,
    'JG_MANICHAEAN_AYIN' => 59,
    'JG_MANICHAEAN_BETH' => 60,
    'JG_MANICHAEAN_DALETH' => 61,
    'JG_MANICHAEAN_DHAMEDH' => 62,
    'JG_MANICHAEAN_FIVE' => 63,
    'JG_MANICHAEAN_GIMEL' => 64,
    'JG_MANICHAEAN_HETH' => 65,
    'JG_MANICHAEAN_HUNDRED' => 66,
    'JG_MANICHAEAN_KAPH' => 67,
    'JG_MANICHAEAN_LAMEDH' => 68,
    'JG_MANICHAEAN_MEM' => 69,
    'JG_MANICHAEAN_NUN' => 70,
    'JG_MANICHAEAN_ONE' => 71,
    'JG_MANICHAEAN_PE' => 72,
    'JG_MANICHAEAN_QOPH' => 73,
    'JG_MANICHAEAN_RESH' => 74,
    'JG_MANICHAEAN_SADHE' => 75,
    'JG_MANICHAEAN_SAMEKH' => 76,
    'JG_MANICHAEAN_TAW' => 77,
    'JG_MANICHAEAN_TEN' => 78,
    'JG_MANICHAEAN_TETH' => 79,
    'JG_MANICHAEAN_THAMEDH' => 80,
    'JG_MANICHAEAN_TWENTY' => 81,
    'JG_MANICHAEAN_WAW' => 82,
    'JG_MANICHAEAN_YODH' => 83,
    'JG_MANICHAEAN_ZAYIN' => 84,
    'JG_STRAIGHT_WAW' => 85,
    'JG_COUNT' => 104,
    'GCB_OTHER' => 0,
    'GCB_CONTROL' => 1,
    'GCB_CR' => 2,
    'GCB_EXTEND' => 3,
    'GCB_L' => 4,
    'GCB_LF' => 5,
    'GCB_LV' => 6,
    'GCB_LVT' => 7,
    'GCB_T' => 8,
    'GCB_V' => 9,
    'GCB_SPACING_MARK' => 10,
    'GCB_PREPEND' => 11,
    'GCB_REGIONAL_INDICATOR' => 12,
    'GCB_COUNT' => 18,
    'WB_OTHER' => 0,
    'WB_ALETTER' => 1,
    'WB_FORMAT' => 2,
    'WB_KATAKANA' => 3,
    'WB_MIDLETTER' => 4,
    'WB_MIDNUM' => 5,
    'WB_NUMERIC' => 6,
    'WB_EXTENDNUMLET' => 7,
    'WB_CR' => 8,
    'WB_EXTEND' => 9,
    'WB_LF' => 10,
    'WB_MIDNUMLET' => 11,
    'WB_NEWLINE' => 12,
    'WB_REGIONAL_INDICATOR' => 13,
    'WB_HEBREW_LETTER' => 14,
    'WB_SINGLE_QUOTE' => 15,
    'WB_DOUBLE_QUOTE' => 16,
    'WB_COUNT' => 23,
    'SB_OTHER' => 0,
    'SB_ATERM' => 1,
    'SB_CLOSE' => 2,
    'SB_FORMAT' => 3,
    'SB_LOWER' => 4,
    'SB_NUMERIC' => 5,
    'SB_OLETTER' => 6,
    'SB_SEP' => 7,
    'SB_SP' => 8,
    'SB_STERM' => 9,
    'SB_UPPER' => 10,
    'SB_CR' => 11,
    'SB_EXTEND' => 12,
    'SB_LF' => 13,
    'SB_SCONTINUE' => 14,
    'SB_COUNT' => 15,
    'LB_UNKNOWN' => 0,
    'LB_AMBIGUOUS' => 1,
    'LB_ALPHABETIC' => 2,
    'LB_BREAK_BOTH' => 3,
    'LB_BREAK_AFTER' => 4,
    'LB_BREAK_BEFORE' => 5,
    'LB_MANDATORY_BREAK' => 6,
    'LB_CONTINGENT_BREAK' => 7,
    'LB_CLOSE_PUNCTUATION' => 8,
    'LB_COMBINING_MARK' => 9,
    'LB_CARRIAGE_RETURN' => 10,
    'LB_EXCLAMATION' => 11,
    'LB_GLUE' => 12,
    'LB_HYPHEN' => 13,
    'LB_IDEOGRAPHIC' => 14,
    'LB_INSEPARABLE' => 15,
    'LB_INSEPERABLE' => 15,
    'LB_INFIX_NUMERIC' => 16,
    'LB_LINE_FEED' => 17,
    'LB_NONSTARTER' => 18,
    'LB_NUMERIC' => 19,
    'LB_OPEN_PUNCTUATION' => 20,
    'LB_POSTFIX_NUMERIC' => 21,
    'LB_PREFIX_NUMERIC' => 22,
    'LB_QUOTATION' => 23,
    'LB_COMPLEX_CONTEXT' => 24,
    'LB_SURROGATE' => 25,
    'LB_SPACE' => 26,
    'LB_BREAK_SYMBOLS' => 27,
    'LB_ZWSPACE' => 28,
    'LB_NEXT_LINE' => 29,
    'LB_WORD_JOINER' => 30,
    'LB_H2' => 31,
    'LB_H3' => 32,
    'LB_JL' => 33,
    'LB_JT' => 34,
    'LB_JV' => 35,
    'LB_CLOSE_PARENTHESIS' => 36,
    'LB_CONDITIONAL_JAPANESE_STARTER' => 37,
    'LB_HEBREW_LETTER' => 38,
    'LB_REGIONAL_INDICATOR' => 39,
    'LB_COUNT' => 48,
    'NT_NONE' => 0,
    'NT_DECIMAL' => 1,
    'NT_DIGIT' => 2,
    'NT_NUMERIC' => 3,
    'NT_COUNT' => 4,
    'HST_NOT_APPLICABLE' => 0,
    'HST_LEADING_JAMO' => 1,
    'HST_VOWEL_JAMO' => 2,
    'HST_TRAILING_JAMO' => 3,
    'HST_LV_SYLLABLE' => 4,
    'HST_LVT_SYLLABLE' => 5,
    'HST_COUNT' => 6,
    'FOLD_CASE_DEFAULT' => 0,
    'FOLD_CASE_EXCLUDE_SPECIAL_I' => 1,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'hasBinaryProperty' => 
    array (
      'name' => 'hasBinaryProperty',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'property' => 
        array (
          'position' => 1,
          'name' => 'property',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'charAge' => 
    array (
      'name' => 'charAge',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'charDigitValue' => 
    array (
      'name' => 'charDigitValue',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'charDirection' => 
    array (
      'name' => 'charDirection',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'charFromName' => 
    array (
      'name' => 'charFromName',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlChar::UNICODE_CHAR_NAME',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'charMirror' => 
    array (
      'name' => 'charMirror',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'charName' => 
    array (
      'name' => 'charName',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlChar::UNICODE_CHAR_NAME',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'charType' => 
    array (
      'name' => 'charType',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'chr' => 
    array (
      'name' => 'chr',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'digit' => 
    array (
      'name' => 'digit',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'base' => 
        array (
          'position' => 1,
          'name' => 'base',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 10,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'enumCharNames' => 
    array (
      'name' => 'enumCharNames',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'start' => 
        array (
          'position' => 0,
          'name' => 'start',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'end' => 
        array (
          'position' => 1,
          'name' => 'end',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'callback' => 
        array (
          'position' => 2,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 3,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlChar::UNICODE_CHAR_NAME',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'enumCharTypes' => 
    array (
      'name' => 'enumCharTypes',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'foldCase' => 
    array (
      'name' => 'foldCase',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 1,
          'name' => 'options',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlChar::FOLD_CASE_DEFAULT',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'forDigit' => 
    array (
      'name' => 'forDigit',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'digit' => 
        array (
          'position' => 0,
          'name' => 'digit',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'base' => 
        array (
          'position' => 1,
          'name' => 'base',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 10,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getBidiPairedBracket' => 
    array (
      'name' => 'getBidiPairedBracket',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getBlockCode' => 
    array (
      'name' => 'getBlockCode',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getCombiningClass' => 
    array (
      'name' => 'getCombiningClass',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFC_NFKC_Closure' => 
    array (
      'name' => 'getFC_NFKC_Closure',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getIntPropertyMaxValue' => 
    array (
      'name' => 'getIntPropertyMaxValue',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'property' => 
        array (
          'position' => 0,
          'name' => 'property',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getIntPropertyMinValue' => 
    array (
      'name' => 'getIntPropertyMinValue',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'property' => 
        array (
          'position' => 0,
          'name' => 'property',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getIntPropertyValue' => 
    array (
      'name' => 'getIntPropertyValue',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'property' => 
        array (
          'position' => 1,
          'name' => 'property',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getNumericValue' => 
    array (
      'name' => 'getNumericValue',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPropertyEnum' => 
    array (
      'name' => 'getPropertyEnum',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'alias' => 
        array (
          'position' => 0,
          'name' => 'alias',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPropertyName' => 
    array (
      'name' => 'getPropertyName',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'property' => 
        array (
          'position' => 0,
          'name' => 'property',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 1,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlChar::LONG_PROPERTY_NAME',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPropertyValueEnum' => 
    array (
      'name' => 'getPropertyValueEnum',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'property' => 
        array (
          'position' => 0,
          'name' => 'property',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'name' => 
        array (
          'position' => 1,
          'name' => 'name',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPropertyValueName' => 
    array (
      'name' => 'getPropertyValueName',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'property' => 
        array (
          'position' => 0,
          'name' => 'property',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'type' => 
        array (
          'position' => 2,
          'name' => 'type',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 1,
          'has_default_value_constant' => true,
          'default_value_constant' => 'IntlChar::LONG_PROPERTY_NAME',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getUnicodeVersion' => 
    array (
      'name' => 'getUnicodeVersion',
      'class' => 'IntlChar',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isalnum' => 
    array (
      'name' => 'isalnum',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isalpha' => 
    array (
      'name' => 'isalpha',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isbase' => 
    array (
      'name' => 'isbase',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isblank' => 
    array (
      'name' => 'isblank',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'iscntrl' => 
    array (
      'name' => 'iscntrl',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isdefined' => 
    array (
      'name' => 'isdefined',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isdigit' => 
    array (
      'name' => 'isdigit',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isgraph' => 
    array (
      'name' => 'isgraph',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isIDIgnorable' => 
    array (
      'name' => 'isIDIgnorable',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isIDPart' => 
    array (
      'name' => 'isIDPart',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isIDStart' => 
    array (
      'name' => 'isIDStart',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isISOControl' => 
    array (
      'name' => 'isISOControl',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isJavaIDPart' => 
    array (
      'name' => 'isJavaIDPart',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isJavaIDStart' => 
    array (
      'name' => 'isJavaIDStart',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isJavaSpaceChar' => 
    array (
      'name' => 'isJavaSpaceChar',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'islower' => 
    array (
      'name' => 'islower',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isMirrored' => 
    array (
      'name' => 'isMirrored',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isprint' => 
    array (
      'name' => 'isprint',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'ispunct' => 
    array (
      'name' => 'ispunct',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isspace' => 
    array (
      'name' => 'isspace',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'istitle' => 
    array (
      'name' => 'istitle',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isUAlphabetic' => 
    array (
      'name' => 'isUAlphabetic',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isULowercase' => 
    array (
      'name' => 'isULowercase',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isupper' => 
    array (
      'name' => 'isupper',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isUUppercase' => 
    array (
      'name' => 'isUUppercase',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isUWhiteSpace' => 
    array (
      'name' => 'isUWhiteSpace',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isWhitespace' => 
    array (
      'name' => 'isWhitespace',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isxdigit' => 
    array (
      'name' => 'isxdigit',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'ord' => 
    array (
      'name' => 'ord',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'character' => 
        array (
          'position' => 0,
          'name' => 'character',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'tolower' => 
    array (
      'name' => 'tolower',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'totitle' => 
    array (
      'name' => 'totitle',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toupper' => 
    array (
      'name' => 'toupper',
      'class' => 'IntlChar',
      'parameters' => 
      array (
        'codepoint' => 
        array (
          'position' => 0,
          'name' => 'codepoint',
          'type' => 'string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:intl> class IntlChar ] {

  - Constants [663] {
    Constant [ public string UNICODE_VERSION ] { 15.1 }
    Constant [ public int CODEPOINT_MIN ] { 0 }
    Constant [ public int CODEPOINT_MAX ] { 1114111 }
    Constant [ public float NO_NUMERIC_VALUE ] { -123456789 }
    Constant [ public int PROPERTY_ALPHABETIC ] { 0 }
    Constant [ public int PROPERTY_BINARY_START ] { 0 }
    Constant [ public int PROPERTY_ASCII_HEX_DIGIT ] { 1 }
    Constant [ public int PROPERTY_BIDI_CONTROL ] { 2 }
    Constant [ public int PROPERTY_BIDI_MIRRORED ] { 3 }
    Constant [ public int PROPERTY_DASH ] { 4 }
    Constant [ public int PROPERTY_DEFAULT_IGNORABLE_CODE_POINT ] { 5 }
    Constant [ public int PROPERTY_DEPRECATED ] { 6 }
    Constant [ public int PROPERTY_DIACRITIC ] { 7 }
    Constant [ public int PROPERTY_EXTENDER ] { 8 }
    Constant [ public int PROPERTY_FULL_COMPOSITION_EXCLUSION ] { 9 }
    Constant [ public int PROPERTY_GRAPHEME_BASE ] { 10 }
    Constant [ public int PROPERTY_GRAPHEME_EXTEND ] { 11 }
    Constant [ public int PROPERTY_GRAPHEME_LINK ] { 12 }
    Constant [ public int PROPERTY_HEX_DIGIT ] { 13 }
    Constant [ public int PROPERTY_HYPHEN ] { 14 }
    Constant [ public int PROPERTY_ID_CONTINUE ] { 15 }
    Constant [ public int PROPERTY_ID_START ] { 16 }
    Constant [ public int PROPERTY_IDEOGRAPHIC ] { 17 }
    Constant [ public int PROPERTY_IDS_BINARY_OPERATOR ] { 18 }
    Constant [ public int PROPERTY_IDS_TRINARY_OPERATOR ] { 19 }
    Constant [ public int PROPERTY_JOIN_CONTROL ] { 20 }
    Constant [ public int PROPERTY_LOGICAL_ORDER_EXCEPTION ] { 21 }
    Constant [ public int PROPERTY_LOWERCASE ] { 22 }
    Constant [ public int PROPERTY_MATH ] { 23 }
    Constant [ public int PROPERTY_NONCHARACTER_CODE_POINT ] { 24 }
    Constant [ public int PROPERTY_QUOTATION_MARK ] { 25 }
    Constant [ public int PROPERTY_RADICAL ] { 26 }
    Constant [ public int PROPERTY_SOFT_DOTTED ] { 27 }
    Constant [ public int PROPERTY_TERMINAL_PUNCTUATION ] { 28 }
    Constant [ public int PROPERTY_UNIFIED_IDEOGRAPH ] { 29 }
    Constant [ public int PROPERTY_UPPERCASE ] { 30 }
    Constant [ public int PROPERTY_WHITE_SPACE ] { 31 }
    Constant [ public int PROPERTY_XID_CONTINUE ] { 32 }
    Constant [ public int PROPERTY_XID_START ] { 33 }
    Constant [ public int PROPERTY_CASE_SENSITIVE ] { 34 }
    Constant [ public int PROPERTY_S_TERM ] { 35 }
    Constant [ public int PROPERTY_VARIATION_SELECTOR ] { 36 }
    Constant [ public int PROPERTY_NFD_INERT ] { 37 }
    Constant [ public int PROPERTY_NFKD_INERT ] { 38 }
    Constant [ public int PROPERTY_NFC_INERT ] { 39 }
    Constant [ public int PROPERTY_NFKC_INERT ] { 40 }
    Constant [ public int PROPERTY_SEGMENT_STARTER ] { 41 }
    Constant [ public int PROPERTY_PATTERN_SYNTAX ] { 42 }
    Constant [ public int PROPERTY_PATTERN_WHITE_SPACE ] { 43 }
    Constant [ public int PROPERTY_POSIX_ALNUM ] { 44 }
    Constant [ public int PROPERTY_POSIX_BLANK ] { 45 }
    Constant [ public int PROPERTY_POSIX_GRAPH ] { 46 }
    Constant [ public int PROPERTY_POSIX_PRINT ] { 47 }
    Constant [ public int PROPERTY_POSIX_XDIGIT ] { 48 }
    Constant [ public int PROPERTY_CASED ] { 49 }
    Constant [ public int PROPERTY_CASE_IGNORABLE ] { 50 }
    Constant [ public int PROPERTY_CHANGES_WHEN_LOWERCASED ] { 51 }
    Constant [ public int PROPERTY_CHANGES_WHEN_UPPERCASED ] { 52 }
    Constant [ public int PROPERTY_CHANGES_WHEN_TITLECASED ] { 53 }
    Constant [ public int PROPERTY_CHANGES_WHEN_CASEFOLDED ] { 54 }
    Constant [ public int PROPERTY_CHANGES_WHEN_CASEMAPPED ] { 55 }
    Constant [ public int PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED ] { 56 }
    Constant [ public int PROPERTY_BINARY_LIMIT ] { 75 }
    Constant [ public int PROPERTY_BIDI_CLASS ] { 4096 }
    Constant [ public int PROPERTY_INT_START ] { 4096 }
    Constant [ public int PROPERTY_BLOCK ] { 4097 }
    Constant [ public int PROPERTY_CANONICAL_COMBINING_CLASS ] { 4098 }
    Constant [ public int PROPERTY_DECOMPOSITION_TYPE ] { 4099 }
    Constant [ public int PROPERTY_EAST_ASIAN_WIDTH ] { 4100 }
    Constant [ public int PROPERTY_GENERAL_CATEGORY ] { 4101 }
    Constant [ public int PROPERTY_JOINING_GROUP ] { 4102 }
    Constant [ public int PROPERTY_JOINING_TYPE ] { 4103 }
    Constant [ public int PROPERTY_LINE_BREAK ] { 4104 }
    Constant [ public int PROPERTY_NUMERIC_TYPE ] { 4105 }
    Constant [ public int PROPERTY_SCRIPT ] { 4106 }
    Constant [ public int PROPERTY_HANGUL_SYLLABLE_TYPE ] { 4107 }
    Constant [ public int PROPERTY_NFD_QUICK_CHECK ] { 4108 }
    Constant [ public int PROPERTY_NFKD_QUICK_CHECK ] { 4109 }
    Constant [ public int PROPERTY_NFC_QUICK_CHECK ] { 4110 }
    Constant [ public int PROPERTY_NFKC_QUICK_CHECK ] { 4111 }
    Constant [ public int PROPERTY_LEAD_CANONICAL_COMBINING_CLASS ] { 4112 }
    Constant [ public int PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS ] { 4113 }
    Constant [ public int PROPERTY_GRAPHEME_CLUSTER_BREAK ] { 4114 }
    Constant [ public int PROPERTY_SENTENCE_BREAK ] { 4115 }
    Constant [ public int PROPERTY_WORD_BREAK ] { 4116 }
    Constant [ public int PROPERTY_BIDI_PAIRED_BRACKET_TYPE ] { 4117 }
    Constant [ public int PROPERTY_INT_LIMIT ] { 4121 }
    Constant [ public int PROPERTY_GENERAL_CATEGORY_MASK ] { 8192 }
    Constant [ public int PROPERTY_MASK_START ] { 8192 }
    Constant [ public int PROPERTY_MASK_LIMIT ] { 8193 }
    Constant [ public int PROPERTY_NUMERIC_VALUE ] { 12288 }
    Constant [ public int PROPERTY_DOUBLE_START ] { 12288 }
    Constant [ public int PROPERTY_DOUBLE_LIMIT ] { 12289 }
    Constant [ public int PROPERTY_AGE ] { 16384 }
    Constant [ public int PROPERTY_STRING_START ] { 16384 }
    Constant [ public int PROPERTY_BIDI_MIRRORING_GLYPH ] { 16385 }
    Constant [ public int PROPERTY_CASE_FOLDING ] { 16386 }
    Constant [ public int PROPERTY_ISO_COMMENT ] { 16387 }
    Constant [ public int PROPERTY_LOWERCASE_MAPPING ] { 16388 }
    Constant [ public int PROPERTY_NAME ] { 16389 }
    Constant [ public int PROPERTY_SIMPLE_CASE_FOLDING ] { 16390 }
    Constant [ public int PROPERTY_SIMPLE_LOWERCASE_MAPPING ] { 16391 }
    Constant [ public int PROPERTY_SIMPLE_TITLECASE_MAPPING ] { 16392 }
    Constant [ public int PROPERTY_SIMPLE_UPPERCASE_MAPPING ] { 16393 }
    Constant [ public int PROPERTY_TITLECASE_MAPPING ] { 16394 }
    Constant [ public int PROPERTY_UNICODE_1_NAME ] { 16395 }
    Constant [ public int PROPERTY_UPPERCASE_MAPPING ] { 16396 }
    Constant [ public int PROPERTY_BIDI_PAIRED_BRACKET ] { 16397 }
    Constant [ public int PROPERTY_STRING_LIMIT ] { 16398 }
    Constant [ public int PROPERTY_SCRIPT_EXTENSIONS ] { 28672 }
    Constant [ public int PROPERTY_OTHER_PROPERTY_START ] { 28672 }
    Constant [ public int PROPERTY_OTHER_PROPERTY_LIMIT ] { 28673 }
    Constant [ public int PROPERTY_INVALID_CODE ] { -1 }
    Constant [ public int CHAR_CATEGORY_UNASSIGNED ] { 0 }
    Constant [ public int CHAR_CATEGORY_GENERAL_OTHER_TYPES ] { 0 }
    Constant [ public int CHAR_CATEGORY_UPPERCASE_LETTER ] { 1 }
    Constant [ public int CHAR_CATEGORY_LOWERCASE_LETTER ] { 2 }
    Constant [ public int CHAR_CATEGORY_TITLECASE_LETTER ] { 3 }
    Constant [ public int CHAR_CATEGORY_MODIFIER_LETTER ] { 4 }
    Constant [ public int CHAR_CATEGORY_OTHER_LETTER ] { 5 }
    Constant [ public int CHAR_CATEGORY_NON_SPACING_MARK ] { 6 }
    Constant [ public int CHAR_CATEGORY_ENCLOSING_MARK ] { 7 }
    Constant [ public int CHAR_CATEGORY_COMBINING_SPACING_MARK ] { 8 }
    Constant [ public int CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER ] { 9 }
    Constant [ public int CHAR_CATEGORY_LETTER_NUMBER ] { 10 }
    Constant [ public int CHAR_CATEGORY_OTHER_NUMBER ] { 11 }
    Constant [ public int CHAR_CATEGORY_SPACE_SEPARATOR ] { 12 }
    Constant [ public int CHAR_CATEGORY_LINE_SEPARATOR ] { 13 }
    Constant [ public int CHAR_CATEGORY_PARAGRAPH_SEPARATOR ] { 14 }
    Constant [ public int CHAR_CATEGORY_CONTROL_CHAR ] { 15 }
    Constant [ public int CHAR_CATEGORY_FORMAT_CHAR ] { 16 }
    Constant [ public int CHAR_CATEGORY_PRIVATE_USE_CHAR ] { 17 }
    Constant [ public int CHAR_CATEGORY_SURROGATE ] { 18 }
    Constant [ public int CHAR_CATEGORY_DASH_PUNCTUATION ] { 19 }
    Constant [ public int CHAR_CATEGORY_START_PUNCTUATION ] { 20 }
    Constant [ public int CHAR_CATEGORY_END_PUNCTUATION ] { 21 }
    Constant [ public int CHAR_CATEGORY_CONNECTOR_PUNCTUATION ] { 22 }
    Constant [ public int CHAR_CATEGORY_OTHER_PUNCTUATION ] { 23 }
    Constant [ public int CHAR_CATEGORY_MATH_SYMBOL ] { 24 }
    Constant [ public int CHAR_CATEGORY_CURRENCY_SYMBOL ] { 25 }
    Constant [ public int CHAR_CATEGORY_MODIFIER_SYMBOL ] { 26 }
    Constant [ public int CHAR_CATEGORY_OTHER_SYMBOL ] { 27 }
    Constant [ public int CHAR_CATEGORY_INITIAL_PUNCTUATION ] { 28 }
    Constant [ public int CHAR_CATEGORY_FINAL_PUNCTUATION ] { 29 }
    Constant [ public int CHAR_CATEGORY_CHAR_CATEGORY_COUNT ] { 30 }
    Constant [ public int CHAR_DIRECTION_LEFT_TO_RIGHT ] { 0 }
    Constant [ public int CHAR_DIRECTION_RIGHT_TO_LEFT ] { 1 }
    Constant [ public int CHAR_DIRECTION_EUROPEAN_NUMBER ] { 2 }
    Constant [ public int CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR ] { 3 }
    Constant [ public int CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR ] { 4 }
    Constant [ public int CHAR_DIRECTION_ARABIC_NUMBER ] { 5 }
    Constant [ public int CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR ] { 6 }
    Constant [ public int CHAR_DIRECTION_BLOCK_SEPARATOR ] { 7 }
    Constant [ public int CHAR_DIRECTION_SEGMENT_SEPARATOR ] { 8 }
    Constant [ public int CHAR_DIRECTION_WHITE_SPACE_NEUTRAL ] { 9 }
    Constant [ public int CHAR_DIRECTION_OTHER_NEUTRAL ] { 10 }
    Constant [ public int CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING ] { 11 }
    Constant [ public int CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE ] { 12 }
    Constant [ public int CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC ] { 13 }
    Constant [ public int CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING ] { 14 }
    Constant [ public int CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE ] { 15 }
    Constant [ public int CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT ] { 16 }
    Constant [ public int CHAR_DIRECTION_DIR_NON_SPACING_MARK ] { 17 }
    Constant [ public int CHAR_DIRECTION_BOUNDARY_NEUTRAL ] { 18 }
    Constant [ public int CHAR_DIRECTION_FIRST_STRONG_ISOLATE ] { 19 }
    Constant [ public int CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE ] { 20 }
    Constant [ public int CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE ] { 21 }
    Constant [ public int CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE ] { 22 }
    Constant [ public int CHAR_DIRECTION_CHAR_DIRECTION_COUNT ] { 23 }
    Constant [ public int BLOCK_CODE_NO_BLOCK ] { 0 }
    Constant [ public int BLOCK_CODE_BASIC_LATIN ] { 1 }
    Constant [ public int BLOCK_CODE_LATIN_1_SUPPLEMENT ] { 2 }
    Constant [ public int BLOCK_CODE_LATIN_EXTENDED_A ] { 3 }
    Constant [ public int BLOCK_CODE_LATIN_EXTENDED_B ] { 4 }
    Constant [ public int BLOCK_CODE_IPA_EXTENSIONS ] { 5 }
    Constant [ public int BLOCK_CODE_SPACING_MODIFIER_LETTERS ] { 6 }
    Constant [ public int BLOCK_CODE_COMBINING_DIACRITICAL_MARKS ] { 7 }
    Constant [ public int BLOCK_CODE_GREEK ] { 8 }
    Constant [ public int BLOCK_CODE_CYRILLIC ] { 9 }
    Constant [ public int BLOCK_CODE_ARMENIAN ] { 10 }
    Constant [ public int BLOCK_CODE_HEBREW ] { 11 }
    Constant [ public int BLOCK_CODE_ARABIC ] { 12 }
    Constant [ public int BLOCK_CODE_SYRIAC ] { 13 }
    Constant [ public int BLOCK_CODE_THAANA ] { 14 }
    Constant [ public int BLOCK_CODE_DEVANAGARI ] { 15 }
    Constant [ public int BLOCK_CODE_BENGALI ] { 16 }
    Constant [ public int BLOCK_CODE_GURMUKHI ] { 17 }
    Constant [ public int BLOCK_CODE_GUJARATI ] { 18 }
    Constant [ public int BLOCK_CODE_ORIYA ] { 19 }
    Constant [ public int BLOCK_CODE_TAMIL ] { 20 }
    Constant [ public int BLOCK_CODE_TELUGU ] { 21 }
    Constant [ public int BLOCK_CODE_KANNADA ] { 22 }
    Constant [ public int BLOCK_CODE_MALAYALAM ] { 23 }
    Constant [ public int BLOCK_CODE_SINHALA ] { 24 }
    Constant [ public int BLOCK_CODE_THAI ] { 25 }
    Constant [ public int BLOCK_CODE_LAO ] { 26 }
    Constant [ public int BLOCK_CODE_TIBETAN ] { 27 }
    Constant [ public int BLOCK_CODE_MYANMAR ] { 28 }
    Constant [ public int BLOCK_CODE_GEORGIAN ] { 29 }
    Constant [ public int BLOCK_CODE_HANGUL_JAMO ] { 30 }
    Constant [ public int BLOCK_CODE_ETHIOPIC ] { 31 }
    Constant [ public int BLOCK_CODE_CHEROKEE ] { 32 }
    Constant [ public int BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS ] { 33 }
    Constant [ public int BLOCK_CODE_OGHAM ] { 34 }
    Constant [ public int BLOCK_CODE_RUNIC ] { 35 }
    Constant [ public int BLOCK_CODE_KHMER ] { 36 }
    Constant [ public int BLOCK_CODE_MONGOLIAN ] { 37 }
    Constant [ public int BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL ] { 38 }
    Constant [ public int BLOCK_CODE_GREEK_EXTENDED ] { 39 }
    Constant [ public int BLOCK_CODE_GENERAL_PUNCTUATION ] { 40 }
    Constant [ public int BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS ] { 41 }
    Constant [ public int BLOCK_CODE_CURRENCY_SYMBOLS ] { 42 }
    Constant [ public int BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS ] { 43 }
    Constant [ public int BLOCK_CODE_LETTERLIKE_SYMBOLS ] { 44 }
    Constant [ public int BLOCK_CODE_NUMBER_FORMS ] { 45 }
    Constant [ public int BLOCK_CODE_ARROWS ] { 46 }
    Constant [ public int BLOCK_CODE_MATHEMATICAL_OPERATORS ] { 47 }
    Constant [ public int BLOCK_CODE_MISCELLANEOUS_TECHNICAL ] { 48 }
    Constant [ public int BLOCK_CODE_CONTROL_PICTURES ] { 49 }
    Constant [ public int BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION ] { 50 }
    Constant [ public int BLOCK_CODE_ENCLOSED_ALPHANUMERICS ] { 51 }
    Constant [ public int BLOCK_CODE_BOX_DRAWING ] { 52 }
    Constant [ public int BLOCK_CODE_BLOCK_ELEMENTS ] { 53 }
    Constant [ public int BLOCK_CODE_GEOMETRIC_SHAPES ] { 54 }
    Constant [ public int BLOCK_CODE_MISCELLANEOUS_SYMBOLS ] { 55 }
    Constant [ public int BLOCK_CODE_DINGBATS ] { 56 }
    Constant [ public int BLOCK_CODE_BRAILLE_PATTERNS ] { 57 }
    Constant [ public int BLOCK_CODE_CJK_RADICALS_SUPPLEMENT ] { 58 }
    Constant [ public int BLOCK_CODE_KANGXI_RADICALS ] { 59 }
    Constant [ public int BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS ] { 60 }
    Constant [ public int BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION ] { 61 }
    Constant [ public int BLOCK_CODE_HIRAGANA ] { 62 }
    Constant [ public int BLOCK_CODE_KATAKANA ] { 63 }
    Constant [ public int BLOCK_CODE_BOPOMOFO ] { 64 }
    Constant [ public int BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO ] { 65 }
    Constant [ public int BLOCK_CODE_KANBUN ] { 66 }
    Constant [ public int BLOCK_CODE_BOPOMOFO_EXTENDED ] { 67 }
    Constant [ public int BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS ] { 68 }
    Constant [ public int BLOCK_CODE_CJK_COMPATIBILITY ] { 69 }
    Constant [ public int BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A ] { 70 }
    Constant [ public int BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS ] { 71 }
    Constant [ public int BLOCK_CODE_YI_SYLLABLES ] { 72 }
    Constant [ public int BLOCK_CODE_YI_RADICALS ] { 73 }
    Constant [ public int BLOCK_CODE_HANGUL_SYLLABLES ] { 74 }
    Constant [ public int BLOCK_CODE_HIGH_SURROGATES ] { 75 }
    Constant [ public int BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES ] { 76 }
    Constant [ public int BLOCK_CODE_LOW_SURROGATES ] { 77 }
    Constant [ public int BLOCK_CODE_PRIVATE_USE_AREA ] { 78 }
    Constant [ public int BLOCK_CODE_PRIVATE_USE ] { 78 }
    Constant [ public int BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS ] { 79 }
    Constant [ public int BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS ] { 80 }
    Constant [ public int BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A ] { 81 }
    Constant [ public int BLOCK_CODE_COMBINING_HALF_MARKS ] { 82 }
    Constant [ public int BLOCK_CODE_CJK_COMPATIBILITY_FORMS ] { 83 }
    Constant [ public int BLOCK_CODE_SMALL_FORM_VARIANTS ] { 84 }
    Constant [ public int BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B ] { 85 }
    Constant [ public int BLOCK_CODE_SPECIALS ] { 86 }
    Constant [ public int BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS ] { 87 }
    Constant [ public int BLOCK_CODE_OLD_ITALIC ] { 88 }
    Constant [ public int BLOCK_CODE_GOTHIC ] { 89 }
    Constant [ public int BLOCK_CODE_DESERET ] { 90 }
    Constant [ public int BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS ] { 91 }
    Constant [ public int BLOCK_CODE_MUSICAL_SYMBOLS ] { 92 }
    Constant [ public int BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS ] { 93 }
    Constant [ public int BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B ] { 94 }
    Constant [ public int BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT ] { 95 }
    Constant [ public int BLOCK_CODE_TAGS ] { 96 }
    Constant [ public int BLOCK_CODE_CYRILLIC_SUPPLEMENT ] { 97 }
    Constant [ public int BLOCK_CODE_CYRILLIC_SUPPLEMENTARY ] { 97 }
    Constant [ public int BLOCK_CODE_TAGALOG ] { 98 }
    Constant [ public int BLOCK_CODE_HANUNOO ] { 99 }
    Constant [ public int BLOCK_CODE_BUHID ] { 100 }
    Constant [ public int BLOCK_CODE_TAGBANWA ] { 101 }
    Constant [ public int BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A ] { 102 }
    Constant [ public int BLOCK_CODE_SUPPLEMENTAL_ARROWS_A ] { 103 }
    Constant [ public int BLOCK_CODE_SUPPLEMENTAL_ARROWS_B ] { 104 }
    Constant [ public int BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B ] { 105 }
    Constant [ public int BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS ] { 106 }
    Constant [ public int BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS ] { 107 }
    Constant [ public int BLOCK_CODE_VARIATION_SELECTORS ] { 108 }
    Constant [ public int BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A ] { 109 }
    Constant [ public int BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B ] { 110 }
    Constant [ public int BLOCK_CODE_LIMBU ] { 111 }
    Constant [ public int BLOCK_CODE_TAI_LE ] { 112 }
    Constant [ public int BLOCK_CODE_KHMER_SYMBOLS ] { 113 }
    Constant [ public int BLOCK_CODE_PHONETIC_EXTENSIONS ] { 114 }
    Constant [ public int BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS ] { 115 }
    Constant [ public int BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS ] { 116 }
    Constant [ public int BLOCK_CODE_LINEAR_B_SYLLABARY ] { 117 }
    Constant [ public int BLOCK_CODE_LINEAR_B_IDEOGRAMS ] { 118 }
    Constant [ public int BLOCK_CODE_AEGEAN_NUMBERS ] { 119 }
    Constant [ public int BLOCK_CODE_UGARITIC ] { 120 }
    Constant [ public int BLOCK_CODE_SHAVIAN ] { 121 }
    Constant [ public int BLOCK_CODE_OSMANYA ] { 122 }
    Constant [ public int BLOCK_CODE_CYPRIOT_SYLLABARY ] { 123 }
    Constant [ public int BLOCK_CODE_TAI_XUAN_JING_SYMBOLS ] { 124 }
    Constant [ public int BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT ] { 125 }
    Constant [ public int BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION ] { 126 }
    Constant [ public int BLOCK_CODE_ANCIENT_GREEK_NUMBERS ] { 127 }
    Constant [ public int BLOCK_CODE_ARABIC_SUPPLEMENT ] { 128 }
    Constant [ public int BLOCK_CODE_BUGINESE ] { 129 }
    Constant [ public int BLOCK_CODE_CJK_STROKES ] { 130 }
    Constant [ public int BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT ] { 131 }
    Constant [ public int BLOCK_CODE_COPTIC ] { 132 }
    Constant [ public int BLOCK_CODE_ETHIOPIC_EXTENDED ] { 133 }
    Constant [ public int BLOCK_CODE_ETHIOPIC_SUPPLEMENT ] { 134 }
    Constant [ public int BLOCK_CODE_GEORGIAN_SUPPLEMENT ] { 135 }
    Constant [ public int BLOCK_CODE_GLAGOLITIC ] { 136 }
    Constant [ public int BLOCK_CODE_KHAROSHTHI ] { 137 }
    Constant [ public int BLOCK_CODE_MODIFIER_TONE_LETTERS ] { 138 }
    Constant [ public int BLOCK_CODE_NEW_TAI_LUE ] { 139 }
    Constant [ public int BLOCK_CODE_OLD_PERSIAN ] { 140 }
    Constant [ public int BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT ] { 141 }
    Constant [ public int BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION ] { 142 }
    Constant [ public int BLOCK_CODE_SYLOTI_NAGRI ] { 143 }
    Constant [ public int BLOCK_CODE_TIFINAGH ] { 144 }
    Constant [ public int BLOCK_CODE_VERTICAL_FORMS ] { 145 }
    Constant [ public int BLOCK_CODE_NKO ] { 146 }
    Constant [ public int BLOCK_CODE_BALINESE ] { 147 }
    Constant [ public int BLOCK_CODE_LATIN_EXTENDED_C ] { 148 }
    Constant [ public int BLOCK_CODE_LATIN_EXTENDED_D ] { 149 }
    Constant [ public int BLOCK_CODE_PHAGS_PA ] { 150 }
    Constant [ public int BLOCK_CODE_PHOENICIAN ] { 151 }
    Constant [ public int BLOCK_CODE_CUNEIFORM ] { 152 }
    Constant [ public int BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION ] { 153 }
    Constant [ public int BLOCK_CODE_COUNTING_ROD_NUMERALS ] { 154 }
    Constant [ public int BLOCK_CODE_SUNDANESE ] { 155 }
    Constant [ public int BLOCK_CODE_LEPCHA ] { 156 }
    Constant [ public int BLOCK_CODE_OL_CHIKI ] { 157 }
    Constant [ public int BLOCK_CODE_CYRILLIC_EXTENDED_A ] { 158 }
    Constant [ public int BLOCK_CODE_VAI ] { 159 }
    Constant [ public int BLOCK_CODE_CYRILLIC_EXTENDED_B ] { 160 }
    Constant [ public int BLOCK_CODE_SAURASHTRA ] { 161 }
    Constant [ public int BLOCK_CODE_KAYAH_LI ] { 162 }
    Constant [ public int BLOCK_CODE_REJANG ] { 163 }
    Constant [ public int BLOCK_CODE_CHAM ] { 164 }
    Constant [ public int BLOCK_CODE_ANCIENT_SYMBOLS ] { 165 }
    Constant [ public int BLOCK_CODE_PHAISTOS_DISC ] { 166 }
    Constant [ public int BLOCK_CODE_LYCIAN ] { 167 }
    Constant [ public int BLOCK_CODE_CARIAN ] { 168 }
    Constant [ public int BLOCK_CODE_LYDIAN ] { 169 }
    Constant [ public int BLOCK_CODE_MAHJONG_TILES ] { 170 }
    Constant [ public int BLOCK_CODE_DOMINO_TILES ] { 171 }
    Constant [ public int BLOCK_CODE_SAMARITAN ] { 172 }
    Constant [ public int BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED ] { 173 }
    Constant [ public int BLOCK_CODE_TAI_THAM ] { 174 }
    Constant [ public int BLOCK_CODE_VEDIC_EXTENSIONS ] { 175 }
    Constant [ public int BLOCK_CODE_LISU ] { 176 }
    Constant [ public int BLOCK_CODE_BAMUM ] { 177 }
    Constant [ public int BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS ] { 178 }
    Constant [ public int BLOCK_CODE_DEVANAGARI_EXTENDED ] { 179 }
    Constant [ public int BLOCK_CODE_HANGUL_JAMO_EXTENDED_A ] { 180 }
    Constant [ public int BLOCK_CODE_JAVANESE ] { 181 }
    Constant [ public int BLOCK_CODE_MYANMAR_EXTENDED_A ] { 182 }
    Constant [ public int BLOCK_CODE_TAI_VIET ] { 183 }
    Constant [ public int BLOCK_CODE_MEETEI_MAYEK ] { 184 }
    Constant [ public int BLOCK_CODE_HANGUL_JAMO_EXTENDED_B ] { 185 }
    Constant [ public int BLOCK_CODE_IMPERIAL_ARAMAIC ] { 186 }
    Constant [ public int BLOCK_CODE_OLD_SOUTH_ARABIAN ] { 187 }
    Constant [ public int BLOCK_CODE_AVESTAN ] { 188 }
    Constant [ public int BLOCK_CODE_INSCRIPTIONAL_PARTHIAN ] { 189 }
    Constant [ public int BLOCK_CODE_INSCRIPTIONAL_PAHLAVI ] { 190 }
    Constant [ public int BLOCK_CODE_OLD_TURKIC ] { 191 }
    Constant [ public int BLOCK_CODE_RUMI_NUMERAL_SYMBOLS ] { 192 }
    Constant [ public int BLOCK_CODE_KAITHI ] { 193 }
    Constant [ public int BLOCK_CODE_EGYPTIAN_HIEROGLYPHS ] { 194 }
    Constant [ public int BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT ] { 195 }
    Constant [ public int BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT ] { 196 }
    Constant [ public int BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C ] { 197 }
    Constant [ public int BLOCK_CODE_MANDAIC ] { 198 }
    Constant [ public int BLOCK_CODE_BATAK ] { 199 }
    Constant [ public int BLOCK_CODE_ETHIOPIC_EXTENDED_A ] { 200 }
    Constant [ public int BLOCK_CODE_BRAHMI ] { 201 }
    Constant [ public int BLOCK_CODE_BAMUM_SUPPLEMENT ] { 202 }
    Constant [ public int BLOCK_CODE_KANA_SUPPLEMENT ] { 203 }
    Constant [ public int BLOCK_CODE_PLAYING_CARDS ] { 204 }
    Constant [ public int BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS ] { 205 }
    Constant [ public int BLOCK_CODE_EMOTICONS ] { 206 }
    Constant [ public int BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS ] { 207 }
    Constant [ public int BLOCK_CODE_ALCHEMICAL_SYMBOLS ] { 208 }
    Constant [ public int BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D ] { 209 }
    Constant [ public int BLOCK_CODE_ARABIC_EXTENDED_A ] { 210 }
    Constant [ public int BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS ] { 211 }
    Constant [ public int BLOCK_CODE_CHAKMA ] { 212 }
    Constant [ public int BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS ] { 213 }
    Constant [ public int BLOCK_CODE_MEROITIC_CURSIVE ] { 214 }
    Constant [ public int BLOCK_CODE_MEROITIC_HIEROGLYPHS ] { 215 }
    Constant [ public int BLOCK_CODE_MIAO ] { 216 }
    Constant [ public int BLOCK_CODE_SHARADA ] { 217 }
    Constant [ public int BLOCK_CODE_SORA_SOMPENG ] { 218 }
    Constant [ public int BLOCK_CODE_SUNDANESE_SUPPLEMENT ] { 219 }
    Constant [ public int BLOCK_CODE_TAKRI ] { 220 }
    Constant [ public int BLOCK_CODE_BASSA_VAH ] { 221 }
    Constant [ public int BLOCK_CODE_CAUCASIAN_ALBANIAN ] { 222 }
    Constant [ public int BLOCK_CODE_COPTIC_EPACT_NUMBERS ] { 223 }
    Constant [ public int BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_EXTENDED ] { 224 }
    Constant [ public int BLOCK_CODE_DUPLOYAN ] { 225 }
    Constant [ public int BLOCK_CODE_ELBASAN ] { 226 }
    Constant [ public int BLOCK_CODE_GEOMETRIC_SHAPES_EXTENDED ] { 227 }
    Constant [ public int BLOCK_CODE_GRANTHA ] { 228 }
    Constant [ public int BLOCK_CODE_KHOJKI ] { 229 }
    Constant [ public int BLOCK_CODE_KHUDAWADI ] { 230 }
    Constant [ public int BLOCK_CODE_LATIN_EXTENDED_E ] { 231 }
    Constant [ public int BLOCK_CODE_LINEAR_A ] { 232 }
    Constant [ public int BLOCK_CODE_MAHAJANI ] { 233 }
    Constant [ public int BLOCK_CODE_MANICHAEAN ] { 234 }
    Constant [ public int BLOCK_CODE_MENDE_KIKAKUI ] { 235 }
    Constant [ public int BLOCK_CODE_MODI ] { 236 }
    Constant [ public int BLOCK_CODE_MRO ] { 237 }
    Constant [ public int BLOCK_CODE_MYANMAR_EXTENDED_B ] { 238 }
    Constant [ public int BLOCK_CODE_NABATAEAN ] { 239 }
    Constant [ public int BLOCK_CODE_OLD_NORTH_ARABIAN ] { 240 }
    Constant [ public int BLOCK_CODE_OLD_PERMIC ] { 241 }
    Constant [ public int BLOCK_CODE_ORNAMENTAL_DINGBATS ] { 242 }
    Constant [ public int BLOCK_CODE_PAHAWH_HMONG ] { 243 }
    Constant [ public int BLOCK_CODE_PALMYRENE ] { 244 }
    Constant [ public int BLOCK_CODE_PAU_CIN_HAU ] { 245 }
    Constant [ public int BLOCK_CODE_PSALTER_PAHLAVI ] { 246 }
    Constant [ public int BLOCK_CODE_SHORTHAND_FORMAT_CONTROLS ] { 247 }
    Constant [ public int BLOCK_CODE_SIDDHAM ] { 248 }
    Constant [ public int BLOCK_CODE_SINHALA_ARCHAIC_NUMBERS ] { 249 }
    Constant [ public int BLOCK_CODE_SUPPLEMENTAL_ARROWS_C ] { 250 }
    Constant [ public int BLOCK_CODE_TIRHUTA ] { 251 }
    Constant [ public int BLOCK_CODE_WARANG_CITI ] { 252 }
    Constant [ public int BLOCK_CODE_COUNT ] { 329 }
    Constant [ public int BLOCK_CODE_INVALID_CODE ] { -1 }
    Constant [ public int BPT_NONE ] { 0 }
    Constant [ public int BPT_OPEN ] { 1 }
    Constant [ public int BPT_CLOSE ] { 2 }
    Constant [ public int BPT_COUNT ] { 3 }
    Constant [ public int EA_NEUTRAL ] { 0 }
    Constant [ public int EA_AMBIGUOUS ] { 1 }
    Constant [ public int EA_HALFWIDTH ] { 2 }
    Constant [ public int EA_FULLWIDTH ] { 3 }
    Constant [ public int EA_NARROW ] { 4 }
    Constant [ public int EA_WIDE ] { 5 }
    Constant [ public int EA_COUNT ] { 6 }
    Constant [ public int UNICODE_CHAR_NAME ] { 0 }
    Constant [ public int UNICODE_10_CHAR_NAME ] { 1 }
    Constant [ public int EXTENDED_CHAR_NAME ] { 2 }
    Constant [ public int CHAR_NAME_ALIAS ] { 3 }
    Constant [ public int CHAR_NAME_CHOICE_COUNT ] { 4 }
    Constant [ public int SHORT_PROPERTY_NAME ] { 0 }
    Constant [ public int LONG_PROPERTY_NAME ] { 1 }
    Constant [ public int PROPERTY_NAME_CHOICE_COUNT ] { 2 }
    Constant [ public int DT_NONE ] { 0 }
    Constant [ public int DT_CANONICAL ] { 1 }
    Constant [ public int DT_COMPAT ] { 2 }
    Constant [ public int DT_CIRCLE ] { 3 }
    Constant [ public int DT_FINAL ] { 4 }
    Constant [ public int DT_FONT ] { 5 }
    Constant [ public int DT_FRACTION ] { 6 }
    Constant [ public int DT_INITIAL ] { 7 }
    Constant [ public int DT_ISOLATED ] { 8 }
    Constant [ public int DT_MEDIAL ] { 9 }
    Constant [ public int DT_NARROW ] { 10 }
    Constant [ public int DT_NOBREAK ] { 11 }
    Constant [ public int DT_SMALL ] { 12 }
    Constant [ public int DT_SQUARE ] { 13 }
    Constant [ public int DT_SUB ] { 14 }
    Constant [ public int DT_SUPER ] { 15 }
    Constant [ public int DT_VERTICAL ] { 16 }
    Constant [ public int DT_WIDE ] { 17 }
    Constant [ public int DT_COUNT ] { 18 }
    Constant [ public int JT_NON_JOINING ] { 0 }
    Constant [ public int JT_JOIN_CAUSING ] { 1 }
    Constant [ public int JT_DUAL_JOINING ] { 2 }
    Constant [ public int JT_LEFT_JOINING ] { 3 }
    Constant [ public int JT_RIGHT_JOINING ] { 4 }
    Constant [ public int JT_TRANSPARENT ] { 5 }
    Constant [ public int JT_COUNT ] { 6 }
    Constant [ public int JG_NO_JOINING_GROUP ] { 0 }
    Constant [ public int JG_AIN ] { 1 }
    Constant [ public int JG_ALAPH ] { 2 }
    Constant [ public int JG_ALEF ] { 3 }
    Constant [ public int JG_BEH ] { 4 }
    Constant [ public int JG_BETH ] { 5 }
    Constant [ public int JG_DAL ] { 6 }
    Constant [ public int JG_DALATH_RISH ] { 7 }
    Constant [ public int JG_E ] { 8 }
    Constant [ public int JG_FEH ] { 9 }
    Constant [ public int JG_FINAL_SEMKATH ] { 10 }
    Constant [ public int JG_GAF ] { 11 }
    Constant [ public int JG_GAMAL ] { 12 }
    Constant [ public int JG_HAH ] { 13 }
    Constant [ public int JG_TEH_MARBUTA_GOAL ] { 14 }
    Constant [ public int JG_HAMZA_ON_HEH_GOAL ] { 14 }
    Constant [ public int JG_HE ] { 15 }
    Constant [ public int JG_HEH ] { 16 }
    Constant [ public int JG_HEH_GOAL ] { 17 }
    Constant [ public int JG_HETH ] { 18 }
    Constant [ public int JG_KAF ] { 19 }
    Constant [ public int JG_KAPH ] { 20 }
    Constant [ public int JG_KNOTTED_HEH ] { 21 }
    Constant [ public int JG_LAM ] { 22 }
    Constant [ public int JG_LAMADH ] { 23 }
    Constant [ public int JG_MEEM ] { 24 }
    Constant [ public int JG_MIM ] { 25 }
    Constant [ public int JG_NOON ] { 26 }
    Constant [ public int JG_NUN ] { 27 }
    Constant [ public int JG_PE ] { 28 }
    Constant [ public int JG_QAF ] { 29 }
    Constant [ public int JG_QAPH ] { 30 }
    Constant [ public int JG_REH ] { 31 }
    Constant [ public int JG_REVERSED_PE ] { 32 }
    Constant [ public int JG_SAD ] { 33 }
    Constant [ public int JG_SADHE ] { 34 }
    Constant [ public int JG_SEEN ] { 35 }
    Constant [ public int JG_SEMKATH ] { 36 }
    Constant [ public int JG_SHIN ] { 37 }
    Constant [ public int JG_SWASH_KAF ] { 38 }
    Constant [ public int JG_SYRIAC_WAW ] { 39 }
    Constant [ public int JG_TAH ] { 40 }
    Constant [ public int JG_TAW ] { 41 }
    Constant [ public int JG_TEH_MARBUTA ] { 42 }
    Constant [ public int JG_TETH ] { 43 }
    Constant [ public int JG_WAW ] { 44 }
    Constant [ public int JG_YEH ] { 45 }
    Constant [ public int JG_YEH_BARREE ] { 46 }
    Constant [ public int JG_YEH_WITH_TAIL ] { 47 }
    Constant [ public int JG_YUDH ] { 48 }
    Constant [ public int JG_YUDH_HE ] { 49 }
    Constant [ public int JG_ZAIN ] { 50 }
    Constant [ public int JG_FE ] { 51 }
    Constant [ public int JG_KHAPH ] { 52 }
    Constant [ public int JG_ZHAIN ] { 53 }
    Constant [ public int JG_BURUSHASKI_YEH_BARREE ] { 54 }
    Constant [ public int JG_FARSI_YEH ] { 55 }
    Constant [ public int JG_NYA ] { 56 }
    Constant [ public int JG_ROHINGYA_YEH ] { 57 }
    Constant [ public int JG_MANICHAEAN_ALEPH ] { 58 }
    Constant [ public int JG_MANICHAEAN_AYIN ] { 59 }
    Constant [ public int JG_MANICHAEAN_BETH ] { 60 }
    Constant [ public int JG_MANICHAEAN_DALETH ] { 61 }
    Constant [ public int JG_MANICHAEAN_DHAMEDH ] { 62 }
    Constant [ public int JG_MANICHAEAN_FIVE ] { 63 }
    Constant [ public int JG_MANICHAEAN_GIMEL ] { 64 }
    Constant [ public int JG_MANICHAEAN_HETH ] { 65 }
    Constant [ public int JG_MANICHAEAN_HUNDRED ] { 66 }
    Constant [ public int JG_MANICHAEAN_KAPH ] { 67 }
    Constant [ public int JG_MANICHAEAN_LAMEDH ] { 68 }
    Constant [ public int JG_MANICHAEAN_MEM ] { 69 }
    Constant [ public int JG_MANICHAEAN_NUN ] { 70 }
    Constant [ public int JG_MANICHAEAN_ONE ] { 71 }
    Constant [ public int JG_MANICHAEAN_PE ] { 72 }
    Constant [ public int JG_MANICHAEAN_QOPH ] { 73 }
    Constant [ public int JG_MANICHAEAN_RESH ] { 74 }
    Constant [ public int JG_MANICHAEAN_SADHE ] { 75 }
    Constant [ public int JG_MANICHAEAN_SAMEKH ] { 76 }
    Constant [ public int JG_MANICHAEAN_TAW ] { 77 }
    Constant [ public int JG_MANICHAEAN_TEN ] { 78 }
    Constant [ public int JG_MANICHAEAN_TETH ] { 79 }
    Constant [ public int JG_MANICHAEAN_THAMEDH ] { 80 }
    Constant [ public int JG_MANICHAEAN_TWENTY ] { 81 }
    Constant [ public int JG_MANICHAEAN_WAW ] { 82 }
    Constant [ public int JG_MANICHAEAN_YODH ] { 83 }
    Constant [ public int JG_MANICHAEAN_ZAYIN ] { 84 }
    Constant [ public int JG_STRAIGHT_WAW ] { 85 }
    Constant [ public int JG_COUNT ] { 104 }
    Constant [ public int GCB_OTHER ] { 0 }
    Constant [ public int GCB_CONTROL ] { 1 }
    Constant [ public int GCB_CR ] { 2 }
    Constant [ public int GCB_EXTEND ] { 3 }
    Constant [ public int GCB_L ] { 4 }
    Constant [ public int GCB_LF ] { 5 }
    Constant [ public int GCB_LV ] { 6 }
    Constant [ public int GCB_LVT ] { 7 }
    Constant [ public int GCB_T ] { 8 }
    Constant [ public int GCB_V ] { 9 }
    Constant [ public int GCB_SPACING_MARK ] { 10 }
    Constant [ public int GCB_PREPEND ] { 11 }
    Constant [ public int GCB_REGIONAL_INDICATOR ] { 12 }
    Constant [ public int GCB_COUNT ] { 18 }
    Constant [ public int WB_OTHER ] { 0 }
    Constant [ public int WB_ALETTER ] { 1 }
    Constant [ public int WB_FORMAT ] { 2 }
    Constant [ public int WB_KATAKANA ] { 3 }
    Constant [ public int WB_MIDLETTER ] { 4 }
    Constant [ public int WB_MIDNUM ] { 5 }
    Constant [ public int WB_NUMERIC ] { 6 }
    Constant [ public int WB_EXTENDNUMLET ] { 7 }
    Constant [ public int WB_CR ] { 8 }
    Constant [ public int WB_EXTEND ] { 9 }
    Constant [ public int WB_LF ] { 10 }
    Constant [ public int WB_MIDNUMLET ] { 11 }
    Constant [ public int WB_NEWLINE ] { 12 }
    Constant [ public int WB_REGIONAL_INDICATOR ] { 13 }
    Constant [ public int WB_HEBREW_LETTER ] { 14 }
    Constant [ public int WB_SINGLE_QUOTE ] { 15 }
    Constant [ public int WB_DOUBLE_QUOTE ] { 16 }
    Constant [ public int WB_COUNT ] { 23 }
    Constant [ public int SB_OTHER ] { 0 }
    Constant [ public int SB_ATERM ] { 1 }
    Constant [ public int SB_CLOSE ] { 2 }
    Constant [ public int SB_FORMAT ] { 3 }
    Constant [ public int SB_LOWER ] { 4 }
    Constant [ public int SB_NUMERIC ] { 5 }
    Constant [ public int SB_OLETTER ] { 6 }
    Constant [ public int SB_SEP ] { 7 }
    Constant [ public int SB_SP ] { 8 }
    Constant [ public int SB_STERM ] { 9 }
    Constant [ public int SB_UPPER ] { 10 }
    Constant [ public int SB_CR ] { 11 }
    Constant [ public int SB_EXTEND ] { 12 }
    Constant [ public int SB_LF ] { 13 }
    Constant [ public int SB_SCONTINUE ] { 14 }
    Constant [ public int SB_COUNT ] { 15 }
    Constant [ public int LB_UNKNOWN ] { 0 }
    Constant [ public int LB_AMBIGUOUS ] { 1 }
    Constant [ public int LB_ALPHABETIC ] { 2 }
    Constant [ public int LB_BREAK_BOTH ] { 3 }
    Constant [ public int LB_BREAK_AFTER ] { 4 }
    Constant [ public int LB_BREAK_BEFORE ] { 5 }
    Constant [ public int LB_MANDATORY_BREAK ] { 6 }
    Constant [ public int LB_CONTINGENT_BREAK ] { 7 }
    Constant [ public int LB_CLOSE_PUNCTUATION ] { 8 }
    Constant [ public int LB_COMBINING_MARK ] { 9 }
    Constant [ public int LB_CARRIAGE_RETURN ] { 10 }
    Constant [ public int LB_EXCLAMATION ] { 11 }
    Constant [ public int LB_GLUE ] { 12 }
    Constant [ public int LB_HYPHEN ] { 13 }
    Constant [ public int LB_IDEOGRAPHIC ] { 14 }
    Constant [ public int LB_INSEPARABLE ] { 15 }
    Constant [ public int LB_INSEPERABLE ] { 15 }
    Constant [ public int LB_INFIX_NUMERIC ] { 16 }
    Constant [ public int LB_LINE_FEED ] { 17 }
    Constant [ public int LB_NONSTARTER ] { 18 }
    Constant [ public int LB_NUMERIC ] { 19 }
    Constant [ public int LB_OPEN_PUNCTUATION ] { 20 }
    Constant [ public int LB_POSTFIX_NUMERIC ] { 21 }
    Constant [ public int LB_PREFIX_NUMERIC ] { 22 }
    Constant [ public int LB_QUOTATION ] { 23 }
    Constant [ public int LB_COMPLEX_CONTEXT ] { 24 }
    Constant [ public int LB_SURROGATE ] { 25 }
    Constant [ public int LB_SPACE ] { 26 }
    Constant [ public int LB_BREAK_SYMBOLS ] { 27 }
    Constant [ public int LB_ZWSPACE ] { 28 }
    Constant [ public int LB_NEXT_LINE ] { 29 }
    Constant [ public int LB_WORD_JOINER ] { 30 }
    Constant [ public int LB_H2 ] { 31 }
    Constant [ public int LB_H3 ] { 32 }
    Constant [ public int LB_JL ] { 33 }
    Constant [ public int LB_JT ] { 34 }
    Constant [ public int LB_JV ] { 35 }
    Constant [ public int LB_CLOSE_PARENTHESIS ] { 36 }
    Constant [ public int LB_CONDITIONAL_JAPANESE_STARTER ] { 37 }
    Constant [ public int LB_HEBREW_LETTER ] { 38 }
    Constant [ public int LB_REGIONAL_INDICATOR ] { 39 }
    Constant [ public int LB_COUNT ] { 48 }
    Constant [ public int NT_NONE ] { 0 }
    Constant [ public int NT_DECIMAL ] { 1 }
    Constant [ public int NT_DIGIT ] { 2 }
    Constant [ public int NT_NUMERIC ] { 3 }
    Constant [ public int NT_COUNT ] { 4 }
    Constant [ public int HST_NOT_APPLICABLE ] { 0 }
    Constant [ public int HST_LEADING_JAMO ] { 1 }
    Constant [ public int HST_VOWEL_JAMO ] { 2 }
    Constant [ public int HST_TRAILING_JAMO ] { 3 }
    Constant [ public int HST_LV_SYLLABLE ] { 4 }
    Constant [ public int HST_LVT_SYLLABLE ] { 5 }
    Constant [ public int HST_COUNT ] { 6 }
    Constant [ public int FOLD_CASE_DEFAULT ] { 0 }
    Constant [ public int FOLD_CASE_EXCLUDE_SPECIAL_I ] { 1 }
  }

  - Static properties [0] {
  }

  - Static methods [59] {
    Method [ <internal:intl> static public method hasBinaryProperty ] {

      - Parameters [2] {
        Parameter #0 [ <required> string|int $codepoint ]
        Parameter #1 [ <required> int $property ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method charAge ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?array ]
    }

    Method [ <internal:intl> static public method charDigitValue ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?int ]
    }

    Method [ <internal:intl> static public method charDirection ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?int ]
    }

    Method [ <internal:intl> static public method charFromName ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $name ]
        Parameter #1 [ <optional> int $type = IntlChar::UNICODE_CHAR_NAME ]
      }
      - Tentative return [ ?int ]
    }

    Method [ <internal:intl> static public method charMirror ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ string|int|null ]
    }

    Method [ <internal:intl> static public method charName ] {

      - Parameters [2] {
        Parameter #0 [ <required> string|int $codepoint ]
        Parameter #1 [ <optional> int $type = IntlChar::UNICODE_CHAR_NAME ]
      }
      - Tentative return [ ?string ]
    }

    Method [ <internal:intl> static public method charType ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?int ]
    }

    Method [ <internal:intl> static public method chr ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?string ]
    }

    Method [ <internal:intl> static public method digit ] {

      - Parameters [2] {
        Parameter #0 [ <required> string|int $codepoint ]
        Parameter #1 [ <optional> int $base = 10 ]
      }
      - Tentative return [ int|false|null ]
    }

    Method [ <internal:intl> static public method enumCharNames ] {

      - Parameters [4] {
        Parameter #0 [ <required> string|int $start ]
        Parameter #1 [ <required> string|int $end ]
        Parameter #2 [ <required> callable $callback ]
        Parameter #3 [ <optional> int $type = IntlChar::UNICODE_CHAR_NAME ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:intl> static public method enumCharTypes ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:intl> static public method foldCase ] {

      - Parameters [2] {
        Parameter #0 [ <required> string|int $codepoint ]
        Parameter #1 [ <optional> int $options = IntlChar::FOLD_CASE_DEFAULT ]
      }
      - Tentative return [ string|int|null ]
    }

    Method [ <internal:intl> static public method forDigit ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $digit ]
        Parameter #1 [ <optional> int $base = 10 ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> static public method getBidiPairedBracket ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ string|int|null ]
    }

    Method [ <internal:intl> static public method getBlockCode ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?int ]
    }

    Method [ <internal:intl> static public method getCombiningClass ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?int ]
    }

    Method [ <internal:intl> static public method getFC_NFKC_Closure ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ string|false|null ]
    }

    Method [ <internal:intl> static public method getIntPropertyMaxValue ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $property ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> static public method getIntPropertyMinValue ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $property ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> static public method getIntPropertyValue ] {

      - Parameters [2] {
        Parameter #0 [ <required> string|int $codepoint ]
        Parameter #1 [ <required> int $property ]
      }
      - Tentative return [ ?int ]
    }

    Method [ <internal:intl> static public method getNumericValue ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?float ]
    }

    Method [ <internal:intl> static public method getPropertyEnum ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $alias ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> static public method getPropertyName ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $property ]
        Parameter #1 [ <optional> int $type = IntlChar::LONG_PROPERTY_NAME ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> static public method getPropertyValueEnum ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $property ]
        Parameter #1 [ <required> string $name ]
      }
      - Tentative return [ int ]
    }

    Method [ <internal:intl> static public method getPropertyValueName ] {

      - Parameters [3] {
        Parameter #0 [ <required> int $property ]
        Parameter #1 [ <required> int $value ]
        Parameter #2 [ <optional> int $type = IntlChar::LONG_PROPERTY_NAME ]
      }
      - Tentative return [ string|false ]
    }

    Method [ <internal:intl> static public method getUnicodeVersion ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:intl> static public method isalnum ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isalpha ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isbase ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isblank ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method iscntrl ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isdefined ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isdigit ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isgraph ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isIDIgnorable ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isIDPart ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isIDStart ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isISOControl ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isJavaIDPart ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isJavaIDStart ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isJavaSpaceChar ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method islower ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isMirrored ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isprint ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method ispunct ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isspace ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method istitle ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isUAlphabetic ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isULowercase ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isupper ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isUUppercase ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isUWhiteSpace ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isWhitespace ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method isxdigit ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ ?bool ]
    }

    Method [ <internal:intl> static public method ord ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $character ]
      }
      - Tentative return [ ?int ]
    }

    Method [ <internal:intl> static public method tolower ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ string|int|null ]
    }

    Method [ <internal:intl> static public method totitle ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ string|int|null ]
    }

    Method [ <internal:intl> static public method toupper ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $codepoint ]
      }
      - Tentative return [ string|int|null ]
    }
  }

  - Properties [0] {
  }

  - Methods [0] {
  }
}
',
);
