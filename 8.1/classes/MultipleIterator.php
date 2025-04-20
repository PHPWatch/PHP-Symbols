<?php

return array (
  'type' => 'class',
  'name' => 'MultipleIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MultipleIterator',
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
        'name' => 'MultipleIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.multipleiterator.php',
      ),
    ),
  ),
  'modifiers' => 0,
  'comment' => false,
  'defaultProperties' => 
  array (
  ),
  'namespace' => '',
  'staticProperties' => 
  array (
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
  ),
  'constants' => 
  array (
    'MIT_NEED_ANY' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int MIT_NEED_ANY ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MIT_NEED_ALL' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int MIT_NEED_ALL ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MIT_KEYS_NUMERIC' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int MIT_KEYS_NUMERIC ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MIT_KEYS_ASSOC' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int MIT_KEYS_ASSOC ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MultipleIterator',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
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
    'getFlags' => 
    array (
      'name' => 'getFlags',
      'class' => 'MultipleIterator',
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
    'setFlags' => 
    array (
      'name' => 'setFlags',
      'class' => 'MultipleIterator',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
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
    'attachIterator' => 
    array (
      'name' => 'attachIterator',
      'class' => 'MultipleIterator',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => 'Iterator',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'info' => 
        array (
          'position' => 1,
          'name' => 'info',
          'type' => 'string|int|null',
          'is_optional' => true,
          'has_default_value' => true,
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
    'detachIterator' => 
    array (
      'name' => 'detachIterator',
      'class' => 'MultipleIterator',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => 'Iterator',
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
    'containsIterator' => 
    array (
      'name' => 'containsIterator',
      'class' => 'MultipleIterator',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => 'Iterator',
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
    'countIterators' => 
    array (
      'name' => 'countIterators',
      'class' => 'MultipleIterator',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'MultipleIterator',
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
      'class' => 'MultipleIterator',
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
      'class' => 'MultipleIterator',
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
      'class' => 'MultipleIterator',
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
      'class' => 'MultipleIterator',
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
    '__debugInfo' => 
    array (
      'name' => '__debugInfo',
      'class' => 'MultipleIterator',
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
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'extension' => 'SPL',
  'toString' => 'Class [ <internal:SPL> <iterateable> class MultipleIterator implements Iterator, Traversable ] {

  - Constants [4] {
    Constant [ public int MIT_NEED_ANY ] { 0 }
    Constant [ public int MIT_NEED_ALL ] { 1 }
    Constant [ public int MIT_KEYS_NUMERIC ] { 0 }
    Constant [ public int MIT_KEYS_ASSOC ] { 2 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [13] {
    Method [ <internal:SPL, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> int $flags = MultipleIterator::MIT_NEED_ALL | MultipleIterator::MIT_KEYS_NUMERIC ]
      }
    }

    Method [ <internal:SPL> public method getFlags ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $flags ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL> public method attachIterator ] {

      - Parameters [2] {
        Parameter #0 [ <required> Iterator $iterator ]
        Parameter #1 [ <optional> string|int|null $info = null ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL> public method detachIterator ] {

      - Parameters [1] {
        Parameter #0 [ <required> Iterator $iterator ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL> public method containsIterator ] {

      - Parameters [1] {
        Parameter #0 [ <required> Iterator $iterator ]
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL> public method countIterators ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:SPL, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }

    Method [ <internal:SPL, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL> public method __debugInfo ] {

      - Parameters [0] {
      }
      - Tentative return [ array ]
    }
  }
}
',
);
