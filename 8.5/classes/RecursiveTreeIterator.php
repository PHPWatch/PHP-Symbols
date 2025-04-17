<?php

return array (
  'type' => 'class',
  'name' => 'RecursiveTreeIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'RecursiveTreeIterator',
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
        'name' => 'RecursiveTreeIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.recursivetreeiterator.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
    2 => 'OuterIterator',
  ),
  'constants' => 
  array (
    'LEAVES_ONLY' => 0,
    'SELF_FIRST' => 1,
    'CHILD_FIRST' => 2,
    'CATCH_GET_CHILD' => 16,
    'BYPASS_CURRENT' => 4,
    'BYPASS_KEY' => 8,
    'PREFIX_LEFT' => 0,
    'PREFIX_MID_HAS_NEXT' => 1,
    'PREFIX_MID_LAST' => 2,
    'PREFIX_END_HAS_NEXT' => 3,
    'PREFIX_END_LAST' => 4,
    'PREFIX_RIGHT' => 5,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'RecursiveTreeIterator',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => 'RecursiveIterator|IteratorAggregate',
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
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 8,
          'has_default_value_constant' => true,
          'default_value_constant' => 'RecursiveTreeIterator::BYPASS_KEY',
        ),
        'cachingIteratorFlags' => 
        array (
          'position' => 2,
          'name' => 'cachingIteratorFlags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 16,
          'has_default_value_constant' => true,
          'default_value_constant' => 'CachingIterator::CATCH_GET_CHILD',
        ),
        'mode' => 
        array (
          'position' => 3,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 1,
          'has_default_value_constant' => true,
          'default_value_constant' => 'RecursiveTreeIterator::SELF_FIRST',
        ),
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
      'class' => 'RecursiveTreeIterator',
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
      'class' => 'RecursiveTreeIterator',
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
    'getPrefix' => 
    array (
      'name' => 'getPrefix',
      'class' => 'RecursiveTreeIterator',
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
    'setPostfix' => 
    array (
      'name' => 'setPostfix',
      'class' => 'RecursiveTreeIterator',
      'parameters' => 
      array (
        'postfix' => 
        array (
          'position' => 0,
          'name' => 'postfix',
          'type' => 'string',
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
    'setPrefixPart' => 
    array (
      'name' => 'setPrefixPart',
      'class' => 'RecursiveTreeIterator',
      'parameters' => 
      array (
        'part' => 
        array (
          'position' => 0,
          'name' => 'part',
          'type' => 'int',
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
          'type' => 'string',
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
    'getEntry' => 
    array (
      'name' => 'getEntry',
      'class' => 'RecursiveTreeIterator',
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
    'getPostfix' => 
    array (
      'name' => 'getPostfix',
      'class' => 'RecursiveTreeIterator',
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
          'default_value' => -1,
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'SPL',
  'toString' => 'Class [ <internal:SPL> <iterateable> class RecursiveTreeIterator extends RecursiveIteratorIterator implements Iterator, Traversable, OuterIterator ] {

  - Constants [12] {
    Constant [ public int LEAVES_ONLY ] { 0 }
    Constant [ public int SELF_FIRST ] { 1 }
    Constant [ public int CHILD_FIRST ] { 2 }
    Constant [ public int CATCH_GET_CHILD ] { 16 }
    Constant [ public int BYPASS_CURRENT ] { 4 }
    Constant [ public int BYPASS_KEY ] { 8 }
    Constant [ public int PREFIX_LEFT ] { 0 }
    Constant [ public int PREFIX_MID_HAS_NEXT ] { 1 }
    Constant [ public int PREFIX_MID_LAST ] { 2 }
    Constant [ public int PREFIX_END_HAS_NEXT ] { 3 }
    Constant [ public int PREFIX_END_LAST ] { 4 }
    Constant [ public int PREFIX_RIGHT ] { 5 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [23] {
    Method [ <internal:SPL, overwrites RecursiveIteratorIterator, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <required> RecursiveIterator|IteratorAggregate $iterator ]
        Parameter #1 [ <optional> int $flags = RecursiveTreeIterator::BYPASS_KEY ]
        Parameter #2 [ <optional> int $cachingIteratorFlags = CachingIterator::CATCH_GET_CHILD ]
        Parameter #3 [ <optional> int $mode = RecursiveTreeIterator::SELF_FIRST ]
      }
    }

    Method [ <internal:SPL, overwrites RecursiveIteratorIterator, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:SPL, overwrites RecursiveIteratorIterator, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:SPL> public method getPrefix ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL> public method setPostfix ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $postfix ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL> public method setPrefixPart ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $part ]
        Parameter #1 [ <required> string $value ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL> public method getEntry ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL> public method getPostfix ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method getDepth ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method getSubIterator ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $level = null ]
      }
      - Tentative return [ ?RecursiveIterator ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator, prototype OuterIterator> public method getInnerIterator ] {

      - Parameters [0] {
      }
      - Tentative return [ RecursiveIterator ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method beginIteration ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method endIteration ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method callHasChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method callGetChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ ?RecursiveIterator ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method beginChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method endChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method nextElement ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method setMaxDepth ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $maxDepth = -1 ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RecursiveIteratorIterator> public method getMaxDepth ] {

      - Parameters [0] {
      }
      - Tentative return [ int|false ]
    }
  }
}
',
);
