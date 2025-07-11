<?php

return array (
  'type' => 'class',
  'name' => 'Dom\\NodeList',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Dom\\NodeList',
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
        'name' => 'Dom\\NodeList interface (php.net)',
        'url' => 'https://www.php.net/manual/class.dom-nodelist.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'Dom',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    'count' => 
    array (
      'name' => 'count',
      'class' => 'Dom\\NodeList',
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
      'class' => 'Dom\\NodeList',
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
      'class' => 'Dom\\NodeList',
      'parameters' => 
      array (
        'index' => 
        array (
          'position' => 0,
          'name' => 'index',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Dom\\Node',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'IteratorAggregate',
    1 => 'Traversable',
    2 => 'Countable',
  ),
  'properties' => 
  array (
    'length' => 
    array (
      'name' => 'length',
      'class' => 'Dom\\NodeList',
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
  'extension' => 'dom',
  'toString' => 'Class [ <internal:dom> <iterateable> class Dom\\NodeList implements IteratorAggregate, Traversable, Countable ] {

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
      - Return [ int ]
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
      - Return [ ?Dom\\Node ]
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
