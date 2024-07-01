<?php

return array (
  'type' => 'class',
  'name' => 'ImagickPixelIterator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ImagickPixelIterator',
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
        'name' => 'ImagickPixelIterator class (php.net)',
        'url' => 'https://www.php.net/manual/class.imagickpixeliterator.php',
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
      'class' => 'ImagickPixelIterator',
      'parameters' => 
      array (
        'imagick' => 
        array (
          'position' => 0,
          'name' => 'imagick',
          'type' => 'Imagick',
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
    'clear' => 
    array (
      'name' => 'clear',
      'class' => 'ImagickPixelIterator',
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
    'getPixelIterator' => 
    array (
      'name' => 'getPixelIterator',
      'class' => 'ImagickPixelIterator',
      'parameters' => 
      array (
        'imagick' => 
        array (
          'position' => 0,
          'name' => 'imagick',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'ImagickPixelIterator',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getPixelRegionIterator' => 
    array (
      'name' => 'getPixelRegionIterator',
      'class' => 'ImagickPixelIterator',
      'parameters' => 
      array (
        'imagick' => 
        array (
          'position' => 0,
          'name' => 'imagick',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 1,
          'name' => 'x',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 2,
          'name' => 'y',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'columns' => 
        array (
          'position' => 3,
          'name' => 'columns',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 4,
          'name' => 'rows',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'ImagickPixelIterator',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'destroy' => 
    array (
      'name' => 'destroy',
      'class' => 'ImagickPixelIterator',
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
    'getCurrentIteratorRow' => 
    array (
      'name' => 'getCurrentIteratorRow',
      'class' => 'ImagickPixelIterator',
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
    'getIteratorRow' => 
    array (
      'name' => 'getIteratorRow',
      'class' => 'ImagickPixelIterator',
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
    'getNextIteratorRow' => 
    array (
      'name' => 'getNextIteratorRow',
      'class' => 'ImagickPixelIterator',
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
    'getPreviousIteratorRow' => 
    array (
      'name' => 'getPreviousIteratorRow',
      'class' => 'ImagickPixelIterator',
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
    'key' => 
    array (
      'name' => 'key',
      'class' => 'ImagickPixelIterator',
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
    'next' => 
    array (
      'name' => 'next',
      'class' => 'ImagickPixelIterator',
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
      'class' => 'ImagickPixelIterator',
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
      'class' => 'ImagickPixelIterator',
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
    'newPixelIterator' => 
    array (
      'name' => 'newPixelIterator',
      'class' => 'ImagickPixelIterator',
      'parameters' => 
      array (
        'imagick' => 
        array (
          'position' => 0,
          'name' => 'imagick',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'newPixelRegionIterator' => 
    array (
      'name' => 'newPixelRegionIterator',
      'class' => 'ImagickPixelIterator',
      'parameters' => 
      array (
        'imagick' => 
        array (
          'position' => 0,
          'name' => 'imagick',
          'type' => 'Imagick',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'x' => 
        array (
          'position' => 1,
          'name' => 'x',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'y' => 
        array (
          'position' => 2,
          'name' => 'y',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'columns' => 
        array (
          'position' => 3,
          'name' => 'columns',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'rows' => 
        array (
          'position' => 4,
          'name' => 'rows',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'resetIterator' => 
    array (
      'name' => 'resetIterator',
      'class' => 'ImagickPixelIterator',
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
    'setIteratorFirstRow' => 
    array (
      'name' => 'setIteratorFirstRow',
      'class' => 'ImagickPixelIterator',
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
    'setIteratorLastRow' => 
    array (
      'name' => 'setIteratorLastRow',
      'class' => 'ImagickPixelIterator',
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
    'setIteratorRow' => 
    array (
      'name' => 'setIteratorRow',
      'class' => 'ImagickPixelIterator',
      'parameters' => 
      array (
        'row' => 
        array (
          'position' => 0,
          'name' => 'row',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'syncIterator' => 
    array (
      'name' => 'syncIterator',
      'class' => 'ImagickPixelIterator',
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
    'valid' => 
    array (
      'name' => 'valid',
      'class' => 'ImagickPixelIterator',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:imagick> <iterateable> class ImagickPixelIterator implements Iterator, Traversable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:imagick> static public method getPixelIterator ] {

      - Parameters [1] {
        Parameter #0 [ <required> Imagick $imagick ]
      }
      - Return [ ImagickPixelIterator ]
    }

    Method [ <internal:imagick> static public method getPixelRegionIterator ] {

      - Parameters [5] {
        Parameter #0 [ <required> Imagick $imagick ]
        Parameter #1 [ <required> int $x ]
        Parameter #2 [ <required> int $y ]
        Parameter #3 [ <required> int $columns ]
        Parameter #4 [ <required> int $rows ]
      }
      - Return [ ImagickPixelIterator ]
    }
  }

  - Properties [0] {
  }

  - Methods [19] {
    Method [ <internal:imagick, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> Imagick $imagick ]
      }
    }

    Method [ <internal:imagick> public method clear ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:imagick> public method destroy ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:imagick> public method getCurrentIteratorRow ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:imagick> public method getIteratorRow ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:imagick> public method getNextIteratorRow ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:imagick> public method getPreviousIteratorRow ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:imagick, prototype Iterator> public method key ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:imagick, prototype Iterator> public method next ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:imagick, prototype Iterator> public method rewind ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:imagick, prototype Iterator> public method current ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:imagick> public method newPixelIterator ] {

      - Parameters [1] {
        Parameter #0 [ <required> Imagick $imagick ]
      }
      - Return [ bool ]
    }

    Method [ <internal:imagick> public method newPixelRegionIterator ] {

      - Parameters [5] {
        Parameter #0 [ <required> Imagick $imagick ]
        Parameter #1 [ <required> int $x ]
        Parameter #2 [ <required> int $y ]
        Parameter #3 [ <required> int $columns ]
        Parameter #4 [ <required> int $rows ]
      }
      - Return [ bool ]
    }

    Method [ <internal:imagick> public method resetIterator ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:imagick> public method setIteratorFirstRow ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:imagick> public method setIteratorLastRow ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:imagick> public method setIteratorRow ] {

      - Parameters [1] {
        Parameter #0 [ <required> int $row ]
      }
      - Return [ bool ]
    }

    Method [ <internal:imagick> public method syncIterator ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    Method [ <internal:imagick, prototype Iterator> public method valid ] {

      - Parameters [0] {
      }
      - Return [ bool ]
    }
  }
}
',
);
