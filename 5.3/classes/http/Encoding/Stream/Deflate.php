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
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:http> class http\\Encoding\\Stream\\Deflate extends http\\Encoding\\Stream ] {

  - Constants [14] {
    Constant [ integer FLUSH_NONE ] { 0 }
    Constant [ integer FLUSH_SYNC ] { 1048576 }
    Constant [ integer FLUSH_FULL ] { 2097152 }
    Constant [ integer TYPE_GZIP ] { 16 }
    Constant [ integer TYPE_ZLIB ] { 0 }
    Constant [ integer TYPE_RAW ] { 32 }
    Constant [ integer LEVEL_DEF ] { 0 }
    Constant [ integer LEVEL_MIN ] { 1 }
    Constant [ integer LEVEL_MAX ] { 9 }
    Constant [ integer STRATEGY_DEF ] { 0 }
    Constant [ integer STRATEGY_FILT ] { 256 }
    Constant [ integer STRATEGY_HUFF ] { 512 }
    Constant [ integer STRATEGY_RLE ] { 768 }
    Constant [ integer STRATEGY_FIXED ] { 1024 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:http> static public method encode ] {

      - Parameters [2] {
        Parameter #0 [ <required> $data ]
        Parameter #1 [ <optional> $flags ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [5] {
    Method [ <internal:http, inherits http\\Encoding\\Stream, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $flags ]
      }
    }

    Method [ <internal:http, inherits http\\Encoding\\Stream> public method update ] {

      - Parameters [1] {
        Parameter #0 [ <required> $data ]
      }
    }

    Method [ <internal:http, inherits http\\Encoding\\Stream> public method flush ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Encoding\\Stream> public method done ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, inherits http\\Encoding\\Stream> public method finish ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
