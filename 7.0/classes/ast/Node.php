<?php

return array (
  'type' => 'class',
  'name' => 'ast\\Node',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ast\\Node',
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
        'name' => 'ast\\Node class (php.net)',
        'url' => 'https://www.php.net/manual/class.ast-node.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
    'kind' => 
    array (
      'name' => 'kind',
      'class' => 'ast\\Node',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'flags' => 
    array (
      'name' => 'flags',
      'class' => 'ast\\Node',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'lineno' => 
    array (
      'name' => 'lineno',
      'class' => 'ast\\Node',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'children' => 
    array (
      'name' => 'children',
      'class' => 'ast\\Node',
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
      'class' => 'ast\\Node',
      'parameters' => 
      array (
        'kind' => 
        array (
          'position' => 0,
          'name' => 'kind',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'children' => 
        array (
          'position' => 2,
          'name' => 'children',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'lineno' => 
        array (
          'position' => 3,
          'name' => 'lineno',
          'type' => 'int',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:ast> class ast\\Node ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [4] {
    Property [ <default> public $kind ]
    Property [ <default> public $flags ]
    Property [ <default> public $lineno ]
    Property [ <default> public $children ]
  }

  - Methods [1] {
    Method [ <internal:ast, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <optional> integer or NULL $kind ]
        Parameter #1 [ <optional> integer or NULL $flags ]
        Parameter #2 [ <optional> array or NULL $children ]
        Parameter #3 [ <optional> integer or NULL $lineno ]
      }
    }
  }
}
',
);
