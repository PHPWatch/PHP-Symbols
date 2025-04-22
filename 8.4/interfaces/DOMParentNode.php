<?php

return array (
  'type' => 'interface',
  'name' => 'DOMParentNode',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'DOMParentNode',
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
        'name' => 'DOMParentNode interface (php.net)',
        'url' => 'https://www.php.net/manual/class.domparentnode.php',
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
  ),
  'methods' => 
  array (
    'append' => 
    array (
      'name' => 'append',
      'class' => 'DOMParentNode',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'prepend' => 
    array (
      'name' => 'prepend',
      'class' => 'DOMParentNode',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'replaceChildren' => 
    array (
      'name' => 'replaceChildren',
      'class' => 'DOMParentNode',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'extension' => 'dom',
  'toString' => 'Interface [ <internal:dom> interface DOMParentNode ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [3] {
    Method [ <internal:dom> abstract public method append ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> abstract public method prepend ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> abstract public method replaceChildren ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ...$nodes ]
      }
      - Return [ void ]
    }
  }
}
',
);
