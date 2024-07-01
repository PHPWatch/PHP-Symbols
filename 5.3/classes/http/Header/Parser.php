<?php

return array (
  'type' => 'class',
  'name' => 'http\\Header\\Parser',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Header\\Parser',
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
        'name' => 'http\\Header\\Parser class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-header-parser.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'CLEANUP' => 1,
    'STATE_FAILURE' => -1,
    'STATE_START' => 0,
    'STATE_KEY' => 1,
    'STATE_VALUE' => 2,
    'STATE_VALUE_EX' => 3,
    'STATE_HEADER_DONE' => 4,
    'STATE_DONE' => 5,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'getState' => 
    array (
      'name' => 'getState',
      'class' => 'http\\Header\\Parser',
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
      'class' => 'http\\Header\\Parser',
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
        'headers' => 
        array (
          'position' => 2,
          'name' => 'headers',
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
      'class' => 'http\\Header\\Parser',
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
        'headers' => 
        array (
          'position' => 2,
          'name' => 'headers',
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
  'toString' => 'Class [ <internal:http> class http\\Header\\Parser ] {

  - Constants [8] {
    Constant [ integer CLEANUP ] { 1 }
    Constant [ integer STATE_FAILURE ] { -1 }
    Constant [ integer STATE_START ] { 0 }
    Constant [ integer STATE_KEY ] { 1 }
    Constant [ integer STATE_VALUE ] { 2 }
    Constant [ integer STATE_VALUE_EX ] { 3 }
    Constant [ integer STATE_HEADER_DONE ] { 4 }
    Constant [ integer STATE_DONE ] { 5 }
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
        Parameter #2 [ <required> array or NULL &$headers ]
      }
    }

    Method [ <internal:http> public method stream ] {

      - Parameters [3] {
        Parameter #0 [ <required> $stream ]
        Parameter #1 [ <required> $flags ]
        Parameter #2 [ <required> array or NULL &$headers ]
      }
    }
  }
}
',
);
