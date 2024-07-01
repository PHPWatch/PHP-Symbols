<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\BSON\\Timestamp',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\BSON\\Timestamp',
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
        'name' => 'MongoDB\\BSON\\Timestamp class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-bson-timestamp.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'MongoDB\\BSON\\TimestampInterface',
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
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\BSON\\Timestamp',
      'parameters' => 
      array (
        'increment' => 
        array (
          'position' => 0,
          'name' => 'increment',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'timestamp' => 
        array (
          'position' => 1,
          'name' => 'timestamp',
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
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__set_state' => 
    array (
      'name' => '__set_state',
      'class' => 'MongoDB\\BSON\\Timestamp',
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
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__toString' => 
    array (
      'name' => '__toString',
      'class' => 'MongoDB\\BSON\\Timestamp',
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
    'jsonSerialize' => 
    array (
      'name' => 'jsonSerialize',
      'class' => 'MongoDB\\BSON\\Timestamp',
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
    'serialize' => 
    array (
      'name' => 'serialize',
      'class' => 'MongoDB\\BSON\\Timestamp',
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
    'unserialize' => 
    array (
      'name' => 'unserialize',
      'class' => 'MongoDB\\BSON\\Timestamp',
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
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getIncrement' => 
    array (
      'name' => 'getIncrement',
      'class' => 'MongoDB\\BSON\\Timestamp',
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
    'getTimestamp' => 
    array (
      'name' => 'getTimestamp',
      'class' => 'MongoDB\\BSON\\Timestamp',
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
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\BSON\\Timestamp implements MongoDB\\BSON\\TimestampInterface, JsonSerializable, MongoDB\\BSON\\Type, Serializable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:mongodb> static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $properties ]
      }
    }
  }

  - Properties [0] {
  }

  - Methods [7] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> $increment ]
        Parameter #1 [ <required> $timestamp ]
      }
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\TimestampInterface> final public method __toString ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb, prototype JsonSerializable> final public method jsonSerialize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb, prototype Serializable> final public method serialize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb, prototype Serializable> final public method unserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> $serialized ]
      }
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\TimestampInterface> final public method getIncrement ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\TimestampInterface> final public method getTimestamp ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
