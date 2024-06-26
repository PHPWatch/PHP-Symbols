<?php

return array (
  'type' => 'class',
  'name' => 'http\\Header',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'http\\Header',
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
        'name' => 'http\\Header class (php.net)',
        'url' => 'https://www.php.net/manual/class.http-header.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Serializable',
  ),
  'constants' => 
  array (
    'MATCH_LOOSE' => 0,
    'MATCH_CASE' => 1,
    'MATCH_WORD' => 16,
    'MATCH_FULL' => 32,
    'MATCH_STRICT' => 33,
  ),
  'properties' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'class' => 'http\\Header',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'value' => 
    array (
      'name' => 'value',
      'class' => 'http\\Header',
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
      'class' => 'http\\Header',
      'parameters' => 
      array (
        'name' => 
        array (
          'position' => 0,
          'name' => 'name',
          'type' => NULL,
          'is_optional' => true,
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
    'serialize' => 
    array (
      'name' => 'serialize',
      'class' => 'http\\Header',
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
      'class' => 'http\\Header',
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
    'toString' => 
    array (
      'name' => 'toString',
      'class' => 'http\\Header',
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
    'unserialize' => 
    array (
      'name' => 'unserialize',
      'class' => 'http\\Header',
      'parameters' => 
      array (
        'serialized' => 
        array (
          'position' => 0,
          'name' => 'serialized',
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
    'match' => 
    array (
      'name' => 'match',
      'class' => 'http\\Header',
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
    'negotiate' => 
    array (
      'name' => 'negotiate',
      'class' => 'http\\Header',
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
        'result' => 
        array (
          'position' => 1,
          'name' => 'result',
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
    'getParams' => 
    array (
      'name' => 'getParams',
      'class' => 'http\\Header',
      'parameters' => 
      array (
        'param_sep' => 
        array (
          'position' => 0,
          'name' => 'param_sep',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arg_sep' => 
        array (
          'position' => 1,
          'name' => 'arg_sep',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'val_sep' => 
        array (
          'position' => 2,
          'name' => 'val_sep',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
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
    'parse' => 
    array (
      'name' => 'parse',
      'class' => 'http\\Header',
      'parameters' => 
      array (
        'string' => 
        array (
          'position' => 0,
          'name' => 'string',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'header_class' => 
        array (
          'position' => 1,
          'name' => 'header_class',
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
  'toString' => 'Class [ <internal:http> class http\\Header implements Serializable ] {

  - Constants [5] {
    Constant [ integer MATCH_LOOSE ] { 0 }
    Constant [ integer MATCH_CASE ] { 1 }
    Constant [ integer MATCH_WORD ] { 16 }
    Constant [ integer MATCH_FULL ] { 32 }
    Constant [ integer MATCH_STRICT ] { 33 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:http> static public method parse ] {

      - Parameters [2] {
        Parameter #0 [ <required> $string ]
        Parameter #1 [ <optional> $header_class ]
      }
    }
  }

  - Properties [2] {
    Property [ <default> public $name ]
    Property [ <default> public $value ]
  }

  - Methods [8] {
    Method [ <internal:http, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $name ]
        Parameter #1 [ <optional> $value ]
      }
    }

    Method [ <internal:http, prototype Serializable> public method serialize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method __toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http> public method toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:http, prototype Serializable> public method unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $serialized ]
      }
    }

    Method [ <internal:http> public method match ] {

      - Parameters [2] {
        Parameter #0 [ <required> $value ]
        Parameter #1 [ <optional> $flags ]
      }
    }

    Method [ <internal:http> public method negotiate ] {

      - Parameters [2] {
        Parameter #0 [ <required> $supported ]
        Parameter #1 [ <optional> &$result ]
      }
    }

    Method [ <internal:http> public method getParams ] {

      - Parameters [4] {
        Parameter #0 [ <optional> $param_sep ]
        Parameter #1 [ <optional> $arg_sep ]
        Parameter #2 [ <optional> $val_sep ]
        Parameter #3 [ <optional> $flags ]
      }
    }
  }
}
',
);
