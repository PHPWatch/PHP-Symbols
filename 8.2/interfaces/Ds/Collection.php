<?php

return array (
  'type' => 'interface',
  'name' => 'Ds\\Collection',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'Ds\\Collection',
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
        'name' => 'Ds\\Collection interface (php.net)',
        'url' => 'https://www.php.net/manual/class.ds-collection.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'IteratorAggregate',
    1 => 'Traversable',
    2 => 'Countable',
    3 => 'JsonSerializable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'Ds\\Collection',
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
      'class' => 'Ds\\Collection',
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
    'isEmpty' => 
    array (
      'name' => 'isEmpty',
      'class' => 'Ds\\Collection',
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
    'toArray' => 
    array (
      'name' => 'toArray',
      'class' => 'Ds\\Collection',
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
    'getIterator' => 
    array (
      'name' => 'getIterator',
      'class' => 'IteratorAggregate',
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
      'class' => 'Countable',
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
    'jsonSerialize' => 
    array (
      'name' => 'jsonSerialize',
      'class' => 'JsonSerializable',
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
  'toString' => 'Interface [ <internal:ds> interface Ds\\Collection extends IteratorAggregate, Traversable, Countable, JsonSerializable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [7] {
    Method [ <internal:ds> abstract public method clear ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:ds> abstract public method copy ] {

      - Parameters [0] {
      }
      - Return [ Ds\\Collection ]
    }

    Method [ <internal:ds> abstract public method isEmpty ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:ds> abstract public method toArray ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:Core, inherits IteratorAggregate> abstract public method getIterator ] {

      - Parameters [0] {
      }
      - Tentative return [ Traversable ]
    }

    Method [ <internal:Core, inherits Countable> abstract public method count ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:json, inherits JsonSerializable> abstract public method jsonSerialize ] {

      - Parameters [0] {
      }
      - Tentative return [ mixed ]
    }
  }
}
',
);
