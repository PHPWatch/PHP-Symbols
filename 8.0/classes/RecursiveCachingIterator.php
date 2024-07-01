<?php

return array (
  'type' => 'class',
  'name' => 'RecursiveCachingIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'RecursiveCachingIterator',
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
        'name' => 'RecursiveCachingIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.recursivecachingiterator.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Countable',
    1 => 'ArrayAccess',
    2 => 'Iterator',
    3 => 'Traversable',
    4 => 'OuterIterator',
    5 => 'Stringable',
    6 => 'RecursiveIterator',
  ),
  'constants' => 
  array (
    'CALL_TOSTRING' => 1,
    'CATCH_GET_CHILD' => 16,
    'TOSTRING_USE_KEY' => 2,
    'TOSTRING_USE_CURRENT' => 4,
    'TOSTRING_USE_INNER' => 8,
    'FULL_CACHE' => 256,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'RecursiveCachingIterator',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => 'Iterator',
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
          'default_value' => 1,
          'has_default_value_constant' => true,
          'default_value_constant' => 'RecursiveCachingIterator::CALL_TOSTRING',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasChildren' => 
    array (
      'name' => 'hasChildren',
      'class' => 'RecursiveCachingIterator',
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
    'getChildren' => 
    array (
      'name' => 'getChildren',
      'class' => 'RecursiveCachingIterator',
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
      'class' => 'CachingIterator',
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
      'class' => 'CachingIterator',
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
      'class' => 'CachingIterator',
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
    'hasNext' => 
    array (
      'name' => 'hasNext',
      'class' => 'CachingIterator',
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
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'CachingIterator',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getFlags' => 
    array (
      'name' => 'getFlags',
      'class' => 'CachingIterator',
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
    'setFlags' => 
    array (
      'name' => 'setFlags',
      'class' => 'CachingIterator',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
          'type' => 'int',
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
    'offsetGet' => 
    array (
      'name' => 'offsetGet',
      'class' => 'CachingIterator',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
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
    'offsetSet' => 
    array (
      'name' => 'offsetSet',
      'class' => 'CachingIterator',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
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
          'type' => 'mixed',
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
    'offsetUnset' => 
    array (
      'name' => 'offsetUnset',
      'class' => 'CachingIterator',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
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
    'offsetExists' => 
    array (
      'name' => 'offsetExists',
      'class' => 'CachingIterator',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
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
    'getCache' => 
    array (
      'name' => 'getCache',
      'class' => 'CachingIterator',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'CachingIterator',
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
    'getInnerIterator' => 
    array (
      'name' => 'getInnerIterator',
      'class' => 'IteratorIterator',
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
      'class' => 'IteratorIterator',
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
      'class' => 'IteratorIterator',
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
  'toString' => 'Class [ <internal:SPL> <iterateable> class RecursiveCachingIterator extends CachingIterator implements Countable, ArrayAccess, Iterator, Traversable, OuterIterator, Stringable, RecursiveIterator ] {

  - Constants [6] {
    Constant [ public int CALL_TOSTRING ] { 1 }
    Constant [ public int CATCH_GET_CHILD ] { 16 }
    Constant [ public int TOSTRING_USE_KEY ] { 2 }
    Constant [ public int TOSTRING_USE_CURRENT ] { 4 }
    Constant [ public int TOSTRING_USE_INNER ] { 8 }
    Constant [ public int FULL_CACHE ] { 256 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [19] {
    Method [ <internal:SPL, overwrites CachingIterator, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> Iterator $iterator ]
        Parameter #1 [ <optional> int $flags = RecursiveCachingIterator::CALL_TOSTRING ]
      }
    }

    Method [ <internal:SPL, prototype RecursiveIterator> public method hasChildren ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, prototype RecursiveIterator> public method getChildren ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits CachingIterator, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits CachingIterator, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits CachingIterator, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits CachingIterator> public method hasNext ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits CachingIterator, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:SPL, inherits CachingIterator> public method getFlags ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits CachingIterator> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $flags ]
      }
    }

    Method [ <internal:SPL, inherits CachingIterator, prototype ArrayAccess> public method offsetGet ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:SPL, inherits CachingIterator, prototype ArrayAccess> public method offsetSet ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> mixed $value ]
      }
    }

    Method [ <internal:SPL, inherits CachingIterator, prototype ArrayAccess> public method offsetUnset ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:SPL, inherits CachingIterator, prototype ArrayAccess> public method offsetExists ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
    }

    Method [ <internal:SPL, inherits CachingIterator> public method getCache ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits CachingIterator, prototype Countable> public method count ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits IteratorIterator, prototype OuterIterator> public method getInnerIterator ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits IteratorIterator, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits IteratorIterator, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
