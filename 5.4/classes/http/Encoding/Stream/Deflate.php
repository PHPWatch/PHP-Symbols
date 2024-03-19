<?php

return array (
  'type' => 'class',
  'name' => 'http\\Encoding\\Stream\\Deflate',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Encoding\\Stream\\Deflate',
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
        'name' => 'http\\Encoding\\Stream\\Deflate class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-encoding-stream-deflate.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'FLUSH_NONE' => 0,
    'FLUSH_SYNC' => 1048576,
    'FLUSH_FULL' => 2097152,
    'TYPE_GZIP' => 16,
    'TYPE_ZLIB' => 0,
    'TYPE_RAW' => 32,
    'LEVEL_DEF' => 0,
    'LEVEL_MIN' => 1,
    'LEVEL_MAX' => 9,
    'STRATEGY_DEF' => 0,
    'STRATEGY_FILT' => 256,
    'STRATEGY_HUFF' => 512,
    'STRATEGY_RLE' => 768,
    'STRATEGY_FIXED' => 1024,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'encode' => 
    array (
      'name' => 'encode',
      'class' => 'http\\Encoding\\Stream\\Deflate',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
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
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'http\\Encoding\\Stream',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
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
    'update' => 
    array (
      'name' => 'update',
      'class' => 'http\\Encoding\\Stream',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
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
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'flush' => 
    array (
      'name' => 'flush',
      'class' => 'http\\Encoding\\Stream',
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
    'done' => 
    array (
      'name' => 'done',
      'class' => 'http\\Encoding\\Stream',
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
    'finish' => 
    array (
      'name' => 'finish',
      'class' => 'http\\Encoding\\Stream',
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
