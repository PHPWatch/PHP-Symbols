<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\Driver\\TopologyDescription',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\Driver\\TopologyDescription',
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
        'name' => 'MongoDB\\Driver\\TopologyDescription class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-driver-topologydescription.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'TYPE_UNKNOWN' => 'Unknown',
    'TYPE_SINGLE' => 'Single',
    'TYPE_SHARDED' => 'Sharded',
    'TYPE_REPLICA_SET_NO_PRIMARY' => 'ReplicaSetNoPrimary',
    'TYPE_REPLICA_SET_WITH_PRIMARY' => 'ReplicaSetWithPrimary',
    'TYPE_LOAD_BALANCED' => 'LoadBalanced',
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\Driver\\TopologyDescription',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'getServers' => 
    array (
      'name' => 'getServers',
      'class' => 'MongoDB\\Driver\\TopologyDescription',
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
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'MongoDB\\Driver\\TopologyDescription',
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
    'hasReadableServer' => 
    array (
      'name' => 'hasReadableServer',
      'class' => 'MongoDB\\Driver\\TopologyDescription',
      'parameters' => 
      array (
        'readPreference' => 
        array (
          'position' => 0,
          'name' => 'readPreference',
          'type' => 'MongoDB\\Driver\\ReadPreference',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'hasWritableServer' => 
    array (
      'name' => 'hasWritableServer',
      'class' => 'MongoDB\\Driver\\TopologyDescription',
      'parameters' => 
      array (
      ),
      'return_type' => 'bool',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__wakeup' => 
    array (
      'name' => '__wakeup',
      'class' => 'MongoDB\\Driver\\TopologyDescription',
      'parameters' => 
      array (
      ),
      'return_type' => 'void',
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
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\TopologyDescription ] {

  - Constants [6] {
    Constant [ public string TYPE_UNKNOWN ] { Unknown }
    Constant [ public string TYPE_SINGLE ] { Single }
    Constant [ public string TYPE_SHARDED ] { Sharded }
    Constant [ public string TYPE_REPLICA_SET_NO_PRIMARY ] { ReplicaSetNoPrimary }
    Constant [ public string TYPE_REPLICA_SET_WITH_PRIMARY ] { ReplicaSetWithPrimary }
    Constant [ public string TYPE_LOAD_BALANCED ] { LoadBalanced }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [6] {
    Method [ <internal:mongodb, ctor> final private method __construct ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> final public method getServers ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:mongodb> final public method getType ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:mongodb> final public method hasReadableServer ] {

      - Parameters [1] {
        Parameter #0 [ <optional> MongoDB\\Driver\\ReadPreference or NULL $readPreference ]
      }
      - Return [ boolean ]
    }

    Method [ <internal:mongodb> final public method hasWritableServer ] {

      - Parameters [0] {
      }
      - Return [ boolean ]
    }

    Method [ <internal:mongodb> final public method __wakeup ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }
  }
}
',
);
