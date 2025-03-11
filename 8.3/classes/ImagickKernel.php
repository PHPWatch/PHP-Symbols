<?php

return array (
  'type' => 'class',
  'name' => 'ImagickKernel',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ImagickKernel',
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
        'name' => 'ImagickKernel class (php.net)',
        'url' => 'https://www.php.net/manual/class.imagickkernel.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'addKernel' => 
    array (
      'name' => 'addKernel',
      'class' => 'ImagickKernel',
      'parameters' => 
      array (
        'kernel' => 
        array (
          'position' => 0,
          'name' => 'kernel',
          'type' => 'ImagickKernel',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'addUnityKernel' => 
    array (
      'name' => 'addUnityKernel',
      'class' => 'ImagickKernel',
      'parameters' => 
      array (
        'scale' => 
        array (
          'position' => 0,
          'name' => 'scale',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromBuiltin' => 
    array (
      'name' => 'fromBuiltin',
      'class' => 'ImagickKernel',
      'parameters' => 
      array (
        'kernel' => 
        array (
          'position' => 0,
          'name' => 'kernel',
          'type' => 'int',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'shape' => 
        array (
          'position' => 1,
          'name' => 'shape',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'ImagickKernel',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromMatrix' => 
    array (
      'name' => 'fromMatrix',
      'class' => 'ImagickKernel',
      'parameters' => 
      array (
        'matrix' => 
        array (
          'position' => 0,
          'name' => 'matrix',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'origin' => 
        array (
          'position' => 1,
          'name' => 'origin',
          'type' => '?array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'ImagickKernel',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getMatrix' => 
    array (
      'name' => 'getMatrix',
      'class' => 'ImagickKernel',
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
    'scale' => 
    array (
      'name' => 'scale',
      'class' => 'ImagickKernel',
      'parameters' => 
      array (
        'scale' => 
        array (
          'position' => 0,
          'name' => 'scale',
          'type' => 'float',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'normalize_kernel' => 
        array (
          'position' => 1,
          'name' => 'normalize_kernel',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'void',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'separate' => 
    array (
      'name' => 'separate',
      'class' => 'ImagickKernel',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:imagick> class ImagickKernel ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [2] {
    Method [ <internal:imagick> static public method fromBuiltin ] {

      - Parameters [2] {
        Parameter #0 [ <required> int $kernel ]
        Parameter #1 [ <required> string $shape ]
      }
      - Return [ ImagickKernel ]
    }

    Method [ <internal:imagick> static public method fromMatrix ] {

      - Parameters [2] {
        Parameter #0 [ <required> array $matrix ]
        Parameter #1 [ <required> ?array $origin ]
      }
      - Return [ ImagickKernel ]
    }
  }

  - Properties [0] {
  }

  - Methods [5] {
    Method [ <internal:imagick> public method addKernel ] {

      - Parameters [1] {
        Parameter #0 [ <required> ImagickKernel $kernel ]
      }
      - Return [ void ]
    }

    Method [ <internal:imagick> public method addUnityKernel ] {

      - Parameters [1] {
        Parameter #0 [ <required> float $scale ]
      }
      - Return [ void ]
    }

    Method [ <internal:imagick> public method getMatrix ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:imagick> public method scale ] {

      - Parameters [2] {
        Parameter #0 [ <required> float $scale ]
        Parameter #1 [ <optional> ?int $normalize_kernel = null ]
      }
      - Return [ void ]
    }

    Method [ <internal:imagick> public method separate ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }
  }
}
',
);
