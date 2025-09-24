<?php

return array (
  'type' => 'class',
  'name' => 'BcMath\\Number',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'BcMath\\Number',
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
        'name' => 'BcMath\\Number interface (php.net)',
        'url' => 'https://www.php.net/manual/class.bcmath-number.php',
      ),
    ),
  ),
  'comment' => false,
  'namespace' => 'BcMath',
  'constants' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => 'string|int',
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
    'add' => 
    array (
      'name' => 'add',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scale' => 
        array (
          'position' => 1,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sub' => 
    array (
      'name' => 'sub',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scale' => 
        array (
          'position' => 1,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mul' => 
    array (
      'name' => 'mul',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scale' => 
        array (
          'position' => 1,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'div' => 
    array (
      'name' => 'div',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scale' => 
        array (
          'position' => 1,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'mod' => 
    array (
      'name' => 'mod',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scale' => 
        array (
          'position' => 1,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'divmod' => 
    array (
      'name' => 'divmod',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scale' => 
        array (
          'position' => 1,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'array',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'powmod' => 
    array (
      'name' => 'powmod',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'exponent' => 
        array (
          'position' => 0,
          'name' => 'exponent',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'modulus' => 
        array (
          'position' => 1,
          'name' => 'modulus',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scale' => 
        array (
          'position' => 2,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'pow' => 
    array (
      'name' => 'pow',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'exponent' => 
        array (
          'position' => 0,
          'name' => 'exponent',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scale' => 
        array (
          'position' => 1,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sqrt' => 
    array (
      'name' => 'sqrt',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'scale' => 
        array (
          'position' => 0,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'floor' => 
    array (
      'name' => 'floor',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'ceil' => 
    array (
      'name' => 'ceil',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'round' => 
    array (
      'name' => 'round',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'precision' => 
        array (
          'position' => 0,
          'name' => 'precision',
          'type' => 'int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'mode' => 
        array (
          'position' => 1,
          'name' => 'mode',
          'type' => 'RoundingMode',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => true,
          'default_value_constant' => 'RoundingMode::HalfAwayFromZero',
        ),
      ),
      'return_type' => 'BcMath\\Number',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compare' => 
    array (
      'name' => 'compare',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'num' => 
        array (
          'position' => 0,
          'name' => 'num',
          'type' => 'BcMath\\Number|string|int',
          'is_optional' => false,
          'has_default_value' => false,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scale' => 
        array (
          'position' => 1,
          'name' => 'scale',
          'type' => '?int',
          'is_optional' => true,
          'has_default_value' => true,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
      ),
      'return_type' => 'string',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'BcMath\\Number',
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
    '__unserialize' => 
    array (
      'name' => '__unserialize',
      'class' => 'BcMath\\Number',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
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
  ),
  'interfaces' => 
  array (
    0 => 'Stringable',
  ),
  'properties' => 
  array (
    'value' => 
    array (
      'name' => 'value',
      'class' => 'BcMath\\Number',
      'type' => 'string',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
    'scale' => 
    array (
      'name' => 'scale',
      'class' => 'BcMath\\Number',
      'type' => 'int',
      'has_default_value' => false,
      'default_value' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
      'is_promoted' => false,
    ),
  ),
  'extension' => 'bcmath',
  'toString' => 'Class [ <internal:bcmath> final readonly class BcMath\\Number implements Stringable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ public protected(set) readonly virtual string $value ]
    Property [ public protected(set) readonly virtual int $scale ]
  }

  - Methods [17] {
    Method [ <internal:bcmath, ctor> public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <required> string|int $num ]
      }
    }

    Method [ <internal:bcmath> public method add ] {

      - Parameters [2] {
        Parameter #0 [ <required> BcMath\\Number|string|int $num ]
        Parameter #1 [ <optional> ?int $scale = null ]
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method sub ] {

      - Parameters [2] {
        Parameter #0 [ <required> BcMath\\Number|string|int $num ]
        Parameter #1 [ <optional> ?int $scale = null ]
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method mul ] {

      - Parameters [2] {
        Parameter #0 [ <required> BcMath\\Number|string|int $num ]
        Parameter #1 [ <optional> ?int $scale = null ]
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method div ] {

      - Parameters [2] {
        Parameter #0 [ <required> BcMath\\Number|string|int $num ]
        Parameter #1 [ <optional> ?int $scale = null ]
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method mod ] {

      - Parameters [2] {
        Parameter #0 [ <required> BcMath\\Number|string|int $num ]
        Parameter #1 [ <optional> ?int $scale = null ]
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method divmod ] {

      - Parameters [2] {
        Parameter #0 [ <required> BcMath\\Number|string|int $num ]
        Parameter #1 [ <optional> ?int $scale = null ]
      }
      - Return [ array ]
    }

    Method [ <internal:bcmath> public method powmod ] {

      - Parameters [3] {
        Parameter #0 [ <required> BcMath\\Number|string|int $exponent ]
        Parameter #1 [ <required> BcMath\\Number|string|int $modulus ]
        Parameter #2 [ <optional> ?int $scale = null ]
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method pow ] {

      - Parameters [2] {
        Parameter #0 [ <required> BcMath\\Number|string|int $exponent ]
        Parameter #1 [ <optional> ?int $scale = null ]
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method sqrt ] {

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $scale = null ]
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method floor ] {

      - Parameters [0] {
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method ceil ] {

      - Parameters [0] {
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method round ] {

      - Parameters [2] {
        Parameter #0 [ <optional> int $precision = 0 ]
        Parameter #1 [ <optional> RoundingMode $mode = RoundingMode::HalfAwayFromZero ]
      }
      - Return [ BcMath\\Number ]
    }

    Method [ <internal:bcmath> public method compare ] {

      - Parameters [2] {
        Parameter #0 [ <required> BcMath\\Number|string|int $num ]
        Parameter #1 [ <optional> ?int $scale = null ]
      }
      - Return [ int ]
    }

    Method [ <internal:bcmath, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:bcmath> public method __serialize ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:bcmath> public method __unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
      - Return [ void ]
    }
  }
}
',
  'modifiers' => 65568,
  'defaultProperties' => 
  array (
  ),
  'staticProperties' => 
  array (
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_instantiable' => true,
  'is_read_only' => true,
);
