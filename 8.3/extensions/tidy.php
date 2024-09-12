<?php

return array (
  'type' => 'extension',
  'name' => 'tidy',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'tidy',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'tidy',
    )),
    'removed' => NULL,
    'version' => '8.3.11',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'tidy extension (php.net)',
        'url' => 'https://www.php.net/manual/book.tidy.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'tidy',
    1 => 'tidyNode',
  ),
  'functions' => 
  array (
    'tidy_parse_string' => 'tidy_parse_string',
    'tidy_get_error_buffer' => 'tidy_get_error_buffer',
    'tidy_get_output' => 'tidy_get_output',
    'tidy_parse_file' => 'tidy_parse_file',
    'tidy_clean_repair' => 'tidy_clean_repair',
    'tidy_repair_string' => 'tidy_repair_string',
    'tidy_repair_file' => 'tidy_repair_file',
    'tidy_diagnose' => 'tidy_diagnose',
    'tidy_get_release' => 'tidy_get_release',
    'tidy_get_opt_doc' => 'tidy_get_opt_doc',
    'tidy_get_config' => 'tidy_get_config',
    'tidy_get_status' => 'tidy_get_status',
    'tidy_get_html_ver' => 'tidy_get_html_ver',
    'tidy_is_xhtml' => 'tidy_is_xhtml',
    'tidy_is_xml' => 'tidy_is_xml',
    'tidy_error_count' => 'tidy_error_count',
    'tidy_warning_count' => 'tidy_warning_count',
    'tidy_access_count' => 'tidy_access_count',
    'tidy_config_count' => 'tidy_config_count',
    'tidy_getopt' => 'tidy_getopt',
    'tidy_get_root' => 'tidy_get_root',
    'tidy_get_html' => 'tidy_get_html',
    'tidy_get_head' => 'tidy_get_head',
    'tidy_get_body' => 'tidy_get_body',
  ),
  'constants' => 
  array (
    'TIDY_NODETYPE_ROOT' => 0,
    'TIDY_NODETYPE_DOCTYPE' => 1,
    'TIDY_NODETYPE_COMMENT' => 2,
    'TIDY_NODETYPE_PROCINS' => 3,
    'TIDY_NODETYPE_TEXT' => 4,
    'TIDY_NODETYPE_START' => 5,
    'TIDY_NODETYPE_END' => 6,
    'TIDY_NODETYPE_STARTEND' => 7,
    'TIDY_NODETYPE_CDATA' => 8,
    'TIDY_NODETYPE_SECTION' => 9,
    'TIDY_NODETYPE_ASP' => 10,
    'TIDY_NODETYPE_JSTE' => 11,
    'TIDY_NODETYPE_PHP' => 12,
    'TIDY_NODETYPE_XMLDECL' => 13,
    'TIDY_TAG_UNKNOWN' => 0,
    'TIDY_TAG_A' => 1,
    'TIDY_TAG_ABBR' => 2,
    'TIDY_TAG_ACRONYM' => 3,
    'TIDY_TAG_ADDRESS' => 4,
    'TIDY_TAG_ALIGN' => 5,
    'TIDY_TAG_APPLET' => 6,
    'TIDY_TAG_AREA' => 7,
    'TIDY_TAG_B' => 8,
    'TIDY_TAG_BASE' => 9,
    'TIDY_TAG_BASEFONT' => 10,
    'TIDY_TAG_BDO' => 11,
    'TIDY_TAG_BGSOUND' => 12,
    'TIDY_TAG_BIG' => 13,
    'TIDY_TAG_BLINK' => 14,
    'TIDY_TAG_BLOCKQUOTE' => 15,
    'TIDY_TAG_BODY' => 16,
    'TIDY_TAG_BR' => 17,
    'TIDY_TAG_BUTTON' => 18,
    'TIDY_TAG_CAPTION' => 19,
    'TIDY_TAG_CENTER' => 20,
    'TIDY_TAG_CITE' => 21,
    'TIDY_TAG_CODE' => 22,
    'TIDY_TAG_COL' => 23,
    'TIDY_TAG_COLGROUP' => 24,
    'TIDY_TAG_COMMENT' => 25,
    'TIDY_TAG_DD' => 26,
    'TIDY_TAG_DEL' => 27,
    'TIDY_TAG_DFN' => 28,
    'TIDY_TAG_DIR' => 29,
    'TIDY_TAG_DIV' => 30,
    'TIDY_TAG_DL' => 31,
    'TIDY_TAG_DT' => 32,
    'TIDY_TAG_EM' => 33,
    'TIDY_TAG_EMBED' => 34,
    'TIDY_TAG_FIELDSET' => 35,
    'TIDY_TAG_FONT' => 36,
    'TIDY_TAG_FORM' => 37,
    'TIDY_TAG_FRAME' => 38,
    'TIDY_TAG_FRAMESET' => 39,
    'TIDY_TAG_H1' => 40,
    'TIDY_TAG_H2' => 41,
    'TIDY_TAG_H3' => 42,
    'TIDY_TAG_H4' => 43,
    'TIDY_TAG_H5' => 44,
    'TIDY_TAG_H6' => 45,
    'TIDY_TAG_HEAD' => 46,
    'TIDY_TAG_HR' => 47,
    'TIDY_TAG_HTML' => 48,
    'TIDY_TAG_I' => 49,
    'TIDY_TAG_IFRAME' => 50,
    'TIDY_TAG_ILAYER' => 51,
    'TIDY_TAG_IMG' => 52,
    'TIDY_TAG_INPUT' => 53,
    'TIDY_TAG_INS' => 54,
    'TIDY_TAG_ISINDEX' => 55,
    'TIDY_TAG_KBD' => 56,
    'TIDY_TAG_KEYGEN' => 57,
    'TIDY_TAG_LABEL' => 58,
    'TIDY_TAG_LAYER' => 59,
    'TIDY_TAG_LEGEND' => 60,
    'TIDY_TAG_LI' => 61,
    'TIDY_TAG_LINK' => 62,
    'TIDY_TAG_LISTING' => 63,
    'TIDY_TAG_MAP' => 64,
    'TIDY_TAG_MARQUEE' => 66,
    'TIDY_TAG_MENU' => 67,
    'TIDY_TAG_META' => 68,
    'TIDY_TAG_MULTICOL' => 69,
    'TIDY_TAG_NOBR' => 70,
    'TIDY_TAG_NOEMBED' => 71,
    'TIDY_TAG_NOFRAMES' => 72,
    'TIDY_TAG_NOLAYER' => 73,
    'TIDY_TAG_NOSAVE' => 74,
    'TIDY_TAG_NOSCRIPT' => 75,
    'TIDY_TAG_OBJECT' => 76,
    'TIDY_TAG_OL' => 77,
    'TIDY_TAG_OPTGROUP' => 78,
    'TIDY_TAG_OPTION' => 79,
    'TIDY_TAG_P' => 80,
    'TIDY_TAG_PARAM' => 81,
    'TIDY_TAG_PLAINTEXT' => 83,
    'TIDY_TAG_PRE' => 84,
    'TIDY_TAG_Q' => 85,
    'TIDY_TAG_RB' => 86,
    'TIDY_TAG_RBC' => 87,
    'TIDY_TAG_RP' => 88,
    'TIDY_TAG_RT' => 89,
    'TIDY_TAG_RTC' => 90,
    'TIDY_TAG_RUBY' => 91,
    'TIDY_TAG_S' => 92,
    'TIDY_TAG_SAMP' => 93,
    'TIDY_TAG_SCRIPT' => 94,
    'TIDY_TAG_SELECT' => 95,
    'TIDY_TAG_SERVER' => 96,
    'TIDY_TAG_SERVLET' => 97,
    'TIDY_TAG_SMALL' => 98,
    'TIDY_TAG_SPACER' => 99,
    'TIDY_TAG_SPAN' => 100,
    'TIDY_TAG_STRIKE' => 101,
    'TIDY_TAG_STRONG' => 102,
    'TIDY_TAG_STYLE' => 103,
    'TIDY_TAG_SUB' => 104,
    'TIDY_TAG_SUP' => 105,
    'TIDY_TAG_TABLE' => 107,
    'TIDY_TAG_TBODY' => 108,
    'TIDY_TAG_TD' => 109,
    'TIDY_TAG_TEXTAREA' => 110,
    'TIDY_TAG_TFOOT' => 111,
    'TIDY_TAG_TH' => 112,
    'TIDY_TAG_THEAD' => 113,
    'TIDY_TAG_TITLE' => 114,
    'TIDY_TAG_TR' => 115,
    'TIDY_TAG_TT' => 116,
    'TIDY_TAG_U' => 117,
    'TIDY_TAG_UL' => 118,
    'TIDY_TAG_VAR' => 119,
    'TIDY_TAG_WBR' => 120,
    'TIDY_TAG_XMP' => 121,
    'TIDY_TAG_ARTICLE' => 123,
    'TIDY_TAG_ASIDE' => 124,
    'TIDY_TAG_AUDIO' => 125,
    'TIDY_TAG_BDI' => 126,
    'TIDY_TAG_CANVAS' => 127,
    'TIDY_TAG_COMMAND' => 128,
    'TIDY_TAG_DATALIST' => 129,
    'TIDY_TAG_DETAILS' => 130,
    'TIDY_TAG_DIALOG' => 131,
    'TIDY_TAG_FIGCAPTION' => 132,
    'TIDY_TAG_FIGURE' => 133,
    'TIDY_TAG_FOOTER' => 134,
    'TIDY_TAG_HEADER' => 135,
    'TIDY_TAG_HGROUP' => 136,
    'TIDY_TAG_MAIN' => 137,
    'TIDY_TAG_MARK' => 138,
    'TIDY_TAG_MENUITEM' => 139,
    'TIDY_TAG_METER' => 140,
    'TIDY_TAG_NAV' => 141,
    'TIDY_TAG_OUTPUT' => 142,
    'TIDY_TAG_PROGRESS' => 143,
    'TIDY_TAG_SECTION' => 144,
    'TIDY_TAG_SOURCE' => 145,
    'TIDY_TAG_SUMMARY' => 146,
    'TIDY_TAG_TEMPLATE' => 147,
    'TIDY_TAG_TIME' => 148,
    'TIDY_TAG_TRACK' => 149,
    'TIDY_TAG_VIDEO' => 150,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'tidy.clean_output' => '',
    'tidy.default_config' => '',
  ),
);
