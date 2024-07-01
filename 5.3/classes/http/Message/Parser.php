<?php

return array (
  'type' => 'class',
  'name' => 'http\\Message\\Parser',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Message\\Parser',
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
        'name' => 'http\\Message\\Parser class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-message-parser.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'CLEANUP' => 1,
    'DUMB_BODIES' => 2,
    'EMPTY_REDIRECTS' => 4,
    'GREEDY' => 8,
    'STATE_FAILURE' => -1,
    'STATE_START' => 0,
    'STATE_HEADER' => 1,
    'STATE_HEADER_DONE' => 2,
    'STATE_BODY' => 3,
    'STATE_BODY_DUMB' => 4,
    'STATE_BODY_LENGTH' => 5,
    'STATE_BODY_CHUNKED' => 6,
    'STATE_BODY_DONE' => 7,
    'STATE_UPDATE_CL' => 8,
    'STATE_DONE' => 9,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'getState' => 
    array (
      'name' => 'getState',
      'class' => 'http\\Message\\Parser',
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
    'parse' => 
    array (
      'name' => 'parse',
      'class' => 'http\\Message\\Parser',
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
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'message' => 
        array (
          'position' => 2,
          'name' => 'message',
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
    'stream' => 
    array (
      'name' => 'stream',
      'class' => 'http\\Message\\Parser',
      'parameters' => 
      array (
        'stream' => 
        array (
          'position' => 0,
          'name' => 'stream',
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
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'message' => 
        array (
          'position' => 2,
          'name' => 'message',
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
  ),
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:http> class http\\Message\\Parser ] {

  - Constants [15] {
    Constant [ integer CLEANUP ] { 1 }
    Constant [ integer DUMB_BODIES ] { 2 }
    Constant [ integer EMPTY_REDIRECTS ] { 4 }
    Constant [ integer GREEDY ] { 8 }
    Constant [ integer STATE_FAILURE ] { -1 }
    Constant [ integer STATE_START ] { 0 }
    Constant [ integer STATE_HEADER ] { 1 }
    Constant [ integer STATE_HEADER_DONE ] { 2 }
    Constant [ integer STATE_BODY ] { 3 }
    Constant [ integer STATE_BODY_DUMB ] { 4 }
    Constant [ integer STATE_BODY_LENGTH ] { 5 }
    Constant [ integer STATE_BODY_CHUNKED ] { 6 }
    Constant [ integer STATE_BODY_DONE ] { 7 }
    Constant [ integer STATE_UPDATE_CL ] { 8 }
    Constant [ integer STATE_DONE ] { 9 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [3] {
    Method [ <internal:http> public method getState ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method parse ] {

      - Parameters [3] {
        Parameter #0 [ <required> $data ]
        Parameter #1 [ <required> $flags ]
        Parameter #2 [ <required> &$message ]
      }
    }

    Method [ <internal:http> public method stream ] {

      - Parameters [3] {
        Parameter #0 [ <required> $stream ]
        Parameter #1 [ <required> $flags ]
        Parameter #2 [ <required> &$message ]
      }
    }
  }
}
',
);
