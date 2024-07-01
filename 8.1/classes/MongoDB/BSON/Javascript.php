<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\BSON\\Javascript',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\BSON\\Javascript',
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
        'name' => 'MongoDB\\BSON\\Javascript class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-bson-javascript.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'Stringable',
    1 => 'MongoDB\\BSON\\JavascriptInterface',
    2 => 'JsonSerializable',
    3 => 'MongoDB\\BSON\\Type',
    4 => 'Serializable',
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
      'class' => 'MongoDB\\BSON\\Javascript',
      'parameters' => 
      array (
        'code' => 
        array (
          'position' => 0,
          'name' => 'code',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'scope' => 
        array (
          'position' => 1,
          'name' => 'scope',
          'type' => 'object|array|null',
          'is_optional' => true,
          'has_default_value' => true,
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
    '__set_state' => 
    array (
      'name' => '__set_state',
      'class' => 'MongoDB\\BSON\\Javascript',
      'parameters' => 
      array (
        'properties' => 
        array (
          'position' => 0,
          'name' => 'properties',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'MongoDB\\BSON\\Javascript',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getCode' => 
    array (
      'name' => 'getCode',
      'class' => 'MongoDB\\BSON\\Javascript',
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
    'getScope' => 
    array (
      'name' => 'getScope',
      'class' => 'MongoDB\\BSON\\Javascript',
      'parameters' => 
      array (
      ),
      'return_type' => '?object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'MongoDB\\BSON\\Javascript',
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
    'serialize' => 
    array (
      'name' => 'serialize',
      'class' => 'MongoDB\\BSON\\Javascript',
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
    'unserialize' => 
    array (
      'name' => 'unserialize',
      'class' => 'MongoDB\\BSON\\Javascript',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'string',
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
    '__unserialize' => 
    array (
      'name' => '__unserialize',
      'class' => 'MongoDB\\BSON\\Javascript',
      'parameters' => 
      array (
        'data' => 
        array (
          'position' => 0,
          'name' => 'data',
          'type' => 'array',
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
    '__serialize' => 
    array (
      'name' => '__serialize',
      'class' => 'MongoDB\\BSON\\Javascript',
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
    'jsonSerialize' => 
    array (
      'name' => 'jsonSerialize',
      'class' => 'MongoDB\\BSON\\Javascript',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\BSON\\Javascript implements Stringable, MongoDB\\BSON\\JavascriptInterface, JsonSerializable, MongoDB\\BSON\\Type, Serializable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:mongodb> final static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $properties ]
      }
      - Return [ MongoDB\\BSON\\Javascript ]
    }
  }

  - Properties [0] {
  }

  - Methods [9] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $code ]
        Parameter #1 [ <optional> object|array|null $scope = null ]
      }
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\JavascriptInterface> final public method getCode ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\JavascriptInterface> final public method getScope ] {

      - Parameters [0] {
      }
      - Return [ ?object ]
    }

    Method [ <internal:mongodb, prototype Stringable> final public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb, prototype Serializable> final public method serialize ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb, prototype Serializable> final public method unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:mongodb> final public method __unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
      - Return [ void ]
    }

    Method [ <internal:mongodb> final public method __serialize ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:mongodb, prototype JsonSerializable> final public method jsonSerialize ] {

      - Parameters [0] {
      }
      - Return [ mixed ]
    }
  }
}
',
);
