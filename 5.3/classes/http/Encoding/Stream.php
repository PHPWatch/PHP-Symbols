<?php

return array (
  'type' => 'class',
  'name' => 'http\\Encoding\\Stream',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Encoding\\Stream',
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
        'name' => 'http\\Encoding\\Stream class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-encoding-stream.php',
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
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
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
  'is_abstract' => true,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:http> abstract class http\\Encoding\\Stream ] {

  - Constants [3] {
    Constant [ integer FLUSH_NONE ] { 0 }
    Constant [ integer FLUSH_SYNC ] { 1048576 }
    Constant [ integer FLUSH_FULL ] { 2097152 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [5] {
    Method [ <internal:http, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $flags ]
      }
    }

    Method [ <internal:http> public method update ] {

      - Parameters [1] {
        Parameter #0 [ <required> $data ]
      }
    }

    Method [ <internal:http> public method flush ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method done ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method finish ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
