<?php

return array (
  'type' => 'class',
  'name' => 'CURLStringFile',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'CURLStringFile',
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
        'name' => 'CURLStringFile class (php.net)',
        'url' => 'https://www.php.net/manual/class.curlstringfile.php',
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
    'data' => 
    array (
      'name' => 'data',
      'class' => 'CURLStringFile',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'postname' => 
    array (
      'name' => 'postname',
      'class' => 'CURLStringFile',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'mime' => 
    array (
      'name' => 'mime',
      'class' => 'CURLStringFile',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'CURLStringFile',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'postname' => 
        array (
          'position' => 1,
          'name' => 'postname',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mime' => 
        array (
          'position' => 2,
          'name' => 'mime',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'application/octet-stream',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
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
  'toString' => 'Class [ <internal:curl> class CURLStringFile ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [3] {
    Property [ public string $data ]
    Property [ public string $postname ]
    Property [ public string $mime ]
  }

  - Methods [1] {
    Method [ <internal:curl, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> string $data ]
        Parameter #1 [ <required> string $postname ]
        Parameter #2 [ <optional> string $mime = "application/octet-stream" ]
      }
    }
  }
}
',
);
