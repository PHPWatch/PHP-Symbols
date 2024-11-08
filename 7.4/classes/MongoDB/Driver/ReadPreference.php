<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\ReadPreference',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\ReadPreference',
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
        'name' => 'MongoDB\\Driver\\ReadPreference class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-readpreference.php',
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
    'RP_PRIMARY' => 1,
    'RP_PRIMARY_PREFERRED' => 5,
    'RP_SECONDARY' => 2,
    'RP_SECONDARY_PREFERRED' => 6,
    'RP_NEAREST' => 10,
    'PRIMARY' => 'primary',
    'PRIMARY_PREFERRED' => 'primaryPreferred',
    'SECONDARY' => 'secondary',
    'SECONDARY_PREFERRED' => 'secondaryPreferred',
    'NEAREST' => 'nearest',
    'NO_MAX_STALENESS' => -1,
    'SMALLEST_MAX_STALENESS_SECONDS' => 90,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\ReadPreference',
      'parameters' => 
      array (
        'mode' => 
        array (
          'position' => 0,
          'name' => 'mode',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'tagSets' => 
        array (
          'position' => 1,
          'name' => 'tagSets',
          'type' => 'array',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'options' => 
        array (
          'position' => 2,
          'name' => 'options',
          'type' => 'array',
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
    'getHedge' => 
    array (
      'name' => 'getHedge',
      'class' => 'MongoDB\\Driver\\ReadPreference',
      'parameters' => 
      array (
      ),
      'return_type' => 'object',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getMaxStalenessSeconds' => 
    array (
      'name' => 'getMaxStalenessSeconds',
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
    'getMode' => 
    array (
      'name' => 'getMode',
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
    'getModeString' => 
    array (
      'name' => 'getModeString',
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
    'getTagSets' => 
    array (
      'name' => 'getTagSets',
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
    '__set_state' => 
    array (
      'name' => '__set_state',
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
      'return_type' => 'MongoDB\\Driver\\ReadPreference',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bsonSerialize' => 
    array (
      'name' => 'bsonSerialize',
      'class' => 'MongoDB\\Driver\\ReadPreference',
      'parameters' => 
      array (
      ),
      'return_type' => 'stdClass',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'serialize' => 
    array (
      'name' => 'serialize',
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\ReadPreference implements MongoDB\\BSON\\Serializable, MongoDB\\BSON\\Type, Serializable ] {

  - Constants [12] {
    Constant [ public int RP_PRIMARY ] { 1 }
    Constant [ public int RP_PRIMARY_PREFERRED ] { 5 }
    Constant [ public int RP_SECONDARY ] { 2 }
    Constant [ public int RP_SECONDARY_PREFERRED ] { 6 }
    Constant [ public int RP_NEAREST ] { 10 }
    Constant [ public string PRIMARY ] { primary }
    Constant [ public string PRIMARY_PREFERRED ] { primaryPreferred }
    Constant [ public string SECONDARY ] { secondary }
    Constant [ public string SECONDARY_PREFERRED ] { secondaryPreferred }
    Constant [ public string NEAREST ] { nearest }
    Constant [ public int NO_MAX_STALENESS ] { -1 }
    Constant [ public int SMALLEST_MAX_STALENESS_SECONDS ] { 90 }
  }

  - Static properties [0] {
  }

  - Static methods [1] {
    Method [ <internal:mongodb> final static public method __set_state ] {

      - Parameters [1] {
        Parameter #0 [ <required> array $properties ]
      }
      - Return [ MongoDB\\Driver\\ReadPreference ]
    }
  }

  - Properties [0] {
  }

  - Methods [11] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <required> $mode ]
        Parameter #1 [ <optional> array or NULL $tagSets ]
        Parameter #2 [ <optional> array or NULL $options ]
      }
    }

    Method [ <internal:mongodb> final public method getHedge ] {

      - Parameters [0] {
      }
      - Return [ object or NULL ]
    }

    Method [ <internal:mongodb> final public method getMaxStalenessSeconds ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal, deprecated:mongodb> final public method getMode ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:mongodb> final public method getModeString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb> final public method getTagSets ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:mongodb, prototype MongoDB\\BSON\\Serializable> final public method bsonSerialize ] {

      - Parameters [0] {
      }
      - Return [ stdClass ]
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
  }
}
',
);
