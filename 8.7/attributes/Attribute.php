<?php

return array (
  'type' => 'attribute',
  'name' => 'Attribute',
  'meta' => 
  array (
    'type' => 'attribute',
    'name' => 'Attribute',
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
        'name' => 'Attribute interface (php.net)',
        'url' => 'https://www.php.net/manual/class.attribute.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'TARGET_CLASS' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int TARGET_CLASS ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TARGET_FUNCTION' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int TARGET_FUNCTION ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TARGET_METHOD' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int TARGET_METHOD ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TARGET_PROPERTY' => 
    array (
      'value' => 8,
      'toString' => 'Constant [ public int TARGET_PROPERTY ] { 8 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TARGET_CLASS_CONSTANT' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int TARGET_CLASS_CONSTANT ] { 16 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TARGET_PARAMETER' => 
    array (
      'value' => 32,
      'toString' => 'Constant [ public int TARGET_PARAMETER ] { 32 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TARGET_CONSTANT' => 
    array (
      'value' => 64,
      'toString' => 'Constant [ public int TARGET_CONSTANT ] { 64 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'TARGET_ALL' => 
    array (
      'value' => 127,
      'toString' => 'Constant [ public int TARGET_ALL ] { 127 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
    'IS_REPEATABLE' => 
    array (
      'value' => 128,
      'toString' => 'Constant [ public int IS_REPEATABLE ] { 128 }
',
      'visibility' => 1,
      'isFinal' => false,
      'type' => 'int',
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Attribute',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'Attribute::TARGET_ALL',
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
  'interfaces' => 
  array (
  ),
  'properties' => 
  array (
    'flags' => 
    array (
      'name' => 'flags',
      'class' => 'Attribute',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'Core',
  'toString' => 'Class [ <internal:Core> final class Attribute ] {

  - Constants [9] {
    Constant [ public int TARGET_CLASS ] { 1 }
    Constant [ public int TARGET_FUNCTION ] { 2 }
    Constant [ public int TARGET_METHOD ] { 4 }
    Constant [ public int TARGET_PROPERTY ] { 8 }
    Constant [ public int TARGET_CLASS_CONSTANT ] { 16 }
    Constant [ public int TARGET_PARAMETER ] { 32 }
    Constant [ public int TARGET_CONSTANT ] { 64 }
    Constant [ public int TARGET_ALL ] { 127 }
    Constant [ public int IS_REPEATABLE ] { 128 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ public int $flags ]
  }

  - Methods [1] {
    Method [ <internal:Core, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $flags = Attribute::TARGET_ALL ]
      }
    }
  }
}
',
  'attributes' => 
  array (
    0 => 'Attribute',
  ),
  'modifiers' => 32,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_instantiable' => true,
  'is_read_only' => false,
);
