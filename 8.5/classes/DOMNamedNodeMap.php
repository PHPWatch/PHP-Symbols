<?php

return array (
  'type' => 'class',
  'name' => 'DOMNamedNodeMap',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'DOMNamedNodeMap',
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
        'name' => 'DOMNamedNodeMap interface (php.net)',
        'url' => 'https://www.php.net/manual/class.domnamednodemap.php',
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
    'getNamedItem' => 
    array (
      'name' => 'getNamedItem',
      'class' => 'DOMNamedNodeMap',
      'parameters' => 
      array (
        'qualifiedName' => 
        array (
          'position' => 0,
          'name' => 'qualifiedName',
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
    'getNamedItemNS' => 
    array (
      'name' => 'getNamedItemNS',
      'class' => 'DOMNamedNodeMap',
      'parameters' => 
      array (
        'namespace' => 
        array (
          'position' => 0,
          'name' => 'namespace',
          'type' => '?string',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'localName' => 
        array (
          'position' => 1,
          'name' => 'localName',
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
    'item' => 
    array (
      'name' => 'item',
      'class' => 'DOMNamedNodeMap',
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
      'class' => 'DOMNamedNodeMap',
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
      'class' => 'DOMNamedNodeMap',
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
    0 => 'IteratorAggregate',
    1 => 'Traversable',
    2 => 'Countable',
  ),
  'properties' => 
  array (
    'length' => 
    array (
      'name' => 'length',
      'class' => 'DOMNamedNodeMap',
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
  'toString' => 'Class [ <internal:dom> <iterateable> class DOMNamedNodeMap implements IteratorAggregate, Traversable, Countable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ public virtual int $length ]
  }

  - Methods [5] {
    Method [ <internal:dom> public method getNamedItem ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $qualifiedName ]
      }
      - Tentative return [ ?DOMNode ]
    }

    Method [ <internal:dom> public method getNamedItemNS ] {

      - Parameters [2] {
        Parameter #0 [ <required> ?string $namespace ]
        Parameter #1 [ <required> string $localName ]
      }
      - Tentative return [ ?DOMNode ]
    }

    Method [ <internal:dom> public method item ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $index ]
      }
      - Tentative return [ ?DOMNode ]
    }

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
