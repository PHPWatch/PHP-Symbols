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
  ),
  'constants' => 
  array (
    'RP_PRIMARY' => 1,
    'RP_PRIMARY_PREFERRED' => 5,
    'RP_SECONDARY' => 2,
    'RP_SECONDARY_PREFERRED' => 6,
    'RP_NEAREST' => 10,
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
          'type' => NULL,
          'is_optional' => true,
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
    'getMode' => 
    array (
      'name' => 'getMode',
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
    'getTagSets' => 
    array (
      'name' => 'getTagSets',
      'class' => 'MongoDB\\Driver\\ReadPreference',
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
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => false,
  'is_final' => true,
  'is_read_only' => false,
);
