<?php

return array (
  'type' => 'class',
  'name' => 'MessagePack',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MessagePack',
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
        'name' => 'MessagePack class (php.net)',
        'url' => 'https://www.php.net/manual/class.messagepack.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'OPT_PHPONLY' => -1001,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MessagePack',
      'parameters' => 
      array (
        'opt' => 
        array (
          'position' => 0,
          'name' => 'opt',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'setOption' => 
    array (
      'name' => 'setOption',
      'class' => 'MessagePack',
      'parameters' => 
      array (
        'option' => 
        array (
          'position' => 0,
          'name' => 'option',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'value' => 
        array (
          'position' => 1,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'pack' => 
    array (
      'name' => 'pack',
      'class' => 'MessagePack',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'unpack' => 
    array (
      'name' => 'unpack',
      'class' => 'MessagePack',
      'parameters' => 
      array (
        'str' => 
        array (
          'position' => 0,
          'name' => 'str',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'object' => 
        array (
          'position' => 1,
          'name' => 'object',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'unpacker' => 
    array (
      'name' => 'unpacker',
      'class' => 'MessagePack',
      'parameters' => 
      array (
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
  'toString' => 'Class [ <internal:msgpack> class MessagePack ] {

  - Constants [1] {
    Constant [ public integer OPT_PHPONLY ] { -1001 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [5] {
    Method [ <internal:msgpack, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $opt ]
      }
    }

    Method [ <internal:msgpack> public method setOption ] {

      - Parameters [2] {
        Parameter #0 [ <required> $option ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:msgpack> public method pack ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:msgpack> public method unpack ] {

      - Parameters [2] {
        Parameter #0 [ <required> $str ]
        Parameter #1 [ <optional> $object ]
      }
    }

    Method [ <internal:msgpack> public method unpacker ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
