<?php

return array (
  'type' => 'class',
  'name' => 'Ds\\Vector',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Ds\\Vector',
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
        'name' => 'Ds\\Vector class (php.net)',
        'url' => 'https://www.php.net/manual/class.ds-vector.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Ds\\Sequence',
    1 => 'ArrayAccess',
    2 => 'IteratorAggregate',
    3 => 'Traversable',
    4 => 'Countable',
    5 => 'JsonSerializable',
    6 => 'Ds\\Collection',
  ),
  'constants' => 
  array (
    'MIN_CAPACITY' => 8,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
    'allocate' => 
    array (
      'name' => 'allocate',
      'class' => 'Ds\\Vector',
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
    'apply' => 
    array (
      'name' => 'apply',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
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
      'class' => 'Ds\\Vector',
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
    'contains' => 
    array (
      'name' => 'contains',
      'class' => 'Ds\\Vector',
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
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'filter' => 
    array (
      'name' => 'filter',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Sequence',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'find' => 
    array (
      'name' => 'find',
      'class' => 'Ds\\Vector',
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
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'first' => 
    array (
      'name' => 'first',
      'class' => 'Ds\\Vector',
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
    'get' => 
    array (
      'name' => 'get',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
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
    'insert' => 
    array (
      'name' => 'insert',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'values' => 
        array (
          'position' => 1,
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
    'join' => 
    array (
      'name' => 'join',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'glue' => 
        array (
          'position' => 0,
          'name' => 'glue',
          'type' => 'string',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'last' => 
    array (
      'name' => 'last',
      'class' => 'Ds\\Vector',
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
    'map' => 
    array (
      'name' => 'map',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Sequence',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'merge' => 
    array (
      'name' => 'merge',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'values' => 
        array (
          'position' => 0,
          'name' => 'values',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Sequence',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'offsetExists' => 
    array (
      'name' => 'offsetExists',
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
    'pop' => 
    array (
      'name' => 'pop',
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
    'reduce' => 
    array (
      'name' => 'reduce',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'initial' => 
        array (
          'position' => 1,
          'name' => 'initial',
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
    'remove' => 
    array (
      'name' => 'remove',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
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
    'reverse' => 
    array (
      'name' => 'reverse',
      'class' => 'Ds\\Vector',
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
    'reversed' => 
    array (
      'name' => 'reversed',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
      ),
      'return_type' => 'Ds\\Sequence',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'rotate' => 
    array (
      'name' => 'rotate',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'rotations' => 
        array (
          'position' => 0,
          'name' => 'rotations',
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
    'set' => 
    array (
      'name' => 'set',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
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
    'shift' => 
    array (
      'name' => 'shift',
      'class' => 'Ds\\Vector',
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
    'slice' => 
    array (
      'name' => 'slice',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'length' => 
        array (
          'position' => 1,
          'name' => 'length',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Sequence',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sort' => 
    array (
      'name' => 'sort',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'comparator' => 
        array (
          'position' => 0,
          'name' => 'comparator',
          'type' => 'callable',
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
    'sorted' => 
    array (
      'name' => 'sorted',
      'class' => 'Ds\\Vector',
      'parameters' => 
      array (
        'comparator' => 
        array (
          'position' => 0,
          'name' => 'comparator',
          'type' => 'callable',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Sequence',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sum' => 
    array (
      'name' => 'sum',
      'class' => 'Ds\\Vector',
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
    'unshift' => 
    array (
      'name' => 'unshift',
      'class' => 'Ds\\Vector',
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
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
      'class' => 'Ds\\Vector',
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
  'toString' => 'Class [ <internal:ds> <iterateable> final class Ds\\Vector implements Ds\\Sequence, ArrayAccess, IteratorAggregate, Traversable, Countable, JsonSerializable, Ds\\Collection ] {

  - Constants [1] {
    Constant [ public integer MIN_CAPACITY ] { 8 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [39] {
    Method [ <internal:ds, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $values ]
      }
    }

    Method [ <internal:ds, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Traversable or NULL ]
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method allocate ] {

      - Parameters [1] {
        Parameter #0 [ <required> integer $capacity ]
      }
    }

    Method [ <internal:ds> public method apply ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method capacity ] {

      - Parameters [0] {
      }
      - Return [ integer ]
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method contains ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ...$values ]
      }
      - Return [ boolean ]
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method filter ] {

      - Parameters [1] {
        Parameter #0 [ <optional> callable or NULL $callback ]
      }
      - Return [ Ds\\Sequence ]
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method find ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method first ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method get ] {

      - Parameters [1] {
        Parameter #0 [ <required> integer $index ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method insert ] {

      - Parameters [2] {
        Parameter #0 [ <required> integer $index ]
        Parameter #1 [ <optional> ...$values ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method join ] {

      - Parameters [1] {
        Parameter #0 [ <optional> string $glue ]
      }
      - Return [ string ]
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method last ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method map ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
      - Return [ Ds\\Sequence ]
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method merge ] {

      - Parameters [1] {
        Parameter #0 [ <required> $values ]
      }
      - Return [ Ds\\Sequence ]
    }

    Method [ <internal:ds, prototype ArrayAccess> public method offsetExists ] {

      - Parameters [1] {
        Parameter #0 [ <required> $offset ]
      }
      - Return [ boolean ]
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

    Method [ <internal:ds, prototype Ds\\Sequence> public method pop ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method push ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ...$values ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method reduce ] {

      - Parameters [2] {
        Parameter #0 [ <required> callable $callback ]
        Parameter #1 [ <optional> $initial ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method remove ] {

      - Parameters [1] {
        Parameter #0 [ <required> integer $index ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method reverse ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds> public method reversed ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Sequence ]
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method rotate ] {

      - Parameters [1] {
        Parameter #0 [ <required> integer $rotations ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method set ] {

      - Parameters [2] {
        Parameter #0 [ <required> integer $index ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method shift ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method slice ] {

      - Parameters [2] {
        Parameter #0 [ <required> integer $index ]
        Parameter #1 [ <optional> integer or NULL $length ]
      }
      - Return [ Ds\\Sequence ]
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method sort ] {

      - Parameters [1] {
        Parameter #0 [ <optional> callable or NULL $comparator ]
      }
    }

    Method [ <internal:ds> public method sorted ] {

      - Parameters [1] {
        Parameter #0 [ <optional> callable or NULL $comparator ]
      }
      - Return [ Ds\\Sequence ]
    }

    Method [ <internal:ds> public method sum ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds, prototype Ds\\Sequence> public method unshift ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ...$values ]
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
      - Return [ integer ]
    }

    Method [ <internal:ds, prototype Ds\\Collection> public method isEmpty ] {

      - Parameters [0] {
      }
      - Return [ boolean ]
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
