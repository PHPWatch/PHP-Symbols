<?php

return array (
  'type' => 'interface',
  'name' => 'MongoDB\\BSON\\Persistable',
  'meta' => 
  array (
    'type' => 'interface',
    'name' => 'MongoDB\\BSON\\Persistable',
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
        'name' => 'MongoDB\\BSON\\Persistable interface (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-bson-persistable.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'MongoDB\\BSON\\Serializable',
    1 => 'MongoDB\\BSON\\Type',
    2 => 'MongoDB\\BSON\\Unserializable',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'bsonSerialize' => 
    array (
      'name' => 'bsonSerialize',
      'class' => 'MongoDB\\BSON\\Persistable',
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
    'bsonUnserialize' => 
    array (
      'name' => 'bsonUnserialize',
      'class' => 'MongoDB\\BSON\\Unserializable',
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
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'toString' => 'Interface [ <internal:mongodb> interface MongoDB\\BSON\\Persistable extends MongoDB\\BSON\\Serializable, MongoDB\\BSON\\Type, MongoDB\\BSON\\Unserializable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [2] {
    Method [ <internal:mongodb, prototype MongoDB\\BSON\\Serializable> abstract public method bsonSerialize ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb, inherits MongoDB\\BSON\\Unserializable> abstract public method bsonUnserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
    }
  }
}
',
);
