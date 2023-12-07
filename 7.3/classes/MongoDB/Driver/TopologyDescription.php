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
);
