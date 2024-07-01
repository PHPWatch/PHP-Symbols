<?php

return array (
  'type' => 'class',
  'name' => 'DOMNodeList',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DOMNodeList',
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
        'name' => 'DOMNodeList class (php.net)',
        'url' => 'https://www.php.net/manual/class.domnodelist.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'IteratorAggregate',
    1 => 'Traversable',
    2 => 'Countable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
    'length' => 
    array (
      'name' => 'length',
      'class' => 'DOMNodeList',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'methods' => 
  array (
    'count' => 
    array (
      'name' => 'count',
      'class' => 'DOMNodeList',
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
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'DOMNodeList',
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
    'item' => 
    array (
      'name' => 'item',
      'class' => 'DOMNodeList',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:dom> <iterateable> class DOMNodeList implements IteratorAggregate, Traversable, Countable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ public int $length ]
  }

  - Methods [3] {
    Method [ <internal:dom, prototype Countable> public method count ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:dom, prototype IteratorAggregate> public method getIterator ] {

      - Parameters [0] {
      }
      - Return [ Iterator ]
    }

    Method [ <internal:dom> public method item ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
    }
  }
}
',
);
