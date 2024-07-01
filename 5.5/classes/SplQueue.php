<?php

return array (
  'type' => 'class',
  'name' => 'SplQueue',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'SplQueue',
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
        'name' => 'SplQueue class (php.net)',
        'url' => 'https://www.php.net/manual/class.splqueue.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Serializable',
    1 => 'ArrayAccess',
    2 => 'Countable',
    3 => 'Traversable',
    4 => 'Iterator',
  ),
  'constants' => 
  array (
    'IT_MODE_LIFO' => 2,
    'IT_MODE_FIFO' => 0,
    'IT_MODE_DELETE' => 1,
    'IT_MODE_KEEP' => 0,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'enqueue' => 
    array (
      'name' => 'enqueue',
      'class' => 'SplQueue',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'dequeue' => 
    array (
      'name' => 'dequeue',
      'class' => 'SplQueue',
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
    'pop' => 
    array (
      'name' => 'pop',
      'class' => 'SplDoublyLinkedList',
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
    'shift' => 
    array (
      'name' => 'shift',
      'class' => 'SplDoublyLinkedList',
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
    'push' => 
    array (
      'name' => 'push',
      'class' => 'SplDoublyLinkedList',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'unshift' => 
    array (
      'name' => 'unshift',
      'class' => 'SplDoublyLinkedList',
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'top' => 
    array (
      'name' => 'top',
      'class' => 'SplDoublyLinkedList',
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
    'bottom' => 
    array (
      'name' => 'bottom',
      'class' => 'SplDoublyLinkedList',
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
    'isEmpty' => 
    array (
      'name' => 'isEmpty',
      'class' => 'SplDoublyLinkedList',
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
    'setIteratorMode' => 
    array (
      'name' => 'setIteratorMode',
      'class' => 'SplDoublyLinkedList',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
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
    'getIteratorMode' => 
    array (
      'name' => 'getIteratorMode',
      'class' => 'SplDoublyLinkedList',
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'SplDoublyLinkedList',
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
    'offsetExists' => 
    array (
      'name' => 'offsetExists',
      'class' => 'SplDoublyLinkedList',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
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
    'offsetGet' => 
    array (
      'name' => 'offsetGet',
      'class' => 'SplDoublyLinkedList',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
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
    'offsetSet' => 
    array (
      'name' => 'offsetSet',
      'class' => 'SplDoublyLinkedList',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newval' => 
        array (
          'position' => 1,
          'name' => 'newval',
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
    'offsetUnset' => 
    array (
      'name' => 'offsetUnset',
      'class' => 'SplDoublyLinkedList',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
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
    'add' => 
    array (
      'name' => 'add',
      'class' => 'SplDoublyLinkedList',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newval' => 
        array (
          'position' => 1,
          'name' => 'newval',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'SplDoublyLinkedList',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'SplDoublyLinkedList',
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'SplDoublyLinkedList',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'SplDoublyLinkedList',
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
    'prev' => 
    array (
      'name' => 'prev',
      'class' => 'SplDoublyLinkedList',
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
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'SplDoublyLinkedList',
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
      'class' => 'SplDoublyLinkedList',
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
    'serialize' => 
    array (
      'name' => 'serialize',
      'class' => 'SplDoublyLinkedList',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:SPL> <iterateable> class SplQueue extends SplDoublyLinkedList implements Serializable, ArrayAccess, Countable, Traversable, Iterator ] {

  - Constants [4] {
    Constant [ integer IT_MODE_LIFO ] { 2 }
    Constant [ integer IT_MODE_FIFO ] { 0 }
    Constant [ integer IT_MODE_DELETE ] { 1 }
    Constant [ integer IT_MODE_KEEP ] { 0 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [25] {
    Method [ <internal:SPL> public method enqueue ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:SPL> public method dequeue ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method pop ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method shift ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method push ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method unshift ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method top ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method bottom ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method isEmpty ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method setIteratorMode ] {

      - Parameters [1] {
        Parameter #0 [ <required> $flags ]
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method getIteratorMode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype Countable> public method count ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype ArrayAccess> public method offsetExists ] {

      - Parameters [1] {
        Parameter #0 [ <required> $index ]
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype ArrayAccess> public method offsetGet ] {

      - Parameters [1] {
        Parameter #0 [ <required> $index ]
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype ArrayAccess> public method offsetSet ] {

      - Parameters [2] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <required> $newval ]
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype ArrayAccess> public method offsetUnset ] {

      - Parameters [1] {
        Parameter #0 [ <required> $index ]
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method add ] {

      - Parameters [2] {
        Parameter #0 [ <required> $index ]
        Parameter #1 [ <required> $newval ]
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList> public method prev ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype Serializable> public method unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $serialized ]
      }
    }

    Method [ <internal:SPL, inherits SplDoublyLinkedList, prototype Serializable> public method serialize ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
