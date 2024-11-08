<?php

return array (
  'type' => 'extension',
  'name' => 'yaml',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'yaml',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'yaml',
    )),
    'removed' => NULL,
    'version' => '2.2.4',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'yaml extension (php.net)',
        'url' => 'https://www.php.net/manual/book.yaml.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'yaml_parse' => 'yaml_parse',
    'yaml_parse_file' => 'yaml_parse_file',
    'yaml_parse_url' => 'yaml_parse_url',
    'yaml_emit' => 'yaml_emit',
    'yaml_emit_file' => 'yaml_emit_file',
  ),
  'constants' => 
  array (
    'YAML_ANY_SCALAR_STYLE' => 0,
    'YAML_PLAIN_SCALAR_STYLE' => 1,
    'YAML_SINGLE_QUOTED_SCALAR_STYLE' => 2,
    'YAML_DOUBLE_QUOTED_SCALAR_STYLE' => 3,
    'YAML_LITERAL_SCALAR_STYLE' => 4,
    'YAML_FOLDED_SCALAR_STYLE' => 5,
    'YAML_NULL_TAG' => 'tag:yaml.org,2002:null',
    'YAML_BOOL_TAG' => 'tag:yaml.org,2002:bool',
    'YAML_STR_TAG' => 'tag:yaml.org,2002:str',
    'YAML_INT_TAG' => 'tag:yaml.org,2002:int',
    'YAML_FLOAT_TAG' => 'tag:yaml.org,2002:float',
    'YAML_TIMESTAMP_TAG' => 'tag:yaml.org,2002:timestamp',
    'YAML_SEQ_TAG' => 'tag:yaml.org,2002:seq',
    'YAML_MAP_TAG' => 'tag:yaml.org,2002:map',
    'YAML_PHP_TAG' => '!php/object',
    'YAML_MERGE_TAG' => 'tag:yaml.org,2002:merge',
    'YAML_BINARY_TAG' => 'tag:yaml.org,2002:binary',
    'YAML_ANY_ENCODING' => 0,
    'YAML_UTF8_ENCODING' => 1,
    'YAML_UTF16LE_ENCODING' => 2,
    'YAML_UTF16BE_ENCODING' => 3,
    'YAML_ANY_BREAK' => 0,
    'YAML_CR_BREAK' => 1,
    'YAML_LN_BREAK' => 2,
    'YAML_CRLN_BREAK' => 3,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'yaml.decode_binary' => '0',
    'yaml.decode_php' => '0',
    'yaml.decode_timestamp' => '0',
    'yaml.output_canonical' => '0',
    'yaml.output_indent' => '2',
    'yaml.output_width' => '80',
  ),
);
