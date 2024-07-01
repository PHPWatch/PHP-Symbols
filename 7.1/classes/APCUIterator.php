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
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'format' => 
        array (
          'position' => 1,
          'name' => 'format',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'chunk_size' => 
        array (
          'position' => 2,
          'name' => 'chunk_size',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'list' => 
        array (
          'position' => 3,
          'name' => 'list',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'APCUIterator',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'APCUIterator',
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
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'APCUIterator',
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'APCUIterator',
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
    'current' => 
    array (
      'name' => 'current',
      'class' => 'APCUIterator',
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
    'getTotalHits' => 
    array (
      'name' => 'getTotalHits',
      'class' => 'APCUIterator',
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
    'getTotalSize' => 
    array (
      'name' => 'getTotalSize',
      'class' => 'APCUIterator',
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
    'getTotalCount' => 
    array (
      'name' => 'getTotalCount',
      'class' => 'APCUIterator',
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
        Parameter #0 [ <optional> $search ]
        Parameter #1 [ <optional> $format ]
        Parameter #2 [ <optional> $chunk_size ]
        Parameter #3 [ <optional> $list ]
      }
    }

    Method [ <internal:apcu, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:apcu, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:apcu, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:apcu, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:apcu, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:apcu> public method getTotalHits ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:apcu> public method getTotalSize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:apcu> public method getTotalCount ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
