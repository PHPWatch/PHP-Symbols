<?php

return array (
  'type' => 'class',
  'name' => 'Ds\\Map',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Ds\\Map',
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
        'name' => 'Ds\\Map class (php.net)',
        'url' => 'https://www.php.net/manual/class.ds-map.php',
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
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
    'diff' => 
    array (
      'name' => 'diff',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'map' => 
        array (
          'position' => 0,
          'name' => 'map',
          'type' => 'Ds\\Map',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'filter' => 
    array (
      'name' => 'filter',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => '?callable',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'first' => 
    array (
      'name' => 'first',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
      ),
      'return_type' => 'Ds\\Pair',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'get' => 
    array (
      'name' => 'get',
      'class' => 'Ds\\Map',
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
        'default' => 
        array (
          'position' => 1,
          'name' => 'default',
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
    'hasKey' => 
    array (
      'name' => 'hasKey',
      'class' => 'Ds\\Map',
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
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasValue' => 
    array (
      'name' => 'hasValue',
      'class' => 'Ds\\Map',
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
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'intersect' => 
    array (
      'name' => 'intersect',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'map' => 
        array (
          'position' => 0,
          'name' => 'map',
          'type' => 'Ds\\Map',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'keys' => 
    array (
      'name' => 'keys',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
      ),
      'return_type' => 'Ds\\Set',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'ksort' => 
    array (
      'name' => 'ksort',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'comparator' => 
        array (
          'position' => 0,
          'name' => 'comparator',
          'type' => '?callable',
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
    'ksorted' => 
    array (
      'name' => 'ksorted',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'comparator' => 
        array (
          'position' => 0,
          'name' => 'comparator',
          'type' => '?callable',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'last' => 
    array (
      'name' => 'last',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
      ),
      'return_type' => 'Ds\\Pair',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'map' => 
    array (
      'name' => 'map',
      'class' => 'Ds\\Map',
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
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'merge' => 
    array (
      'name' => 'merge',
      'class' => 'Ds\\Map',
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
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pairs' => 
    array (
      'name' => 'pairs',
      'class' => 'Ds\\Map',
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
    'put' => 
    array (
      'name' => 'put',
      'class' => 'Ds\\Map',
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
    'putAll' => 
    array (
      'name' => 'putAll',
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
        'default' => 
        array (
          'position' => 1,
          'name' => 'default',
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
    'reverse' => 
    array (
      'name' => 'reverse',
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
      ),
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'skip' => 
    array (
      'name' => 'skip',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'position' => 
        array (
          'position' => 0,
          'name' => 'position',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Pair',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'slice' => 
    array (
      'name' => 'slice',
      'class' => 'Ds\\Map',
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
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sort' => 
    array (
      'name' => 'sort',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'comparator' => 
        array (
          'position' => 0,
          'name' => 'comparator',
          'type' => '?callable',
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
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'comparator' => 
        array (
          'position' => 0,
          'name' => 'comparator',
          'type' => '?callable',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sum' => 
    array (
      'name' => 'sum',
      'class' => 'Ds\\Map',
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
    'union' => 
    array (
      'name' => 'union',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'map' => 
        array (
          'position' => 0,
          'name' => 'map',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'values' => 
    array (
      'name' => 'values',
      'class' => 'Ds\\Map',
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
    'xor' => 
    array (
      'name' => 'xor',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'map' => 
        array (
          'position' => 0,
          'name' => 'map',
          'type' => 'Ds\\Map',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Ds\\Map',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
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
    'offsetSet' => 
    array (
      'name' => 'offsetSet',
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
          'type' => 'mixed',
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
      'class' => 'Ds\\Map',
      'parameters' => 
      array (
        'offset' => 
        array (
          'position' => 0,
          'name' => 'offset',
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
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
      'class' => 'Ds\\Map',
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
  'toString' => 'Class [ <internal:ds> <iterateable> final class Ds\\Map implements Ds\\Collection, JsonSerializable, Countable, Traversable, IteratorAggregate, ArrayAccess ] {

  - Constants [1] {
    Constant [ public int MIN_CAPACITY ] { 8 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [43] {
    Method [ <internal:ds, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $values = <default> ]
      }
    }

    Method [ <internal:ds> public method allocate ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $capacity ]
      }
    }

    Method [ <internal:ds> public method apply ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
    }

    Method [ <internal:ds> public method capacity ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:ds> public method diff ] {

      - Parameters [1] {
        Parameter #0 [ <required> Ds\\Map $map ]
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method filter ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?callable $callback = <default> ]
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method first ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Pair ]
    }

    Method [ <internal:ds> public method get ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $default = <default> ]
      }
    }

    Method [ <internal:ds> public method hasKey ] {

      - Parameters [1] {
        Parameter #0 [ <required> $key ]
      }
      - Return [ bool ]
    }

    Method [ <internal:ds> public method hasValue ] {

      - Parameters [1] {
        Parameter #0 [ <required> $value ]
      }
      - Return [ bool ]
    }

    Method [ <internal:ds> public method intersect ] {

      - Parameters [1] {
        Parameter #0 [ <required> Ds\\Map $map ]
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method keys ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Set ]
    }

    Method [ <internal:ds> public method ksort ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?callable $comparator = <default> ]
      }
    }

    Method [ <internal:ds> public method ksorted ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?callable $comparator = <default> ]
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method last ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Pair ]
    }

    Method [ <internal:ds> public method map ] {

      - Parameters [1] {
        Parameter #0 [ <required> callable $callback ]
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method merge ] {

      - Parameters [1] {
        Parameter #0 [ <required> $values ]
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method pairs ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Sequence ]
    }

    Method [ <internal:ds> public method put ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <required> $value ]
      }
    }

    Method [ <internal:ds> public method putAll ] {

      - Parameters [1] {
        Parameter #0 [ <required> $values ]
      }
    }

    Method [ <internal:ds> public method reduce ] {

      - Parameters [2] {
        Parameter #0 [ <required> callable $callback ]
        Parameter #1 [ <optional> $initial = <default> ]
      }
    }

    Method [ <internal:ds> public method remove ] {

      - Parameters [2] {
        Parameter #0 [ <required> $key ]
        Parameter #1 [ <optional> $default = <default> ]
      }
    }

    Method [ <internal:ds> public method reverse ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds> public method reversed ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method skip ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $position ]
      }
      - Return [ Ds\\Pair ]
    }

    Method [ <internal:ds> public method slice ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $index ]
        Parameter #1 [ <optional> ?int $length = <default> ]
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method sort ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?callable $comparator = <default> ]
      }
    }

    Method [ <internal:ds> public method sorted ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?callable $comparator = <default> ]
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method sum ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds> public method union ] {

      - Parameters [1] {
        Parameter #0 [ <required> $map ]
      }
      - Return [ Ds\\Map ]
    }

    Method [ <internal:ds> public method values ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Sequence ]
    }

    Method [ <internal:ds> public method xor ] {

      - Parameters [1] {
        Parameter #0 [ <required> Ds\\Map $map ]
      }
      - Return [ Ds\\Map ]
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
        Parameter #0 [ <required> mixed $offset ]
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:ds, prototype ArrayAccess> public method offsetSet ] {

      - Parameters [2] {
        Parameter #0 [ <required> mixed $offset ]
        Parameter #1 [ <required> mixed $value ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:ds, prototype ArrayAccess> public method offsetUnset ] {

      - Parameters [1] {
        Parameter #0 [ <required> mixed $offset ]
      }
      - Tentative return [ void ]
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
      - Tentative return [ mixed ]
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
