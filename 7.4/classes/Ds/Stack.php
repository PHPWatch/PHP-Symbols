<?php

return array (
  'type' => 'class',
  'name' => 'Ds\\Stack',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Ds\\Stack',
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
        'name' => 'Ds\\Stack class (php.net)',
        'url' => 'https://www.php.net/manual/class.ds-stack.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Ds\\Collection',
    1 => 'JsonSerializable',
    2 => 'Countable',
    3 => 'Traversable',
    4 => 'IteratorAggregate',
    5 => 'ArrayAccess',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
        'values' => 
        array (
          'position' => 0,
          'name' => 'values',
          'type' => NULL,
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
    'allocate' => 
    array (
      'name' => 'allocate',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
        'capacity' => 
        array (
          'position' => 0,
          'name' => 'capacity',
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
    'capacity' => 
    array (
      'name' => 'capacity',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'peek' => 
    array (
      'name' => 'peek',
      'class' => 'Ds\\Stack',
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
    'pop' => 
    array (
      'name' => 'pop',
      'class' => 'Ds\\Stack',
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
    'push' => 
    array (
      'name' => 'push',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
        'values' => 
        array (
          'position' => 0,
          'name' => 'values',
          'type' => NULL,
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
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
      ),
      'return_type' => 'Traversable',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'offsetExists' => 
    array (
      'name' => 'offsetExists',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'offsetGet' => 
    array (
      'name' => 'offsetGet',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
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
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
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
    'offsetUnset' => 
    array (
      'name' => 'offsetUnset',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
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
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'Ds\\Stack',
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
    'copy' => 
    array (
      'name' => 'copy',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
      ),
      'return_type' => 'Ds\\Collection',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'count' => 
    array (
      'name' => 'count',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isEmpty' => 
    array (
      'name' => 'isEmpty',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'jsonSerialize' => 
    array (
      'name' => 'jsonSerialize',
      'class' => 'Ds\\Stack',
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
    'toArray' => 
    array (
      'name' => 'toArray',
      'class' => 'Ds\\Stack',
      'parameters' => 
      array (
      ),
      'return_type' => 'array',
      'has_return_type' => true,
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
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:ds> <iterateable> final class Ds\\Stack implements Ds\\Collection, JsonSerializable, Countable, Traversable, IteratorAggregate, ArrayAccess ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [17] {
    Method [ <internal:ds, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $values ]
      }
    }

    Method [ <internal:ds> public method allocate ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $capacity ]
      }
    }

    Method [ <internal:ds> public method capacity ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:ds> public method peek ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds> public method pop ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds> public method push ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ...$values ]
      }
    }

    Method [ <internal:ds, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Traversable ]
    }

    Method [ <internal:ds, prototype ArrayAccess> public method offsetExists ] {

      - Parameters [1] {
        Parameter #0 [ <required> $offset ]
      }
      - Return [ bool ]
    }

    Method [ <internal:ds, prototype ArrayAccess> public method offsetGet ] {

      - Parameters [1] {
        Parameter #0 [ <required> $offset ]
      }
    }

    Method [ <internal:ds, prototype ArrayAccess> public method offsetSet ] {

      - Parameters [2] {
        Parameter #0 [ <required> $offset ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:ds, prototype ArrayAccess> public method offsetUnset ] {

      - Parameters [1] {
        Parameter #0 [ <required> $offset ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Collection> public method clear ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds, prototype Ds\\Collection> public method copy ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Collection ]
    }

    Method [ <internal:ds, prototype Countable> public method count ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:ds, prototype Ds\\Collection> public method isEmpty ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:ds, prototype JsonSerializable> public method jsonSerialize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds, prototype Ds\\Collection> public method toArray ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }
}
',
);
