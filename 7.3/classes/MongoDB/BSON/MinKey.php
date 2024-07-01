<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\BSON\\MinKey',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\BSON\\MinKey',
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
        'name' => 'MongoDB\\BSON\\MinKey class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-bson-minkey.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'MongoDB\\BSON\\MinKeyInterface',
    1 => 'JsonSerializable',
    2 => 'MongoDB\\BSON\\Type',
    3 => 'Serializable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__set_state' => 
    array (
      'name' => '__set_state',
      'class' => 'MongoDB\\BSON\\MinKey',
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
      'return_type' => 'MongoDB\\BSON\\MinKey',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'serialize' => 
    array (
      'name' => 'serialize',
      'class' => 'MongoDB\\BSON\\MinKey',
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
      'class' => 'MongoDB\\BSON\\MinKey',
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
      'class' => 'MongoDB\\BSON\\MinKey',
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
      'class' => 'MongoDB\\BSON\\MinKey',
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
      'class' => 'MongoDB\\BSON\\MinKey',
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
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\BSON\\MinKey implements MongoDB\\BSON\\MinKeyInterface, JsonSerializable, MongoDB\\BSON\\Type, Serializable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:mongodb> final static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $properties ]
      }
      - Return [ MongoDB\\BSON\\MinKey ]
    }
  }

  - Properties [0] {
  }

  - Methods [5] {
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
