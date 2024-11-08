<?php

return array (
  'type' => 'extension',
  'name' => 'xml',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'xml',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'xml',
    )),
    'removed' => NULL,
    'version' => '8.2.25',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'xml extension (php.net)',
        'url' => 'https://www.php.net/manual/book.xml.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'XMLParser',
  ),
  'functions' => 
  array (
    'xml_parser_create' => 'xml_parser_create',
    'xml_parser_create_ns' => 'xml_parser_create_ns',
    'xml_set_object' => 'xml_set_object',
    'xml_set_element_handler' => 'xml_set_element_handler',
    'xml_set_character_data_handler' => 'xml_set_character_data_handler',
    'xml_set_processing_instruction_handler' => 'xml_set_processing_instruction_handler',
    'xml_set_default_handler' => 'xml_set_default_handler',
    'xml_set_unparsed_entity_decl_handler' => 'xml_set_unparsed_entity_decl_handler',
    'xml_set_notation_decl_handler' => 'xml_set_notation_decl_handler',
    'xml_set_external_entity_ref_handler' => 'xml_set_external_entity_ref_handler',
    'xml_set_start_namespace_decl_handler' => 'xml_set_start_namespace_decl_handler',
    'xml_set_end_namespace_decl_handler' => 'xml_set_end_namespace_decl_handler',
    'xml_parse' => 'xml_parse',
    'xml_parse_into_struct' => 'xml_parse_into_struct',
    'xml_get_error_code' => 'xml_get_error_code',
    'xml_error_string' => 'xml_error_string',
    'xml_get_current_line_number' => 'xml_get_current_line_number',
    'xml_get_current_column_number' => 'xml_get_current_column_number',
    'xml_get_current_byte_index' => 'xml_get_current_byte_index',
    'xml_parser_free' => 'xml_parser_free',
    'xml_parser_set_option' => 'xml_parser_set_option',
    'xml_parser_get_option' => 'xml_parser_get_option',
  ),
  'constants' => 
  array (
    'XML_ERROR_NONE' => 0,
    'XML_ERROR_NO_MEMORY' => 1,
    'XML_ERROR_SYNTAX' => 2,
    'XML_ERROR_NO_ELEMENTS' => 3,
    'XML_ERROR_INVALID_TOKEN' => 4,
    'XML_ERROR_UNCLOSED_TOKEN' => 5,
    'XML_ERROR_PARTIAL_CHAR' => 6,
    'XML_ERROR_TAG_MISMATCH' => 7,
    'XML_ERROR_DUPLICATE_ATTRIBUTE' => 8,
    'XML_ERROR_JUNK_AFTER_DOC_ELEMENT' => 9,
    'XML_ERROR_PARAM_ENTITY_REF' => 10,
    'XML_ERROR_UNDEFINED_ENTITY' => 11,
    'XML_ERROR_RECURSIVE_ENTITY_REF' => 12,
    'XML_ERROR_ASYNC_ENTITY' => 13,
    'XML_ERROR_BAD_CHAR_REF' => 14,
    'XML_ERROR_BINARY_ENTITY_REF' => 15,
    'XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF' => 16,
    'XML_ERROR_MISPLACED_XML_PI' => 17,
    'XML_ERROR_UNKNOWN_ENCODING' => 18,
    'XML_ERROR_INCORRECT_ENCODING' => 19,
    'XML_ERROR_UNCLOSED_CDATA_SECTION' => 20,
    'XML_ERROR_EXTERNAL_ENTITY_HANDLING' => 21,
    'XML_OPTION_CASE_FOLDING' => 1,
    'XML_OPTION_TARGET_ENCODING' => 2,
    'XML_OPTION_SKIP_TAGSTART' => 3,
    'XML_OPTION_SKIP_WHITE' => 4,
    'XML_SAX_IMPL' => 'libxml',
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
