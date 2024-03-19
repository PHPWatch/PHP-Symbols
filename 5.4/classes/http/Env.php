<?php

return array (
  'type' => 'class',
  'name' => 'http\\Env',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Env',
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
        'name' => 'http\\Env class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-env.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'getRequestHeader' => 
    array (
      'name' => 'getRequestHeader',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'header_name' => 
        array (
          'position' => 0,
          'name' => 'header_name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getRequestBody' => 
    array (
      'name' => 'getRequestBody',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'body_class_name' => 
        array (
          'position' => 0,
          'name' => 'body_class_name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getResponseStatusForCode' => 
    array (
      'name' => 'getResponseStatusForCode',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'code' => 
        array (
          'position' => 0,
          'name' => 'code',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getResponseStatusForAllCodes' => 
    array (
      'name' => 'getResponseStatusForAllCodes',
      'class' => 'http\\Env',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getResponseHeader' => 
    array (
      'name' => 'getResponseHeader',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'header_name' => 
        array (
          'position' => 0,
          'name' => 'header_name',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getResponseCode' => 
    array (
      'name' => 'getResponseCode',
      'class' => 'http\\Env',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setResponseHeader' => 
    array (
      'name' => 'setResponseHeader',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'header_name' => 
        array (
          'position' => 0,
          'name' => 'header_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'header_value' => 
        array (
          'position' => 1,
          'name' => 'header_value',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'response_code' => 
        array (
          'position' => 2,
          'name' => 'response_code',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'replace_header' => 
        array (
          'position' => 3,
          'name' => 'replace_header',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setResponseCode' => 
    array (
      'name' => 'setResponseCode',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'code' => 
        array (
          'position' => 0,
          'name' => 'code',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'negotiateLanguage' => 
    array (
      'name' => 'negotiateLanguage',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'supported' => 
        array (
          'position' => 0,
          'name' => 'supported',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'result_array' => 
        array (
          'position' => 1,
          'name' => 'result_array',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'negotiateContentType' => 
    array (
      'name' => 'negotiateContentType',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'supported' => 
        array (
          'position' => 0,
          'name' => 'supported',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'result_array' => 
        array (
          'position' => 1,
          'name' => 'result_array',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'negotiateEncoding' => 
    array (
      'name' => 'negotiateEncoding',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'supported' => 
        array (
          'position' => 0,
          'name' => 'supported',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'result_array' => 
        array (
          'position' => 1,
          'name' => 'result_array',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'negotiateCharset' => 
    array (
      'name' => 'negotiateCharset',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'supported' => 
        array (
          'position' => 0,
          'name' => 'supported',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'result_array' => 
        array (
          'position' => 1,
          'name' => 'result_array',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'negotiate' => 
    array (
      'name' => 'negotiate',
      'class' => 'http\\Env',
      'parameters' => 
      array (
        'params' => 
        array (
          'position' => 0,
          'name' => 'params',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'supported' => 
        array (
          'position' => 1,
          'name' => 'supported',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'primary_type_separator' => 
        array (
          'position' => 2,
          'name' => 'primary_type_separator',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'result_array' => 
        array (
          'position' => 3,
          'name' => 'result_array',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
