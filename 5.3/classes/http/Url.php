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
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:http> class http\\Url ] {

  - Constants [20] {
    Constant [ integer REPLACE ] { 0 }
    Constant [ integer JOIN_PATH ] { 1 }
    Constant [ integer JOIN_QUERY ] { 2 }
    Constant [ integer STRIP_USER ] { 4 }
    Constant [ integer STRIP_PASS ] { 8 }
    Constant [ integer STRIP_AUTH ] { 12 }
    Constant [ integer STRIP_PORT ] { 32 }
    Constant [ integer STRIP_PATH ] { 64 }
    Constant [ integer STRIP_QUERY ] { 128 }
    Constant [ integer STRIP_FRAGMENT ] { 256 }
    Constant [ integer STRIP_ALL ] { 492 }
    Constant [ integer FROM_ENV ] { 4096 }
    Constant [ integer SANITIZE_PATH ] { 8192 }
    Constant [ integer PARSE_MBLOC ] { 65536 }
    Constant [ integer PARSE_MBUTF8 ] { 131072 }
    Constant [ integer PARSE_TOIDN ] { 1048576 }
    Constant [ integer PARSE_TOPCT ] { 2097152 }
    Constant [ integer IGNORE_ERRORS ] { 268435456 }
    Constant [ integer SILENT_ERRORS ] { 536870912 }
    Constant [ integer STDFLAGS ] { 3350531 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [8] {
    Property [ <default> public $scheme ]
    Property [ <default> public $user ]
    Property [ <default> public $pass ]
    Property [ <default> public $host ]
    Property [ <default> public $port ]
    Property [ <default> public $path ]
    Property [ <default> public $query ]
    Property [ <default> public $fragment ]
  }

  - Methods [5] {
    Method [ <internal:http, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $old_url ]
        Parameter #1 [ <optional> $new_url ]
        Parameter #2 [ <optional> $flags ]
      }
    }

    Method [ <internal:http> public method mod ] {

      - Parameters [2] {
        Parameter #0 [ <required> $more_url_parts ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:http> public method toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method __toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method toArray ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
