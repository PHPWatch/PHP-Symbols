<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\ReadConcern',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\ReadConcern',
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
        'name' => 'MongoDB\\Driver\\ReadConcern class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-readconcern.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'MongoDB\\BSON\\Serializable',
    1 => 'MongoDB\\BSON\\Type',
    2 => 'Serializable',
  ),
  'constants' => 
  array (
    'LOCAL' => 'local',
    'MAJORITY' => 'majority',
    'LINEARIZABLE' => 'linearizable',
    'AVAILABLE' => 'available',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\ReadConcern',
      'parameters' => 
      array (
        'level' => 
        array (
          'position' => 0,
          'name' => 'level',
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
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__set_state' => 
    array (
      'name' => '__set_state',
      'class' => 'MongoDB\\Driver\\ReadConcern',
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
    'getLevel' => 
    array (
      'name' => 'getLevel',
      'class' => 'MongoDB\\Driver\\ReadConcern',
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
    'isDefault' => 
    array (
      'name' => 'isDefault',
      'class' => 'MongoDB\\Driver\\ReadConcern',
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
    'bsonSerialize' => 
    array (
      'name' => 'bsonSerialize',
      'class' => 'MongoDB\\Driver\\ReadConcern',
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
      'class' => 'MongoDB\\Driver\\ReadConcern',
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
      'class' => 'MongoDB\\Driver\\ReadConcern',
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
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\ReadConcern implements MongoDB\\BSON\\Serializable, MongoDB\\BSON\\Type, Serializable ] {

  - Constants [4] {
    Constant [ string LOCAL ] { local }
    Constant [ string MAJORITY ] { majority }
    Constant [ string LINEARIZABLE ] { linearizable }
    Constant [ string AVAILABLE ] { available }
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

  - Methods [6] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $level ]
      }
    }

    Method [ <internal:mongodb> final public method getLevel ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method isDefault ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\Serializable> final public method bsonSerialize ] {

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
  }
}
',
);
