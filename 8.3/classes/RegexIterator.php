<?php

return array (
  'type' => 'class',
  'name' => 'RegexIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'RegexIterator',
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
        'name' => 'RegexIterator interface (php.net)',
        'url' => 'https://www.php.net/manual/class.regexiterator.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => '',
  'constants' => 
  array (
    'USE_KEY' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int USE_KEY ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'INVERT_MATCH' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int INVERT_MATCH ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'MATCH' => 
    array (
      'value' => 0,
      'toString' => 'Constant [ public int MATCH ] { 0 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'GET_MATCH' => 
    array (
      'value' => 1,
      'toString' => 'Constant [ public int GET_MATCH ] { 1 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'ALL_MATCHES' => 
    array (
      'value' => 2,
      'toString' => 'Constant [ public int ALL_MATCHES ] { 2 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'SPLIT' => 
    array (
      'value' => 3,
      'toString' => 'Constant [ public int SPLIT ] { 3 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
    'REPLACE' => 
    array (
      'value' => 4,
      'toString' => 'Constant [ public int REPLACE ] { 4 }
',
      'visibility' => 1,
      'isFinal' => false,
    ),
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'RegexIterator',
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
        'pattern' => 
        array (
          'position' => 1,
          'name' => 'pattern',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
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
          'has_default_value_constant' => true,
          'default_value_constant' => 'RegexIterator::MATCH',
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
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
  'interfaces' => 
  array (
    0 => 'OuterIterator',
    1 => 'Traversable',
    2 => 'Iterator',
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
  'extension' => 'SPL',
  'toString' => 'Class [ <internal:SPL> <iterateable> class RegexIterator extends FilterIterator implements OuterIterator, Traversable, Iterator ] {

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

  - Methods [15] {
    Method [ <internal:SPL, overwrites FilterIterator, ctor> public method __construct ] {

      - Parameters [5] {
        Parameter #0 [ <required> Iterator $iterator ]
        Parameter #1 [ <required> string $pattern ]
        Parameter #2 [ <optional> int $mode = RegexIterator::MATCH ]
        Parameter #3 [ <optional> int $flags = 0 ]
        Parameter #4 [ <optional> int $pregFlags = 0 ]
      }
    }

    Method [ <internal:SPL, overwrites FilterIterator, prototype FilterIterator> public method accept ] {

      - Parameters [0] {
      }
      - Tentative return [ bool ]
    }

    Method [ <internal:SPL> public method getMode ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL> public method setMode ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $mode ]
      }
      - Tentative return [ void ]
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

    Method [ <internal:SPL> public method getRegex ] {

      - Parameters [0] {
      }
      - Tentative return [ string ]
    }

    Method [ <internal:SPL> public method getPregFlags ] {

      - Parameters [0] {
      }
      - Tentative return [ int ]
    }

    Method [ <internal:SPL> public method setPregFlags ] {

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
  'modifiers' => 0,
  'defaultProperties' => 
  array (
    'replacement' => NULL,
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
