<?php

return array (
  'type' => 'interface',
  'name' => 'Dom\\ChildNode',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'Dom\\ChildNode',
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
        'name' => 'Dom\\ChildNode interface (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-childnode.php',
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
    'remove' => 
    array (
      'name' => 'remove',
      'class' => 'Dom\\ChildNode',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'before' => 
    array (
      'name' => 'before',
      'class' => 'Dom\\ChildNode',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
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
    'after' => 
    array (
      'name' => 'after',
      'class' => 'Dom\\ChildNode',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
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
    'replaceWith' => 
    array (
      'name' => 'replaceWith',
      'class' => 'Dom\\ChildNode',
      'parameters' => 
      array (
        'nodes' => 
        array (
          'position' => 0,
          'name' => 'nodes',
          'type' => 'Dom\\Node|string',
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
  'toString' => 'Interface [ <internal:dom> interface Dom\\ChildNode ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ <internal:dom> abstract public method remove ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:dom> abstract public method before ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> abstract public method after ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }

    Method [ <internal:dom> abstract public method replaceWith ] {

      - Parameters [1] {
        Parameter #0 [ <optional> Dom\\Node|string ...$nodes ]
      }
      - Return [ void ]
    }
  }
}
',
);
