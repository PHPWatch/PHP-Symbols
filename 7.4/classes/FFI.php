<?php

return array (
  'type' => 'class',
  'name' => 'FFI',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'FFI',
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
        'name' => 'FFI class (php.net)',
        'url' => 'https://www.php.net/manual/class.ffi.php',
      ),
    ),
  ),
  'modifiers' => 32,
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
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'cdef' => 
    array (
      'name' => 'cdef',
      'class' => 'FFI',
      'parameters' => 
      array (
        'code' => 
        array (
          'position' => 0,
          'name' => 'code',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'lib' => 
        array (
          'position' => 1,
          'name' => 'lib',
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
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'load' => 
    array (
      'name' => 'load',
      'class' => 'FFI',
      'parameters' => 
      array (
        'filename' => 
        array (
          'position' => 0,
          'name' => 'filename',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'scope' => 
    array (
      'name' => 'scope',
      'class' => 'FFI',
      'parameters' => 
      array (
        'scope_name' => 
        array (
          'position' => 0,
          'name' => 'scope_name',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'new' => 
    array (
      'name' => 'new',
      'class' => 'FFI',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'owned' => 
        array (
          'position' => 1,
          'name' => 'owned',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'persistent' => 
        array (
          'position' => 2,
          'name' => 'persistent',
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
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'free' => 
    array (
      'name' => 'free',
      'class' => 'FFI',
      'parameters' => 
      array (
        'ptr' => 
        array (
          'position' => 0,
          'name' => 'ptr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'cast' => 
    array (
      'name' => 'cast',
      'class' => 'FFI',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ptr' => 
        array (
          'position' => 1,
          'name' => 'ptr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'class' => 'FFI',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'typeof' => 
    array (
      'name' => 'typeof',
      'class' => 'FFI',
      'parameters' => 
      array (
        'ptr' => 
        array (
          'position' => 0,
          'name' => 'ptr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'arrayType' => 
    array (
      'name' => 'arrayType',
      'class' => 'FFI',
      'parameters' => 
      array (
        'type' => 
        array (
          'position' => 0,
          'name' => 'type',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'dims' => 
        array (
          'position' => 1,
          'name' => 'dims',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addr' => 
    array (
      'name' => 'addr',
      'class' => 'FFI',
      'parameters' => 
      array (
        'ptr' => 
        array (
          'position' => 0,
          'name' => 'ptr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sizeof' => 
    array (
      'name' => 'sizeof',
      'class' => 'FFI',
      'parameters' => 
      array (
        'ptr' => 
        array (
          'position' => 0,
          'name' => 'ptr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'alignof' => 
    array (
      'name' => 'alignof',
      'class' => 'FFI',
      'parameters' => 
      array (
        'ptr' => 
        array (
          'position' => 0,
          'name' => 'ptr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'memcpy' => 
    array (
      'name' => 'memcpy',
      'class' => 'FFI',
      'parameters' => 
      array (
        'dst' => 
        array (
          'position' => 0,
          'name' => 'dst',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'src' => 
        array (
          'position' => 1,
          'name' => 'src',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'size' => 
        array (
          'position' => 2,
          'name' => 'size',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'memcmp' => 
    array (
      'name' => 'memcmp',
      'class' => 'FFI',
      'parameters' => 
      array (
        'ptr1' => 
        array (
          'position' => 0,
          'name' => 'ptr1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ptr2' => 
        array (
          'position' => 1,
          'name' => 'ptr2',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'size' => 
        array (
          'position' => 2,
          'name' => 'size',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'memset' => 
    array (
      'name' => 'memset',
      'class' => 'FFI',
      'parameters' => 
      array (
        'ptr' => 
        array (
          'position' => 0,
          'name' => 'ptr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'ch' => 
        array (
          'position' => 1,
          'name' => 'ch',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'size' => 
        array (
          'position' => 2,
          'name' => 'size',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'string' => 
    array (
      'name' => 'string',
      'class' => 'FFI',
      'parameters' => 
      array (
        'ptr' => 
        array (
          'position' => 0,
          'name' => 'ptr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'size' => 
        array (
          'position' => 1,
          'name' => 'size',
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
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'isNull' => 
    array (
      'name' => 'isNull',
      'class' => 'FFI',
      'parameters' => 
      array (
        'ptr' => 
        array (
          'position' => 0,
          'name' => 'ptr',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
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
  'is_final' => true,
  'is_read_only' => false,
  'extension' => 'FFI',
  'toString' => 'Class [ <internal:FFI> final class FFI ] {

  - Constants [1] {
    Constant [ public int __BIGGEST_ALIGNMENT__ ] { 16 }
  }

  - Static properties [0] {
  }

  - Static methods [17] {
    Method [ <internal:FFI> static public method cdef ] {

      - Parameters [2] {
        Parameter #0 [ <optional> $code ]
        Parameter #1 [ <optional> $lib ]
      }
    }

    Method [ <internal:FFI> static public method load ] {

      - Parameters [1] {
        Parameter #0 [ <required> $filename ]
      }
    }

    Method [ <internal:FFI> static public method scope ] {

      - Parameters [1] {
        Parameter #0 [ <required> $scope_name ]
      }
    }

    Method [ <internal:FFI> static public method new ] {

      - Parameters [3] {
        Parameter #0 [ <required> $type ]
        Parameter #1 [ <optional> $owned ]
        Parameter #2 [ <optional> $persistent ]
      }
    }

    Method [ <internal:FFI> static public method free ] {

      - Parameters [1] {
        Parameter #0 [ <required> &$ptr ]
      }
    }

    Method [ <internal:FFI> static public method cast ] {

      - Parameters [2] {
        Parameter #0 [ <required> $type ]
        Parameter #1 [ <required> &$ptr ]
      }
    }

    Method [ <internal:FFI> static public method type ] {

      - Parameters [1] {
        Parameter #0 [ <required> $type ]
      }
    }

    Method [ <internal:FFI> static public method typeof ] {

      - Parameters [1] {
        Parameter #0 [ <required> &$ptr ]
      }
    }

    Method [ <internal:FFI> static public method arrayType ] {

      - Parameters [2] {
        Parameter #0 [ <required> $type ]
        Parameter #1 [ <required> $dims ]
      }
    }

    Method [ <internal:FFI> static public method addr ] {

      - Parameters [1] {
        Parameter #0 [ <required> &$ptr ]
      }
    }

    Method [ <internal:FFI> static public method sizeof ] {

      - Parameters [1] {
        Parameter #0 [ <required> &$ptr ]
      }
    }

    Method [ <internal:FFI> static public method alignof ] {

      - Parameters [1] {
        Parameter #0 [ <required> &$ptr ]
      }
    }

    Method [ <internal:FFI> static public method memcpy ] {

      - Parameters [3] {
        Parameter #0 [ <required> &$dst ]
        Parameter #1 [ <required> &$src ]
        Parameter #2 [ <required> $size ]
      }
    }

    Method [ <internal:FFI> static public method memcmp ] {

      - Parameters [3] {
        Parameter #0 [ <required> &$ptr1 ]
        Parameter #1 [ <required> &$ptr2 ]
        Parameter #2 [ <required> $size ]
      }
    }

    Method [ <internal:FFI> static public method memset ] {

      - Parameters [3] {
        Parameter #0 [ <required> &$ptr ]
        Parameter #1 [ <required> $ch ]
        Parameter #2 [ <required> $size ]
      }
    }

    Method [ <internal:FFI> static public method string ] {

      - Parameters [2] {
        Parameter #0 [ <required> &$ptr ]
        Parameter #1 [ <optional> $size ]
      }
    }

    Method [ <internal:FFI> static public method isNull ] {

      - Parameters [1] {
        Parameter #0 [ <required> &$ptr ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [0] {
  }
}
',
);
