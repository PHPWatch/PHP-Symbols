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
    ),
    'INVERT_MATCH' => 
    array (
      'value' => 2,
    ),
    'MATCH' => 
    array (
      'value' => 0,
    ),
    'GET_MATCH' => 
    array (
      'value' => 1,
    ),
    'ALL_MATCHES' => 
    array (
      'value' => 2,
    ),
    'SPLIT' => 
    array (
      'value' => 3,
    ),
    'REPLACE' => 
    array (
      'value' => 4,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'regex' => 
        array (
          'position' => 1,
          'name' => 'regex',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mode' => 
        array (
          'position' => 2,
          'name' => 'mode',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 3,
          'name' => 'flags',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'preg_flags' => 
        array (
          'position' => 4,
          'name' => 'preg_flags',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
        'preg_flags' => 
        array (
          'position' => 0,
          'name' => 'preg_flags',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'FilterIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'key' => 
    array (
      'name' => 'key',
      'class' => 'FilterIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'current' => 
    array (
      'name' => 'current',
      'class' => 'FilterIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getInnerIterator' => 
    array (
      'name' => 'getInnerIterator',
      'class' => 'FilterIterator',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Iterator',
    1 => 'Traversable',
    2 => 'OuterIterator',
  ),
  'properties' => 
  array (
    'replacement' => 
    array (
      'name' => 'replacement',
      'class' => 'RegexIterator',
      'type' => NULL,
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'SPL',
  'toString' => 'Class [ <internal:SPL> <iterateable> class RegexIterator extends FilterIterator implements Iterator, Traversable, OuterIterator ] {

  - Constants [7] {
    Constant [ integer USE_KEY ] { 1 }
    Constant [ integer INVERT_MATCH ] { 2 }
    Constant [ integer MATCH ] { 0 }
    Constant [ integer GET_MATCH ] { 1 }
    Constant [ integer ALL_MATCHES ] { 2 }
    Constant [ integer SPLIT ] { 3 }
    Constant [ integer REPLACE ] { 4 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [1] {
    Property [ <default> public $replacement ]
  }

  - Methods [15] {
    Method [ <internal:SPL, overwrites FilterIterator, ctor> public method __construct ] {

      - Parameters [5] {
        Parameter #0 [ <required> Iterator $iterator ]
        Parameter #1 [ <required> $regex ]
        Parameter #2 [ <optional> $mode ]
        Parameter #3 [ <optional> $flags ]
        Parameter #4 [ <optional> $preg_flags ]
      }
    }

    Method [ <internal:SPL, overwrites FilterIterator, prototype FilterIterator> public method accept ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method getMode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method setMode ] {

      - Parameters [1] {
        Parameter #0 [ <required> $mode ]
      }
    }

    Method [ <internal:SPL> public method getFlags ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method setFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> $flags ]
      }
    }

    Method [ <internal:SPL> public method getPregFlags ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL> public method setPregFlags ] {

      - Parameters [1] {
        Parameter #0 [ <required> $preg_flags ]
      }
    }

    Method [ <internal:SPL> public method getRegex ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilterIterator, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilterIterator, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilterIterator, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilterIterator, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilterIterator, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:SPL, inherits FilterIterator, prototype OuterIterator> public method getInnerIterator ] {

      - Parameters [0] {
      }
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
  'is_anonymous' => NULL,
  'is_cloneable' => false,
  'is_final' => false,
  'is_instantiable' => true,
  'is_read_only' => false,
);
