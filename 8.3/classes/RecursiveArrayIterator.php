<?php

return array (
  'type' => 'class',
  'name' => 'RecursiveArrayIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'RecursiveArrayIterator',
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
        'name' => 'RecursiveArrayIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.recursivearrayiterator.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
    0 => 'Countable',
    1 => 'Serializable',
    2 => 'ArrayAccess',
    3 => 'Iterator',
    4 => 'Traversable',
    5 => 'SeekableIterator',
    6 => 'RecursiveIterator',
  ),
  'constants' => 
  array (
    'STD_PROP_LIST' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int STD_PROP_LIST ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ARRAY_AS_PROPS' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int ARRAY_AS_PROPS ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'CHILD_ARRAYS_ONLY' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int CHILD_ARRAYS_ONLY ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'hasChildren' => 
    array (
      'name' => 'hasChildren',
      'class' => 'RecursiveArrayIterator',
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
      'class' => 'RecursiveArrayIterator',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'array' => 
        array (
          'position' => 0,
          'name' => 'array',
          'type' => 'object|array',
          'is_optional' => true,
          'has_default_value' => true,
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
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'key' => 
        array (
          'position' => 0,
          'name' => 'key',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
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
    'append' => 
    array (
      'name' => 'append',
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'value' => 
        array (
          'position' => 0,
          'name' => 'value',
          'type' => 'mixed',
          'is_optional' => false,
          'has_default_value' => false,
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
    'getArrayCopy' => 
    array (
      'name' => 'getArrayCopy',
      'class' => 'ArrayIterator',
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
      'class' => 'ArrayIterator',
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
    'getFlags' => 
    array (
      'name' => 'getFlags',
      'class' => 'ArrayIterator',
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
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
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
    'asort' => 
    array (
      'name' => 'asort',
      'class' => 'ArrayIterator',
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
          'default_value_constant' => 'SORT_REGULAR',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'ksort' => 
    array (
      'name' => 'ksort',
      'class' => 'ArrayIterator',
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
          'default_value_constant' => 'SORT_REGULAR',
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'uasort' => 
    array (
      'name' => 'uasort',
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
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
    'uksort' => 
    array (
      'name' => 'uksort',
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
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
    'natsort' => 
    array (
      'name' => 'natsort',
      'class' => 'ArrayIterator',
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
    'natcasesort' => 
    array (
      'name' => 'natcasesort',
      'class' => 'ArrayIterator',
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
    'unserialize' => 
    array (
      'name' => 'unserialize',
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
    'serialize' => 
    array (
      'name' => 'serialize',
      'class' => 'ArrayIterator',
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
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'ArrayIterator',
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
    '__unserialize' => 
    array (
      'name' => '__unserialize',
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
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
      'class' => 'ArrayIterator',
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
      'class' => 'ArrayIterator',
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
      'class' => 'ArrayIterator',
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
      'class' => 'ArrayIterator',
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
      'class' => 'ArrayIterator',
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
    'seek' => 
    array (
      'name' => 'seek',
      'class' => 'ArrayIterator',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
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
    '__debugInfo' => 
    array (
      'name' => '__debugInfo',
      'class' => 'ArrayIterator',
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
  'extension' => 'SPL',
  'toString' => 'Class [ <internal:SPL> <iterateable> class RecursiveArrayIterator extends ArrayIterator implements Countable, Serializable, ArrayAccess, Iterator, Traversable, SeekableIterator, RecursiveIterator ] {

  - Constants [3] {
    Constant [ public int STD_PROP_LIST ] { 1 }
    Constant [ public int ARRAY_AS_PROPS ] { 2 }
    Constant [ public int CHILD_ARRAYS_ONLY ] { 4 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [29] {
    Method [ <internal:SPL, prototype RecursiveIterator> public method hasChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, prototype RecursiveIterator> public method getChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ ?RecursiveArrayIterator ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <optional> object|array $array = [] ]
        Parameter #1 [ <optional> int $flags = 0 ]
      }
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype ArrayAccess> public method offsetExists ] {

      - Parameters [1] {
        Parameter #0 [ <required> mixed $key ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype ArrayAccess> public method offsetGet ] {

      - Parameters [1] {
        Parameter #0 [ <required> mixed $key ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype ArrayAccess> public method offsetSet ] {

      - Parameters [2] {
        Parameter #0 [ <required> mixed $key ]
        Parameter #1 [ <required> mixed $value ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype ArrayAccess> public method offsetUnset ] {

      - Parameters [1] {
        Parameter #0 [ <required> mixed $key ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method append ] {

      - Parameters [1] {
        Parameter #0 [ <required> mixed $value ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method getArrayCopy ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype Countable> public method count ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method getFlags ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $flags ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method asort ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $flags = SORT_REGULAR ]
      }
      - Tentative return [ true ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method ksort ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $flags = SORT_REGULAR ]
      }
      - Tentative return [ true ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method uasort ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
      - Tentative return [ true ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method uksort ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
      - Tentative return [ true ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method natsort ] {

      - Parameters [0] {
      }
      - Tentative return [ true ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method natcasesort ] {

      - Parameters [0] {
      }
      - Tentative return [ true ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype Serializable> public method unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $data ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype Serializable> public method serialize ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method __serialize ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method __unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Tentative return [ string|int|null ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits ArrayIterator, prototype SeekableIterator> public method seek ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $offset ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits ArrayIterator> public method __debugInfo ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }
  }
}
',
);
