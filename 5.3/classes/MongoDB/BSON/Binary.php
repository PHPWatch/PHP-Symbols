<?php

return array (
  'type' => 'class',
  'name' => 'MongoDB\\BSON\\Binary',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'MongoDB\\BSON\\Binary',
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
        'name' => 'MongoDB\\BSON\\Binary class (php.net)',
        'url' => 'https://www.php.net/manual/class.mongodb-bson-binary.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
    0 => 'MongoDB\\BSON\\Type',
  ),
  'constants' => 
  array (
    'TYPE_GENERIC' => 0,
    'TYPE_FUNCTION' => 1,
    'TYPE_OLD_BINARY' => 2,
    'TYPE_OLD_UUID' => 3,
    'TYPE_UUID' => 4,
    'TYPE_MD5' => 5,
    'TYPE_USER_DEFINED' => 128,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'MongoDB\\BSON\\Binary',
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
        'type' => 
        array (
          'position' => 1,
          'name' => 'type',
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
    'getData' => 
    array (
      'name' => 'getData',
      'class' => 'MongoDB\\BSON\\Binary',
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
    'getType' => 
    array (
      'name' => 'getType',
      'class' => 'MongoDB\\BSON\\Binary',
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
    '__wakeUp' => 
    array (
      'name' => '__wakeUp',
      'class' => 'MongoDB\\BSON\\Binary',
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
  'toString' => 'Class [ <internal:mongodb> final class MongoDB\\BSON\\Binary implements MongoDB\\BSON\\Type ] {

  - Constants [7] {
    Constant [ integer TYPE_GENERIC ] { 0 }
    Constant [ integer TYPE_FUNCTION ] { 1 }
    Constant [ integer TYPE_OLD_BINARY ] { 2 }
    Constant [ integer TYPE_OLD_UUID ] { 3 }
    Constant [ integer TYPE_UUID ] { 4 }
    Constant [ integer TYPE_MD5 ] { 5 }
    Constant [ integer TYPE_USER_DEFINED ] { 128 }
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [4] {
    Method [ <internal:mongodb, ctor> public method __construct ] {

      - Parameters [2] {
        Parameter #0 [ <required> $data ]
        Parameter #1 [ <required> $type ]
      }
    }

    Method [ <internal:mongodb> public method getData ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> public method getType ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:mongodb> public method __wakeUp ] {
    }
  }
}
',
);
