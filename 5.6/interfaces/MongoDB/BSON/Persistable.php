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
    0 => 'MongoDB\\BSON\\Unserializable',
    1 => 'MongoDB\\BSON\\Serializable',
    2 => 'MongoDB\\BSON\\Type',
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
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
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
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
    'bsonSerialize' => 
    array (
      'name' => 'bsonSerialize',
      'class' => 'MongoDB\\BSON\\Serializable',
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
  'toString' => 'Interface [ <internal:mongodb> interface MongoDB\\BSON\\Persistable extends MongoDB\\BSON\\Unserializable, MongoDB\\BSON\\Serializable, MongoDB\\BSON\\Type ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [2] {
    Method [ <internal:mongodb, inherits MongoDB\\BSON\\Unserializable> abstract public method bsonUnserialize ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $data ]
      }
    }

    Method [ <internal:mongodb, inherits MongoDB\\BSON\\Serializable> abstract public method bsonSerialize ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
