<?php

return array (
  'type' => 'class',
  'name' => 'RecursiveIteratorIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'RecursiveIteratorIterator',
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
        'name' => 'RecursiveIteratorIterator interface (php.net)',
        'url' => 'https://www.php.net/manual/class.recursiveiteratoriterator.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'LEAVES_ONLY' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int LEAVES_ONLY ] { 0 }
',
      'visibility' => 1,
    ),
    'SELF_FIRST' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int SELF_FIRST ] { 1 }
',
      'visibility' => 1,
    ),
    'CHILD_FIRST' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int CHILD_FIRST ] { 2 }
',
      'visibility' => 1,
    ),
    'CATCH_GET_CHILD' => 
    array (
      'value' => 16,
      'toString' => 'Constant [ public int CATCH_GET_CHILD ] { 16 }
',
      'visibility' => 1,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'RecursiveIteratorIterator',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => 'Traversable',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mode' => 
        array (
          'position' => 1,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'RecursiveIteratorIterator::LEAVES_ONLY',
        ),
        'flags' => 
        array (
          'position' => 2,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'RecursiveIteratorIterator',
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
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'RecursiveIteratorIterator',
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'RecursiveIteratorIterator',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'RecursiveIteratorIterator',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'RecursiveIteratorIterator',
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
    'getDepth' => 
    array (
      'name' => 'getDepth',
      'class' => 'RecursiveIteratorIterator',
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
    'getSubIterator' => 
    array (
      'name' => 'getSubIterator',
      'class' => 'RecursiveIteratorIterator',
      'parameters' => 
      array (
        'level' => 
        array (
          'position' => 0,
          'name' => 'level',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'getInnerIterator' => 
    array (
      'name' => 'getInnerIterator',
      'class' => 'RecursiveIteratorIterator',
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
    'beginIteration' => 
    array (
      'name' => 'beginIteration',
      'class' => 'RecursiveIteratorIterator',
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
    'endIteration' => 
    array (
      'name' => 'endIteration',
      'class' => 'RecursiveIteratorIterator',
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
    'callHasChildren' => 
    array (
      'name' => 'callHasChildren',
      'class' => 'RecursiveIteratorIterator',
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
    'callGetChildren' => 
    array (
      'name' => 'callGetChildren',
      'class' => 'RecursiveIteratorIterator',
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
    'beginChildren' => 
    array (
      'name' => 'beginChildren',
      'class' => 'RecursiveIteratorIterator',
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
    'endChildren' => 
    array (
      'name' => 'endChildren',
      'class' => 'RecursiveIteratorIterator',
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
    'nextElement' => 
    array (
      'name' => 'nextElement',
      'class' => 'RecursiveIteratorIterator',
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
    'setMaxDepth' => 
    array (
      'name' => 'setMaxDepth',
      'class' => 'RecursiveIteratorIterator',
      'parameters' => 
      array (
        'maxDepth' => 
        array (
          'position' => 0,
          'name' => 'maxDepth',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'getMaxDepth' => 
    array (
      'name' => 'getMaxDepth',
      'class' => 'RecursiveIteratorIterator',
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
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
    2 => 'OuterIterator',
  ),
  'properties' => 
  array (
  ),
  'extension' => 'SPL',
  'toString' => 'Class [ <internal:SPL> <iterateable> class RecursiveIteratorIterator implements Iterator, Traversable, OuterIterator ] {

  - Constants [4] {
    Constant [ public int LEAVES_ONLY ] { 0 }
    Constant [ public int SELF_FIRST ] { 1 }
    Constant [ public int CHILD_FIRST ] { 2 }
    Constant [ public int CATCH_GET_CHILD ] { 16 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [18] {
    Method [ <internal:SPL, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> Traversable $iterator ]
        Parameter #1 [ <optional> int $mode = RecursiveIteratorIterator::LEAVES_ONLY ]
        Parameter #2 [ <optional> int $flags = 0 ]
      }
    }

    Method [ <internal:SPL, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method getDepth ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method getSubIterator ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $level = null ]
      }
    }

    Method [ <internal:SPL, prototype OuterIterator> public method getInnerIterator ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method beginIteration ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method endIteration ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method callHasChildren ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method callGetChildren ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method beginChildren ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method endChildren ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method nextElement ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method setMaxDepth ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $maxDepth = -1 ]
      }
    }

    Method [ <internal:SPL> public method getMaxDepth ] {

      - Parameters [0] {
      }
    }
  }
}
',
  'modifiers' => 0,
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
  'is_cloneable' => false,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
