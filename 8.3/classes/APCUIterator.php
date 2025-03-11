<?php

return array (
  'type' => 'class',
  'name' => 'APCUIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'APCUIterator',
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
        'name' => 'APCUIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.apcuiterator.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
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
      'class' => 'APCUIterator',
      'parameters' => 
      array (
        'search' => 
        array (
          'position' => 0,
          'name' => 'search',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'format' => 
        array (
          'position' => 1,
          'name' => 'format',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 4294967295,
          'has_default_value_constant' => true,
          'default_value_constant' => 'APC_ITER_ALL',
        ),
        'chunk_size' => 
        array (
          'position' => 2,
          'name' => 'chunk_size',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'list' => 
        array (
          'position' => 3,
          'name' => 'list',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 1,
          'has_default_value_constant' => true,
          'default_value_constant' => 'APC_LIST_ACTIVE',
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
      'class' => 'APCUIterator',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'next' => 
    array (
      'name' => 'next',
      'class' => 'APCUIterator',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'APCUIterator',
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'APCUIterator',
      'parameters' => 
      array (
      ),
      'return_type' => 'string|int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'current' => 
    array (
      'name' => 'current',
      'class' => 'APCUIterator',
      'parameters' => 
      array (
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getTotalHits' => 
    array (
      'name' => 'getTotalHits',
      'class' => 'APCUIterator',
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
    'getTotalSize' => 
    array (
      'name' => 'getTotalSize',
      'class' => 'APCUIterator',
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
    'getTotalCount' => 
    array (
      'name' => 'getTotalCount',
      'class' => 'APCUIterator',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:apcu> <iterateable> class APCUIterator implements Iterator, Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [9] {
    Method [ <internal:apcu, ctor> public method __construct ] {

      - Parameters [4] {
        Parameter #0 [ <optional> $search = null ]
        Parameter #1 [ <optional> int $format = APC_ITER_ALL ]
        Parameter #2 [ <optional> int $chunk_size = 0 ]
        Parameter #3 [ <optional> int $list = APC_LIST_ACTIVE ]
      }
    }

    Method [ <internal:apcu, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:apcu, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:apcu, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:apcu, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Return [ string|int ]
    }

    Method [ <internal:apcu, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Return [ mixed ]
    }

    Method [ <internal:apcu> public method getTotalHits ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:apcu> public method getTotalSize ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:apcu> public method getTotalCount ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }
  }
}
',
);
