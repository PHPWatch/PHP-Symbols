<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\BSON\\Binary',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\BSON\\Binary',
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
        'name' => 'MongoDB\\BSON\\Binary class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-bson-binary.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'MongoDB\\BSON\\BinaryInterface',
    1 => 'JsonSerializable',
    2 => 'MongoDB\\BSON\\Type',
    3 => 'Serializable',
  ),
  'constants' => 
  array (
    'TYPE_GENERIC' => 0,
    'TYPE_FUNCTION' => 1,
    'TYPE_OLD_BINARY' => 2,
    'TYPE_OLD_UUID' => 3,
    'TYPE_UUID' => 4,
    'TYPE_MD5' => 5,
    'TYPE_ENCRYPTED' => 6,
    'TYPE_COLUMN' => 7,
    'TYPE_USER_DEFINED' => 128,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\BSON\\Binary',
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
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
          'type' => 'int',
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
    'getData' => 
    array (
      'name' => 'getData',
      'class' => 'MongoDB\\BSON\\Binary',
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
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'MongoDB\\BSON\\Binary',
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
    '__set_state' => 
    array (
      'name' => '__set_state',
      'class' => 'MongoDB\\BSON\\Binary',
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
      'return_type' => 'MongoDB\\BSON\\Binary',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'MongoDB\\BSON\\Binary',
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
      'class' => 'MongoDB\\BSON\\Binary',
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
      'class' => 'MongoDB\\BSON\\Binary',
      'parameters' => 
      array (
        'serialized' => 
        array (
          'position' => 0,
          'name' => 'serialized',
          'type' => NULL,
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
      'class' => 'MongoDB\\BSON\\Binary',
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
      'class' => 'MongoDB\\BSON\\Binary',
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
      'class' => 'MongoDB\\BSON\\Binary',
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
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\BSON\\Binary implements MongoDB\\BSON\\BinaryInterface, JsonSerializable, MongoDB\\BSON\\Type, Serializable ] {

  - Constants [9] {
    Constant [ public integer TYPE_GENERIC ] { 0 }
    Constant [ public integer TYPE_FUNCTION ] { 1 }
    Constant [ public integer TYPE_OLD_BINARY ] { 2 }
    Constant [ public integer TYPE_OLD_UUID ] { 3 }
    Constant [ public integer TYPE_UUID ] { 4 }
    Constant [ public integer TYPE_MD5 ] { 5 }
    Constant [ public integer TYPE_ENCRYPTED ] { 6 }
    Constant [ public integer TYPE_COLUMN ] { 7 }
    Constant [ public integer TYPE_USER_DEFINED ] { 128 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:mongodb> final static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $properties ]
      }
      - Return [ MongoDB\\BSON\\Binary ]
    }
  }

  - Properties [0] {
  }

  - Methods [9] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> string $data ]
        Parameter #1 [ <optional> integer $type ]
      }
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\BinaryInterface> final public method getData ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\BinaryInterface> final public method getType ] {

      - Parameters [0] {
      }
      - Return [ integer ]
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\BinaryInterface> final public method __toString ] {

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
        Parameter #0 [ <required> $serialized ]
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
    }
  }
}
',
);
