<?php

return array (
  'type' => 'class',
  'name' => 'WeakMap',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'WeakMap',
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
        'name' => 'WeakMap interface (php.net)',
        'url' => 'https://www.php.net/manual/class.weakmap.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    'offsetGet' => 
    array (
      'name' => 'offsetGet',
      'class' => 'WeakMap',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'offsetSet' => 
    array (
      'name' => 'offsetSet',
      'class' => 'WeakMap',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => NULL,
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
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'offsetExists' => 
    array (
      'name' => 'offsetExists',
      'class' => 'WeakMap',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
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
    'offsetUnset' => 
    array (
      'name' => 'offsetUnset',
      'class' => 'WeakMap',
      'parameters' => 
      array (
        'object' => 
        array (
          'position' => 0,
          'name' => 'object',
          'type' => NULL,
          'is_optional' => false,
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
    'count' => 
    array (
      'name' => 'count',
      'class' => 'WeakMap',
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
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'WeakMap',
      'parameters' => 
      array (
      ),
      'return_type' => 'Iterator',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'ArrayAccess',
    1 => 'Countable',
    2 => 'IteratorAggregate',
    3 => 'Traversable',
  ),
  'properties' => 
  array (
  ),
  'extension' => 'Core',
  'toString' => 'Class [ <internal:Core> <iterateable> final class WeakMap implements ArrayAccess, Countable, IteratorAggregate, Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [6] {
    Method [ <internal:Core, prototype ArrayAccess> public method offsetGet ] {

      - Parameters [1] {
        Parameter #0 [ <required> $object ]
      }
      - Return [ mixed ]
    }

    Method [ <internal:Core, prototype ArrayAccess> public method offsetSet ] {

      - Parameters [2] {
        Parameter #0 [ <required> $object ]
        Parameter #1 [ <required> mixed $value ]
      }
      - Return [ void ]
    }

    Method [ <internal:Core, prototype ArrayAccess> public method offsetExists ] {

      - Parameters [1] {
        Parameter #0 [ <required> $object ]
      }
      - Return [ bool ]
    }

    Method [ <internal:Core, prototype ArrayAccess> public method offsetUnset ] {

      - Parameters [1] {
        Parameter #0 [ <required> $object ]
      }
      - Return [ void ]
    }

    Method [ <internal:Core, prototype Countable> public method count ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:Core, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Iterator ]
    }
  }
}
',
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
