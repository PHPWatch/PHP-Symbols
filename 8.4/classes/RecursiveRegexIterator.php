<?php

return array (
  'type' => 'class',
  'name' => 'RecursiveRegexIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'RecursiveRegexIterator',
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
        'name' => 'RecursiveRegexIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.recursiveregexiterator.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
    2 => 'OuterIterator',
    3 => 'RecursiveIterator',
  ),
  'constants' => 
  array (
    'USE_KEY' => 1,
    'INVERT_MATCH' => 2,
    'MATCH' => 0,
    'GET_MATCH' => 1,
    'ALL_MATCHES' => 2,
    'SPLIT' => 3,
    'REPLACE' => 4,
  ),
  'properties' => 
  array (
    'replacement' => 
    array (
      'name' => 'replacement',
      'class' => 'RegexIterator',
      'type' => '?string',
      'has_default_value' => true,
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'RecursiveRegexIterator',
      'parameters' => 
      array (
        'iterator' => 
        array (
          'position' => 0,
          'name' => 'iterator',
          'type' => 'RecursiveIterator',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pattern' => 
        array (
          'position' => 1,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mode' => 
        array (
          'position' => 2,
          'name' => 'mode',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => true,
          'default_value_constant' => 'RecursiveRegexIterator::MATCH',
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'pregFlags' => 
        array (
          'position' => 4,
          'name' => 'pregFlags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 0,
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
    'accept' => 
    array (
      'name' => 'accept',
      'class' => 'RecursiveRegexIterator',
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
    'hasChildren' => 
    array (
      'name' => 'hasChildren',
      'class' => 'RecursiveRegexIterator',
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
    'getChildren' => 
    array (
      'name' => 'getChildren',
      'class' => 'RecursiveRegexIterator',
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
    'getMode' => 
    array (
      'name' => 'getMode',
      'class' => 'RegexIterator',
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
    'setMode' => 
    array (
      'name' => 'setMode',
      'class' => 'RegexIterator',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
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
    'getFlags' => 
    array (
      'name' => 'getFlags',
      'class' => 'RegexIterator',
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
      'class' => 'RegexIterator',
      'parameters' => 
      array (
        'flags' => 
        array (
          'position' => 0,
          'name' => 'flags',
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
    'getRegex' => 
    array (
      'name' => 'getRegex',
      'class' => 'RegexIterator',
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
    'getPregFlags' => 
    array (
      'name' => 'getPregFlags',
      'class' => 'RegexIterator',
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
    'setPregFlags' => 
    array (
      'name' => 'setPregFlags',
      'class' => 'RegexIterator',
      'parameters' => 
      array (
        'pregFlags' => 
        array (
          'position' => 0,
          'name' => 'pregFlags',
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
    'rewind' => 
    array (
      'name' => 'rewind',
      'class' => 'FilterIterator',
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
      'class' => 'FilterIterator',
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
    'getInnerIterator' => 
    array (
      'name' => 'getInnerIterator',
      'class' => 'IteratorIterator',
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
      'class' => 'IteratorIterator',
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
      'class' => 'IteratorIterator',
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
      'class' => 'IteratorIterator',
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
  'extension' => 'SPL',
  'toString' => 'Class [ <internal:SPL> <iterateable> class RecursiveRegexIterator extends RegexIterator implements Iterator, Traversable, OuterIterator, RecursiveIterator ] {

  - Constants [7] {
    Constant [ public int USE_KEY ] { 1 }
    Constant [ public int INVERT_MATCH ] { 2 }
    Constant [ public int MATCH ] { 0 }
    Constant [ public int GET_MATCH ] { 1 }
    Constant [ public int ALL_MATCHES ] { 2 }
    Constant [ public int SPLIT ] { 3 }
    Constant [ public int REPLACE ] { 4 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ public ?string $replacement = NULL ]
  }

  - Methods [17] {
    Method [ <internal:SPL, overwrites RegexIterator, ctor> public method __construct ] {

      - Parameters [5] {
        Parameter #0 [ <required> RecursiveIterator $iterator ]
        Parameter #1 [ <required> string $pattern ]
        Parameter #2 [ <optional> int $mode = RecursiveRegexIterator::MATCH ]
        Parameter #3 [ <optional> int $flags = 0 ]
        Parameter #4 [ <optional> int $pregFlags = 0 ]
      }
    }

    Method [ <internal:SPL, overwrites RegexIterator, prototype FilterIterator> public method accept ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, prototype RecursiveIterator> public method hasChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, prototype RecursiveIterator> public method getChildren ] {

      - Parameters [0] {
      }
      - Tentative return [ RecursiveRegexIterator ]
    }

    Method [ <internal:SPL, inherits RegexIterator> public method getMode ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits RegexIterator> public method setMode ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $mode ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RegexIterator> public method getFlags ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits RegexIterator> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $flags ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits RegexIterator> public method getRegex ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL, inherits RegexIterator> public method getPregFlags ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL, inherits RegexIterator> public method setPregFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $pregFlags ]
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits FilterIterator, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits FilterIterator, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:SPL, inherits IteratorIterator, prototype OuterIterator> public method getInnerIterator ] {

      - Parameters [0] {
      }
      - Tentative return [ ?Iterator ]
    }

    Method [ <internal:SPL, inherits IteratorIterator, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL, inherits IteratorIterator, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Tentative return [ mixed ]
    }

    Method [ <internal:SPL, inherits IteratorIterator, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Tentative return [ mixed ]
    }
  }
}
',
);
