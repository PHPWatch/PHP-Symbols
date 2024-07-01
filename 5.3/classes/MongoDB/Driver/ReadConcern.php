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
  ),
  'constants' => 
  array (
    'LOCAL' => 'local',
    'MAJORITY' => 'majority',
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
      'has_return_type' => NULL,
      'is_static' => false,
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
      'has_return_type' => NULL,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => NULL,
  'is_abstract' => false,
  'is_anonymous' => NULL,
  'is_cloneable' => NULL,
  'is_final' => true,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\Driver\\ReadConcern ] {

  - Constants [2] {
    Constant [ string LOCAL ] { local }
    Constant [ string MAJORITY ] { majority }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [2] {
    Method [ <internal:mongodb, ctor> final public method __construct ] {

      - Parameters [1] {
        Parameter #0 [ <optional> $level ]
      }
    }

    Method [ <internal:mongodb> final public method getLevel ] {

      - Parameters [0] {
      }
    }
  }
}
',
);
