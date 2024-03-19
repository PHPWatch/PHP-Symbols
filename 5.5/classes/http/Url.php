<?php

return array (
  'type' => 'class',
  'name' => 'http\\Url',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Url',
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
        'name' => 'http\\Url class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-url.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'REPLACE' => 0,
    'JOIN_PATH' => 1,
    'JOIN_QUERY' => 2,
    'STRIP_USER' => 4,
    'STRIP_PASS' => 8,
    'STRIP_AUTH' => 12,
    'STRIP_PORT' => 32,
    'STRIP_PATH' => 64,
    'STRIP_QUERY' => 128,
    'STRIP_FRAGMENT' => 256,
    'STRIP_ALL' => 492,
    'FROM_ENV' => 4096,
    'SANITIZE_PATH' => 8192,
    'PARSE_MBLOC' => 65536,
    'PARSE_MBUTF8' => 131072,
    'PARSE_TOIDN' => 1048576,
    'PARSE_TOPCT' => 2097152,
    'IGNORE_ERRORS' => 268435456,
    'SILENT_ERRORS' => 536870912,
    'STDFLAGS' => 3350531,
  ),
  'properties' => 
  array (
    'scheme' => 
    array (
      'name' => 'scheme',
      'class' => 'http\\Url',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'user' => 
    array (
      'name' => 'user',
      'class' => 'http\\Url',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'pass' => 
    array (
      'name' => 'pass',
      'class' => 'http\\Url',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'host' => 
    array (
      'name' => 'host',
      'class' => 'http\\Url',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'port' => 
    array (
      'name' => 'port',
      'class' => 'http\\Url',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'path' => 
    array (
      'name' => 'path',
      'class' => 'http\\Url',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'query' => 
    array (
      'name' => 'query',
      'class' => 'http\\Url',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'fragment' => 
    array (
      'name' => 'fragment',
      'class' => 'http\\Url',
      'type' => NULL,
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
      'class' => 'http\\Url',
      'parameters' => 
      array (
        'old_url' => 
        array (
          'position' => 0,
          'name' => 'old_url',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'new_url' => 
        array (
          'position' => 1,
          'name' => 'new_url',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
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
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mod' => 
    array (
      'name' => 'mod',
      'class' => 'http\\Url',
      'parameters' => 
      array (
        'more_url_parts' => 
        array (
          'position' => 0,
          'name' => 'more_url_parts',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
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
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toString' => 
    array (
      'name' => 'toString',
      'class' => 'http\\Url',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'http\\Url',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'toArray' => 
    array (
      'name' => 'toArray',
      'class' => 'http\\Url',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
);
